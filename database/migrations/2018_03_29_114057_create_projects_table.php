<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration 
{
	public function up()
	{
		Schema::create('projects', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 80)->index();
            $table->text('summary');
            $table->string('img', 255);
            $table->integer('user_id')->unsigned()->index();
            $table->integer('reply_count')->unsigned()->default(0);
            $table->integer('view_count')->unsigned()->default(0);
            $table->integer('order')->unsigned()->default(0);
            $table->string('slug')->nullable();
            $table->string('banned')->nullable();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('projects');
	}
}
