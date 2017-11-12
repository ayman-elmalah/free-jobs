<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Job extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function ($table) {
          $table->increments('id');
          $table->string('title', 255);
          $table->string('company_name', 100);
          $table->tinyInteger('category');
          $table->tinyInteger('experience');
          $table->tinyInteger('location');
          $table->text('description');
          $table->string('email_address', 100);
          $table->integer('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs');
    }
}
