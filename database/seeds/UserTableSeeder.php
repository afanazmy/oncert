<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              => 'Sekjend Bebas',
            'email'             => 'sekjend@himakomsi.jaya',
            'email_verified_at' => Carbon::now(),
            'password'          => bcrypt('sekjendcuk')
        ]);

        User::create([
            'name'              => 'Sekum Mumet',
            'email'             => 'sekum@himakomsi.jaya',
            'email_verified_at' => Carbon::now(),
            'password'          => bcrypt('sekumcuk')
        ]);
    }
}
