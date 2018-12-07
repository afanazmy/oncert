<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'key' => 'base',
            'value'=> '/1.5/HIMAKOMSI/V/2018'
        ]);

        Setting::create([
            'key' => 'base',
            'value'=> '1'
        ]);
    }
}
