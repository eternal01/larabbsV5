<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('links')) {
            Schema::create('links', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title')->comment('资源的描述')->index();
                $table->string('link')->comment('资源的链接')->index();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('links')) {
            Schema::dropIfExists('links');
        }
    }
}
