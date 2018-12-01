<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'name'  => "CHILD 2017"
        ]);

        Event::create([
            'name'  => "KTA 2017"
        ]);

        Event::create([
            'name'  => "Korsa Angkatan"
        ]);

        Event::create([
            'name'  => "HIMOTICON 2017"
        ]);

        Event::create([
            'name'  => "ROUND UP 2017"
        ]);

        Event::create([
            'name'  => "VOCOMFEST 2017"
        ]);

        Event::create([
            'name'  => "DONDAR 2017"
        ]);

        Event::create([
            'name'  => "Seminar Workshop TA 2017"
        ]);

        Event::create([
            'name'  => "SLC (GENAP) 2017"
        ]);

        Event::create([
            'name'  => "MAKRAB 2017"
        ]);

        Event::create([
            'name'  => "PELATJUR 2017"
        ]);

        Event::create([
            'name'  => "DIVWAR 2017"
        ]);

        Event::create([
            'name'  => "SEMINAR TECHNOPRENEUR 2017"
        ]);

        Event::create([
            'name'  => "PEMILIHAN RAYA 2017"
        ]);

        Event::create([
            'name'  => "RAINBOWCIS 2017"
        ]);

        Event::create([
            'name'  => "ALGORHYTHM 2017"
        ]);

        Event::create([
            'name'  => "CODEFEST 2017"
        ]);

        Event::create([
            'name'  => "LDK 2017"
        ]);

        Event::create([
            'name'  => "SLC 2017"
        ]);

        Event::create([
            'name'  => "TECHTALK 2018"
        ]);

        Event::create([
            'name'  => "ROUND UP 2018"
        ]);

        Event::create([
            'name'  => "KULIAH UMUM 2018"
        ]);

        Event::create([
            'name'  => "VOCOMFEST 2018"
        ]);

        Event::create([
            'name'  => "ALGORHYTHM 2018"
        ]);

        Event::create([
            'name'  => "CODEFEST 2018"
        ]);
    }
}
