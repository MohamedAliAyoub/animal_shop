<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
                [
                    'image' => '1.JFIF',
                    'product_id' => '1',

                ] ,

                [
                    'image' => '2.JFIF',
                    'product_id' => '2',

                ] ,
                [
                    'image' => '2.JFIF',
                    'product_id' => '3',

                ] ,
                [
                    'image' => '2.JFIF',
                    'product_id' => '4',

                ] ,


            ]
        );
    }
}
