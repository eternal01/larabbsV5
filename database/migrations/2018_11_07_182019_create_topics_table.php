<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration 
{
	public function up()
	{
        if (!Schema::hasTable('topics')) {
            Schema::create('topics', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title')->index();
                $table->text('body');
                $table->integer('user_id')->unsigned()->index();
                $table->integer('category_id')->unsigned()->index();
                $table->integer('reply_count')->unsigned()->default(0);
                $table->integer('view_count')->unsigned()->default(0);
                $table->integer('last_reply_user_id')->unsigned()->default(0);
                $table->integer('order')->unsigned()->default(0);
                $table->text('excerpt')->nullable();
                $table->string('slug')->nullable();
                $table->timestamps();
            });
        }
	}

	public function down()
	{
        if (Schema::hasTable('topics')) {
            Schema::drop('topics');
        }
	}
}
