<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function ($table) {
          $table->increments('id');
          $table->integer('job_id')->unsigned();
          $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
          $table->string('name', 100);
          $table->text('report');
          $table->boolean('view');
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
        Schema::drop('reports');
    }
}
