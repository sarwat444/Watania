<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_messages', function (Blueprint $table) {
            $table->increments('id')->integer();
            $table->string('name') ; 
            $table->string('phone') ; 
            $table->string('email') ; 
            $table->string('subject') ; 
            $table->text('message') ; 
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
        Schema::dropIfExists('table_messages');
    }
}
