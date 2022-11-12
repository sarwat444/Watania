<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_request', function (Blueprint $table) {
            $table->increments('id')->integer();
            $table->string('name') ; 
            $table->string('email') ; 
            $table->string('title') ;
            $table->text('description') ; 
            $table->string('logo') ;   
            $table->date('strat_date') ;  
            $table->date('end_date') ;  
            $table->integer('price') ; 
            $table->integer('number_of_screens') ; 
            $table->integer('project_type_id') ;
            $table->integer('project_status_id') ;
            $table->integer('status')->default(0) ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_request');
    }
}
