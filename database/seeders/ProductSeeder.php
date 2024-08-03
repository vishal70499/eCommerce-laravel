<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([[
            'name'=> 'Oppo',
            'price'=> '27000',
            'description'=> 'a smartphone with 8GB Ram and much more feature',
            'category'=> 'mobile',
            'gallery'=> 'https://opsg-img-cdn-gl.heytapimg.com/epb/202401/02/KhqjoFThjoKTH2FM.png?x-amz-process=image/format,webp/quality,Q_80'
        ],
        [
            'name'=> 'Samsung LED',
            'price'=> '15000',
            'description'=> 'a SmartTV with 32 Inches ,Glossy Black  and more feature',
            'category'=> 'SmartTV',
            'gallery'=> 'https://m.media-amazon.com/images/I/71RxCmvnrbL._SL1500_.jpg'
        ],
        [
            'name'=> 'snsung Refregirator',
            'price'=> '27000',
            'description'=> 'a refrgirator with more feature',
            'category'=> 'Refregirator',
            'gallery'=> 'https://m.media-amazon.com/images/I/71zcIkb4jmL._SL1500_.jpg'
        ]
    ]);
    }
}
