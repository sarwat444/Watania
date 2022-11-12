<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Job;
use App\Applicant;
use App\ApplicantFile;

class JopApplicantController extends Controller
{
   public  function  jobapplicantes($jobId = null )
    {   

$x = $jobId ; 
      $applicants = Applicant::with(["job"])
          ->when($jobId, function ($q) use ($jobId) {
              return $q->where("job_id", $jobId);
          })->get();

      $jobs = Job::all();
       return  view('admin.applicantes.jobapplicantes')->with(compact("applicants", 'jobs' , 'x'));
    }
    
    public function viewjobapplicant($id = null )
    {
        $applicant =  Applicant::with('files')->where(['id'=>$id])->first() ; 

       return  view('admin.applicantes.view-jobapplicantesDetails')->with(compact('applicant')) ;  
    }
  

    
}
