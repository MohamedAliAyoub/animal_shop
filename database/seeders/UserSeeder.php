<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('12345678'),
                ] ,
                [
                'name' => 'mohamed ali',
                'email' => 'mohamedali163163@gmail.com',
                'password' => Hash::make('12345678'),
                ]
            ]
        );
    }
}
