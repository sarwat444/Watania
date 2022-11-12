<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamwork', function (Blueprint $table) {
            $table->increments('id')->integer();
            $table->string('phone') ;
            $table->string('email') ;
            $table->string('job_title') ; 
            $table->integer('team_category') ; 
            $table->text('responsibilty') ; 
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
        Schema::dropIfExists('teamwork');
    }
}
