<?php

use Illuminate\Database\Seeder;
use App\DailyManager;

class DailyManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DailyManager::create([
            'name' => 'Ketua Umum'
        ]);

        DailyManager::create([
            'name' => 'Sekretaris Jenderal'
        ]);

        DailyManager::create([
            'name' => 'Sekretaris Umum'
        ]);

        DailyManager::create([
            'name' => 'Bendahara Umum'
        ]);

        DailyManager::create([
            'name' => 'Kepala Divisi Administrasi Publikasi dan Advokasi'
        ]);

        DailyManager::create([
            'name' => 'Kepala Divisi Event Organizer and Network'
        ]);

        DailyManager::create([
            'name' => 'Kepala Divisi Entrepreneurship'
        ]);

        DailyManager::create([
            'name' => 'Kepala Divisi Study Intra Scientica'
        ]);

        DailyManager::create([
            'name' => 'Kepala Divisi Talent Entertainment and Art'
        ]);
    }
}
