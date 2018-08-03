<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAvatarAndIntroductionToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('users','avatar') && !Schema::hasColumn('users','introduction')) {
            Schema::table('users', function (Blueprint $table) {
                //
                $table->string('avatar')->nullable();
                $table->string('introduction')->nullable();
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
        if (Schema::hasColumn('users','avatar') && Schema::hasColumn('users','introduction')) {
            Schema::table('users', function (Blueprint $table) {
                //
                $table->dropColumn('avatar');
                $table->dropColumn('introduction');
            });
        }
    }
}
