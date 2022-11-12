<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AboutController ;
use  App\Http\Controllers\ServicesController ;
use  App\Http\Controllers\WorksController ;
use  App\Http\Controllers\ContactsController ;
use  App\Http\Controllers\AdminController ;
use  App\Http\Controllers\ProjectsController ;
use  App\Http\Controllers\ProjectsRequestsController ;
use  App\Http\Controllers\JopApplicantController ;
use  App\Http\Controllers\ShowsController ;
use  App\Http\Controllers\HostsController ;
use  App\Http\Controllers\TeamworkController ;
use  App\Http\Controllers\MediaController ;
use  App\Http\Controllers\OffersController ;
use  App\Http\Controllers\siteservicecontroller ;
use  App\Http\Controllers\UsersController ;
use  App\Http\Controllers\sitehostingcontroller ;
use  App\Http\Controllers\korasaEshtertatController ;
use  App\Http\Controllers\mostaklasController;
use  App\Http\Controllers\mawkefTanfezyController;
use  App\Http\Controllers\FaxController ;
use  App\Http\Controllers\sectorController ;
use  App\Http\Controllers\amrEsnadController ;
use  App\Http\Controllers\AkdController ;
use  App\Http\Controllers\faxviewerController ;

Route::get('/index', 'faxviewerController@index');
Route::match(['get','post '] ,'/login', 'faxviewerController@login');
Auth::routes();
Route::group(['middleware'=>['auth']],function(){

         //Admin Dashboard

         Route::get('/','AdminController@dashboard');
         Route::get('/admin/dashboard','AdminController@dashboard');
         Route::post('admin/store-media' ,'MediaController@storeMedia') ;
         Route::post('admin/delete-media' ,'MediaController@deleteTmpMedia') ;


      //Eltezmat
        Route::get ('admin/eltezam/{id}','eltezamController@index');
        Route::match(['get' ,'post'] ,'admin/addeltezam/{id}','eltezamController@add');
        Route::match(['get' ,'post'] ,'admin/editeltezam/{id}','eltezamController@edit');
        Route::get('admin/vieweltezam/{id}','eltezamController@view');
        Route::get('admin/deleteeltezam/{id}','eltezamController@delete');




         //projects

        Route::get('/admin/projects','ProjectsController@projects');
        Route::match(['get' , 'post'] ,'/admin/add-project','ProjectsController@addproject');
        Route::get('/admin/view-project/{id}','ProjectsController@viewproject');
        Route::match(['get' , 'post' ] ,'/admin/edit-project/{id}','ProjectsController@editproject');
        Route::match(['get' , 'post' ] ,'/admin/delete-project/{id}' ,'ProjectsController@deleteproject' );

        //Print Projects
        Route::get('/admin/print-projects','ProjectsController@printprojects');
        Route::get('/admin/print-project/{id}','ProjectsController@printproject');




      //korasa eshteratat

       Route::match(['get' , 'post'] , '/admin/add_korasa/{id?}/{status?}','korasaEshtertatController@addkorasaeshteratat');
       Route::match(['get' , 'post'] , '/admin/korasa_eshteratat/{id?}/{status?}','korasaEshtertatController@edit_koras');

       Route::get('/admin/view-korasa/{id}','korasaEshtertatController@viewkorasa');

       Route::match(['get' , 'post'] ,'/admin/delete-korasa/{id}','korasaEshtertatController@deletekorasa');

       Route::get('/admin/korasat/{id}','korasaEshtertatController@korasat');


        // Akd

        Route::match(['get' , 'post'] , '/admin/add_akd/{id}/','AkdController@addakd');
        Route::match(['get' , 'post'] , '/admin/delete-akd/{id}/','AkdController@deleteakd');
        Route::match(['get' , 'post'] , '/admin/edit_akd/{id}/','AkdController@editakd');
        Route::get('/admin/akwad/{id}','AkdController@akwad');
        Route::get('/admin/view-akd/{id}','AkdController@viewakd');


         // Other

                Route::match(['get' , 'post'] , '/admin/add_other/{id}/','othercontroller@addother');
                Route::get('/admin/other/{id}','othercontroller@other');
                Route::match(['get' , 'post'] , '/admin/delete-other/{id}/','othercontroller@deleteother');
                Route::match(['get' , 'post'] , '/admin/edit_other/{id}/','othercontroller@editother');
                Route::get('/admin/view-other/{id}','othercontroller@viewother');
        // Mokaysat




        // owner

         Route::match(['get' , 'post'] ,'/admin/addmokaysaowner/{id?}/{status?}' ,'mokaysaController@addmokaysaowner') ;
         Route::match(['get' , 'post'] ,'/admin/mokaysat/{id?}/{status?}' ,'mokaysaController@mokaysat') ;
         Route::match(['get' , 'post'] , '/admin/add-mokaysa/{id?}/{status?}','mokaysaController@addmokaysa');
         Route::match(['get' , 'post'] , '/admin/add-mokaysa-bnod/{id}','mokaysaController@addbnood');
         Route::match(['get' , 'post'] , '/admin/view-mokaysa/{id?}','mokaysaController@viewmokaysa');
         Route::match(['get' , 'post'] , '/admin/edit-mokaysa/{id?}','mokaysaController@editmokaysa');

         Route::match(['get' , 'post'] , '/admin/moda/{id?}','ModaController@moda');
         Route::match(['get' , 'post'] , 'admin/add-moda/{id?}','ModaController@addmoda');
         Route::match(['get' , 'post'] , 'admin/delete-moda/{id?}','ModaController@deletemoda');
         Route::match(['get' , 'post'] , 'admin/edit-moda/{id?}','ModaController@editmoda');
         Route::match(['get' , 'post'] , '/admin/view-moda/{id}','ModaController@viewmoda');


       Route::post('/admin/mokaysa/appendmokaysa' ,'mokaysaController@appendmokaysa')  ;





       //mostakhas

       Route::get ('admin/mostaklas/{id}','mostaklasController@mostaklasat');
       Route::match(['get' ,'post'] ,'admin/add_mostaklas/{id?}/{status?}','mostaklasController@addmostaklas');
       Route::match(['get' ,'post'] ,'admin/edit_mostaklas/{id}','mostaklasController@edit_mostaklas');
       Route::get('admin/view_mostaklas/{id}','mostaklasController@viewmostaklas');
       Route::get('admin/delete_mostaklas/{id}','mostaklasController@deletemostaklas');




       //mawkef Tanfezy Malek

       Route::get ('admin/mawkef_tanfezy/{id?}/{status?}','mawkefTanfezyController@mawkeftanfezy');
       Route::match(['get' ,'post'] ,'admin/add_mawkef_tanfezy/{id?}/{status?}','mawkefTanfezyController@add_mawkef_tanfezy');
       Route::match(['get' ,'post'] ,'admin/edit_mawkef_tanfezy/{id?}','mawkefTanfezyController@edit_mawkef_tanfezy');
       Route::get('admin/delete_mawkef_tanfezy/{id}','mawkefTanfezyController@delete_mawkef_tanfezy');
       Route::get('admin/view-mawkef/{id}','mawkefTanfezyController@viewmawkef');


       //Sectors
        Route::get('/admin/sectors','sectorController@sectors');
        Route::match(['get' , 'post' ] ,'/admin/add-sector','sectorController@addsector');
        Route::match(['get' , 'post' ] ,'/admin/edit-sector/{id}','sectorController@editsector');
        Route::match(['get' , 'post' ] ,'/admin/delete-sector/{id}' ,'sectorController@deletesector' );

        //fax
        Route::get('/admin/fax','FaxController@fax');
        Route::match(['get' , 'post' ] ,'/admin/add-fax','FaxController@addfax');
        Route::get('/admin/view-fax/{id}','FaxController@viewfax');
        Route::get('/admin/print-fax/{id}','FaxController@printfax');

        Route::match(['get' , 'post' ] ,'/admin/edit-fax/{id}','FaxController@editfax');
        Route::match(['get' , 'post' ] ,'/admin/delete-fax/{id}' ,'FaxController@deletefax' );
        Route::post('admin/fax/redirect_fax','FaxController@redirectfax');

        //Amr esnad

        Route::get('/admin/amresnads/{id?}/{status?}','amrEsnadController@amresnad');
        Route::match(['get' , 'post'] ,'/admin/add-amresnad/{id?}/{status?}','amrEsnadController@addamresnad');
        Route::get('/admin/view-amresnad/{id}','amrEsnadController@viewamresnad');
        Route::match(['get' , 'post' ] ,'/admin/edit-amresnad/{id}','amrEsnadController@editamresnad');
        Route::match(['get' , 'post' ] ,'/admin/delete-amresnad/{id}' ,'amrEsnadController@deleteamresnad' );

        //offers
        Route::get('/admin/offers','OffersController@offers');
        Route::get('/admin/add-offer','OffersController@addoffer');
        Route::post('/admin/add-offer','OffersController@addoffer');

        Route::get('/admin/edit-offer/{id}','OffersController@editoffer');
        Route::post('/admin/edit-offer/{id}','OffersController@editoffer');
        Route::get('/admin/view-offer/{id}','OffersController@viewoffer');

    Route::match(['get' , 'post'] , '/admin/delete-offer/{id}','OffersController@deleteoffer') ;

   //Project Requests

   Route::get('/admin/project-requests','ProjectsRequestsController@projectsrequests');
   Route::get('admin/confirm-projectrequest/{id}','ProjectsRequestsController@confirmprojectrequest');
   Route::post('/admin/confirm-projectrequest/{id}','ProjectsRequestsController@confirmprojectrequest');
   Route::get('/admin/view-projectrequest/{id}','ProjectsRequestsController@viewprojectrequest');



   Route::get('/admin/edit-offer/{id}','ProjectsRequestsController@editprojectrequest');
   Route::post('/admin/edit-offer/{id}','ProjectsRequestsController@editoffer');
   Route::get('/admin/view-offer/{id}','ProjectsRequestsController@viewoffer');
   Route::match(['get' , 'post'] , '/admin/delete-offer/{id}','ProjectsRequestsController@deleteoffer') ;


    //job applicants
    Route::get('/admin/jobapplicantes/{job_id?}','JopApplicantController@jobapplicantes');
    Route::get(' admin/view-jobapplicant/{id}','JopApplicantController@viewjobapplicant');
    Route::match(['get' , 'post'] , ' admin/delete-jobapplicant/{id}','JopApplicantController@deletejobapplicant');


    //teamwork
    Route::get('/admin/teamwork/{job_id?}', 'TeamworkController@teamwork');
    Route::get('/admin/view-teamwork/{id}','TeamworkController@viewteamwork');
    Route::get('/admin/add-teamwork'  ,   'TeamworkController@addteamwork');
    Route::post('/admin/add-teamwork'  ,   'TeamworkController@addteamwork');







    /*
    Route::match(['get' , 'post' ] , '/admin/add-member'  ,   'TeamworkController@addteamwork');
    Route::match(['get' , 'post' ] , '/admin/edit-teamwork' , 'TeamworkController@editteamwork');
    Route::match(['get' , 'post' ] , '/admin/view-teamwork' , 'TeamworkController@viewteamwork');

*/

    //hosts
    Route::get('/admin/hosting','HostsController@hosts');

    Route::get('/admin/add-host','HostsController@addhost');
    Route::post('/admin/add-host','HostsController@addhost');

    Route::get('/admin/edit-host/{id}','HostsController@edithost');
    Route::post('/admin/edit-host/{id}','HostsController@edithost');

    Route::get('/admin/view-host/{id}' ,'HostsController@viewhost');
    Route::match(['get' , 'post'] , '/admin/delete-host/{id}' ,'HostsController@deletehost');


    //services

    Route::get('/admin/services', 'ServicesController@services');
    Route::get('/admin/add-services' , 'ServicesController@addservice');
    Route::post('/admin/add-services' , 'ServicesController@addservice');
    Route::get('/admin/view-service/{id}' ,'ServicesController@viewservice' );
    Route::get('/admin/edit-service/{id}' ,'ServicesController@editservice' );

    Route::post('/admin/edit-service/{id}' ,'ServicesController@editservice' );
    Route::match(['get' , 'post' ] ,'/admin/delete-service/{id}' ,'ServicesController@deleteservice' );
    Route::match(['get' , 'post' ] , '/admin/view-services' , 'ServicesController@viewservice');

   //admins
    Route::get('/admin/admins', 'UsersController@admins')->middleware('checksuper');
    Route::get('/admin/add-admin' , 'UsersController@addadmin')->middleware('checksuper');;
    Route::post('/admin/add-admin' , 'UsersController@addadmin')->middleware('checksuper');;
    Route::get('/admin/edit-admin/{id}' , 'UsersController@editadmin')->middleware('checksuper');;
    Route::post('/admin/edit-admin/{id}' , 'UsersController@editadmin')->middleware('checksuper');;
    Route::get('/admin/view-admin/{id}' ,'UsersController@viewadmin' )->middleware('checksuper');;




    Route::post('/admin/edit-service/{id}' ,'UsersController@editadmin' );

    Route::match(['get' , 'post' ] ,'/admin/delete-admin/{id}' ,'UsersController@deleteadmin' );



    //contacts
    Route::get('/admin/contactus','AdminContactus@contactus');
    Route::get('/admin/add-contactus','AdminContactus@addcontactus');
    Route::post('/admin/add-contactus','AdminContactus@addcontactus');


    Route::post('/admin/edit-contactus','AdminContactus@addcontactus');

    Route::get('/admin/edit-contactus/{id}','AdminContactus@editcontactus');
    Route::post('/admin/edit-contactus/{id}','AdminContactus@editcontactus');
    Route::match(['get' , 'post'] , '/admin/delete-contactus/{id}','AdminContactus@deletecontactus');
    Route::get('/admin/view-contactus/{id}' ,'AdminContactus@viewcontactus');
    Route::match(['get' , 'post'] , '/admin/delete-contactus/{id}' ,'AdminContactus@deletecontactus');


     //Messages
     Route::get('/admin/messages','MeassagesController@messages');
     Route::get('/admin/view-message/{id}','MeassagesController@viewmessage');
     Route::match(['get' , 'post' ] ,'/admin/delete-message/{id}' ,'MeassagesController@deletemessage' );


});
//Start  Admin Routes


// Website  Routes

//Language Translation
//Route::get('index/{locale}', 'HomeController@lang');

//Socialite
// Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
// Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');


