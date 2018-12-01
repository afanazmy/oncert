<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToEventOrganizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_organizers', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_event_organizers_users')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('event_id', 'fk_event_organizers_events')->references('id')->on('events')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('position_id', 'fk_event_organizers_positions')->references('id')->on('positions')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_organizers', function (Blueprint $table) {
            $table->dropForeign('fk_event_organizers_users');
            $table->dropForeign('fk_event_organizers_events');
            $table->dropForeign('fk_event_organizers_positions');
        });
    }
}
