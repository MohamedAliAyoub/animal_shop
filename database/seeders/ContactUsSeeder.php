<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_us')->insert([
                [
                    'name' => 'محمد',
                    'email' => 'o@gmail.com',
                    'phone' => '01023222',
                    'description' => 'اريد التواصل مع ادارة الموقع',
                ] ,
                [
                    'name' => 'علي',
                    'email' => 'oo@gmail.com',
                    'phone' => '01023222',
                    'description' => 'اريد التواصل مع ادارة الموقع',
                ] ,
            ]
        );
    }
}
