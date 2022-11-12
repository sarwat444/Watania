<?php

namespace App\Http\Controllers;
use App\Message ;
use App\Applicant ;
use App\ProjectRequest ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project ;
use App\ProjectType ;
use App\ProjectTypes ;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
   public  function dashboard()
   {

    $messages_count = Message::count();
    $applicants_count = Applicant::count();
    $projects_count = ProjectRequest::count();
    $portofolios_count = Project::count();


    $tam_eltanfez    =    Project::where('project_status', 0)->count();
    $taslemebtedaky  =    Project::where('project_status', 1)->count();
    $taslem_nhaky    =    Project::where('project_status', 2)->count();
    $gary_eltanfez   =    Project::where('project_status', 3)->count();
    $takt_elderasa   =    Project::where('project_status', 4)->count();


    //$maintainceMode = app()->isDownForMaintenance();

    $projectTypes = Project::select([
        DB::raw("COUNT(projects.id) as projects_count"),
        'project_types.project_type_id',
    ])
    ->leftJoin('project_types', 'projects.id', 'project_types.project_id')
    ->groupBy("project_types.project_type_id")->get();

    $data = $this->formatProjectTypes($projectTypes);


   $projectStatusNames = [];
   $projectStatusCounts = [];
   $projectStatusColors = [];
   $total = array_sum(array_column($data, 'projects_count'));

   foreach($data as $projectStatus) {

       $projectStatusNames[] = $projectStatus['name'];
       $projectStatusCounts[] = round(($projectStatus['projects_count'] / $total ) * 100 , 2 );
       $projectStatusColors[] = $projectStatus['color'];
   }


       return  view('admin.index')->with(compact('tam_eltanfez' , 'taslemebtedaky' , 'taslem_nhaky' , 'gary_eltanfez' , 'takt_elderasa', 'messages_count' , 'applicants_count' , 'projects_count' ,'portofolios_count' , 'projectStatusNames' ,'projectStatusCounts' ,'projectStatusColors' ,'total')) ;
   }

   public function  searchForType($type_id  , $project_types ){
        foreach($project_types as $type)
        {

            if( $type->project_type_id == $type_id ) { return $type ;}

        }
        return false  ;

   }
   public function formatProjectTypes($projectTypes) {
    $types = ProjectTypes::all();
    $data = [];
    foreach($types as $type) {

        $tt = $this->searchForType($type->id, $projectTypes);
        $projectsCount = 0;
        if($tt) {
            $projectsCount = $tt->projects_count;
        }
        $data [] = [
            'name' => $type->name,
            'projects_count' => $projectsCount,
            'color' => $type->color,
        ];
    }
    return $data;
}



}
