<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\ProjectRequest ;
use  App\TeamStatus ;
use App\ProjectStatus ;
use App\ProjectFile ;
use App\Team ;
use  App\ProjectLink ;
use Carbon\Carbon ;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProjectsRequestsController extends Controller
{


    public  function  projectsrequests()
    {
       $projectinfo = ProjectRequest::get() ;
       return  view('admin.project_requests.project-requests')->with(compact('projectinfo')) ;
    }



    public function  addprojectrequest(Request $request)
    {

        return  view('admin.project_requests.add-project') ;

    }
    public  function  viewprojectrequest($id=null)
    {
        $project = ProjectRequest::with("type", "teams")->where(['id' => $id])->first();
        $projectStatuse = ProjectStatus::where([ 'id' => $project->project_status_id  ])->first();
        $projectlinks =  ProjectLink::where(['project_id' => $id ])->get() ;
        return  view('admin.project_requests.view-project-request')->with(compact('project' , 'projectStatuse' ,'projectlinks') ) ;

    }


      public  function  confirmprojectrequest(Request $request , $id = null )
    {

        if($request->isMethod('post')){
            $project = ProjectRequest::with('teams')->where(['id'=> $id])->first() ;
            $request['start_date'] = Carbon::createFromFormat('d M, Y' , $request->start_date)->format('Y/m/d');
            $request['end_date'] = Carbon::createFromFormat('d M, Y' ,$request->end_date)->format('Y/m/d');
            /*
            $rules = [];
            $rules += ['price' => ['required']];
            $rules += ['number_of_screens' => ['required']];
            $rules += ['project_status_id' => ['required']];
            $rules += ['start_date' => ['required']];
            $rules += ['end_date' => ['required']];

            $request->validate($rules);
    */
            $request_data = $request->all();


            $path = "uploads/projects/";
            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            $teamsData = [];

            if(isset($request->teams) && count($request->teams)) {



                foreach ($request->teams as $key => $team) {
                    $fileName = null;
                    if ($request->hasFile("teams." . $key . ".path")) {
                        $file = $request->file("teams." . $key . ".path");
                        $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
                        $file->move($path, $fileName);

                    }

                    $teamsData[$team['team_id']] = [
                        'price' => $team['price'],
                        'path' => $fileName,
                        'debtor' => $team['debtor'],
                        'creditor' => $team['creditor'],
                        'team_status_id' => $team['team_status_id'],
                    ];
                }



                $project->teams()->sync($teamsData);
            }



            $project->update($request_data);



              // update project files
        if (count($project->files) > 0) {
            foreach ($project->files as $media) {
                if (!in_array($media->path, $request->input('document', []))) {
                    Storage::disk('uploads')->delete('projects/' . $media->path);
                    ProjectFile::where("id", $media->id)->delete();
                }
            }
        }


        $media = $project->files->pluck('path')->toArray();

        $projectFiles = [];

        foreach ($request->input('document', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                File::move(public_path('tmp-uploads/' . $file), $path . $file);
                $projectFiles[] = [
                    'path' => $file,
                    "project_id" => $project->id,
                ];
            }
        }


        if (count($projectFiles) > 0) {
            ProjectFile::insert($projectFiles);
        }

        return redirect()->back()->with('flash_message_success', 'لقد  تم تعديل بيانات المشروع  بنجاج     ');


        }
        $project = ProjectRequest::with("type", "teams")->first();
        $teamStatuses = TeamStatus::all();
        $projectStatuses = ProjectStatus::all();
        $teams = Team::all();

        return  view('admin.project_requests.confirm')->with(compact('project', 'teamStatuses', 'projectStatuses', 'teams'));

    }

}
