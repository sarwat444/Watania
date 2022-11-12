<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobApplicantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_applicantes', function (Blueprint $table) {
           $table->increments('id')->integer();
           $table->string('name') ; 
           $table->string('job_title') ; 
           $table->integer('category') ; 
           $table->string('email') ;
           $table->string('phone') ;
           $table->text('details') ;
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
        Schema::dropIfExists('job_applicantes');
    }
}
