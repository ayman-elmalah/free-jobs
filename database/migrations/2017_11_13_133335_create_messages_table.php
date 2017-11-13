<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('messages', function ($table) {
        $table->increments('id');
        $table->string('name', 100);
        $table->string('email', 100);
        $table->string('subject', 255);
        $table->text('message');
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
        Schema::drop('messages');
    }
}
