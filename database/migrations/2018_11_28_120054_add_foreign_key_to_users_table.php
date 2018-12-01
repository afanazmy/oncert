<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('division_id', 'fk_users_divisions')->references('id')->on('divisions')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('daily_manager_id', 'fk_users_daily_managers')->references('id')->on('daily_managers')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('fk_users_divisions');
            $table->dropForeign('fk_users_daily_managers');
        });
    }
}
