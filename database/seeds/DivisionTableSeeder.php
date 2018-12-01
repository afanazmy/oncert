<?php

use Illuminate\Database\Seeder;
use App\Division;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::create([
            'code' => 'ADPA',
            'name' => 'Administrasi Publikasi dan Advokasi'
        ]);

        Division::create([
            'code' => 'EON',
            'name' => 'Event Organizer and Network'
        ]);

        Division::create([
            'code' => 'EPS',
            'name' => 'Entrepreneurship'
        ]);

        Division::create([
            'code' => 'SIS',
            'name' => 'Study Intra Scientica'
        ]);

        Division::create([
            'code' => 'TEA',
            'name' => 'Talent Entertainment and Art'
        ]);
    }
}
