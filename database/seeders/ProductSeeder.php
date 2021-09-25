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
                    'price' => '24.051',
                ] ,
                [
                    'name' => 'قطة 1',
                    'number' => '010233',
                    'description' => 'عمره 3 اعوام غير مريض ',
                    'category_id' => '2',
                    'price' => '99.99',

                ] ,
                [
                    'name' => 'فيل 1',
                    'number' => '01022533',
                    'description' => 'عمره 3 اعوام غير مريض ',
                    'category_id' => '2',
                    'price' => '99.99',

                ] ,
                [
                    'name' => 'اسد 1',
                    'number' => '01550233',
                    'description' => 'عمره 3 اعوام غير مريض ',
                    'category_id' => '2',
                    'price' => '99.99',

                ] ,

            ]
        );
    }
}
