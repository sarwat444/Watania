<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team  ;
use App\Job ;

class TeamworkController extends Controller
{
    public  function  teamwork($jobId = null )
    {  
        $x = $jobId ; 
        $teams = Team::with(["job"])
            ->when($jobId, function ($q) use ($jobId) {
                return $q->where("job_id", $jobId);
            })->get();

    
  
        $jobs = Job::all();
         return  view('admin.teamwork.teamwork')->with(compact("teams", 'jobs' , 'x'));
    }
    
    public function  addteamwork(Request $request)
    {
        
        return  view('admin.teamwork.add-member') ;
        
    }

    /*Site Add Team works */
 
    public  function  editteamwork(Request $request)
    {
        
        return  view('admin.teamwork.edit-teamwork') ;
        
    }
      public  function  viewteamwork(Request $request ,$id=null)
    {
        $pendingProjects = [];
        $activeProjects = [];
        $completedProjects = [];
       $team =  Team::with(["job", 'projects:id,title,end_date', 'projects'])->where(['id'=> $id])->first() ; 
      
      //return $team ;
       foreach($team->projects as $project) {
            if($project->pivot->team_status_id == 1) {
                $pendingProjects[] = $project;


            }
            else if($project->pivot->team_status_id == 2) {
                $activeProjects[] = $project;
            }
            else if($project->pivot->team_status_id == 3) {
                $completedProjects[] = $project;
            }
        }


        return  view('admin.teamwork.view-teamwork')->with(compact('pendingProjects' , 'activeProjects' , 'completedProjects' ,'team')) ;
        
    }
}
