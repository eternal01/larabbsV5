<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration 
{
	public function up()
	{
        if (!Schema::hasTable('replies')) {
            Schema::create('replies', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('topic_id')->unsigned()->default(0)->index();
                $table->integer('user_id')->unsigned()->default(0)->index();
                $table->text('content');
                $table->timestamps();
            });
        }
	}

	public function down()
	{
        if (Schema::hasTable('replies')) {
            Schema::drop('replies');
        }
	}
}
