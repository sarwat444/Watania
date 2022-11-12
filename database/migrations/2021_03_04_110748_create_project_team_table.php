<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_team', function (Blueprint $table) {
            $table->increments('id')->integer();
            $table->string("path")->nullable();
            $table->float("price")->nullable();
            $table->float("debtor")->nullable();
            $table->float("creditor")->nullable();
            $table->unsignedBigInteger("project_id")->nullable();
            $table->unsignedBigInteger("team_id")->nullable();
            $table->unsignedBigInteger("team_status_id")->nullable();
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
        Schema::dropIfExists('project_team');
    }
}
