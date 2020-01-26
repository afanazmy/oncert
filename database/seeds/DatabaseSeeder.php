<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DivisionTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(PositionTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(DailyManagerTableSeeder::class);
        // $this->call(EventOrganizerTableSeeder::class);

    }
}
