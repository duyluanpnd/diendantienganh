<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->insert([
            'name'     => 'Admin',
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            'phone'    => '0123456789',
            'active'   => 1

        ]);
    }
}
