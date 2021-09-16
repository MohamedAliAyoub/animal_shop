<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
                [
                    'name' => 'كلب 1',
                    'number' => '010233',
                    'description' => 'عمره 3 اعوام غير مريض ',
                    'category_id' => '1',
                ] ,
                [
                    'name' => 'قطة 1',
                    'number' => '010233',
                    'description' => 'عمره 3 اعوام غير مريض ',
                    'category_id' => '2',
                ] ,

            ]
        );
    }
}
