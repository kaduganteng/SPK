<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'rayhanjundi77@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
    }
}
