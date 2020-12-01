<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                'price'=>'180000',
                'description'=>'A smartphone with 8gb ram and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png',
            ],
            [
                'name'=>'LG mobile',
                'price'=>'150000',
                'description'=>'A smartphone with 4gb ram and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg',
            ],
            [
                'name'=>'Panasonic Tv',
                'price'=>'200000',
                'description'=>'A smart tv with much more feature',
                'category'=>'tv',
                'gallery'=>'https://davidsusilouncensored.files.wordpress.com/2014/01/ces-2014-photo-tc-65ax800u_3cjpg1.jpg',
            ],
            [
                'name'=>'Sony Tv',
                'price'=>'190000',
                'description'=>'A tv with much more feature',
                'category'=>'tv',
                'gallery'=>'https://sahuagencies.com/wp-content/uploads/2017/11/SONY-LED-TV-KLV-32R422E1.jpg',
            ],
            [
                'name'=>'LG fridge',
                'price'=>'250000',
                'description'=>'A fridge with much more feature',
                'category'=>'fridge',
                'gallery'=>'https://brain-images-ssl.cdn.dixons.com/2/9/10192992/u_10192992.jpg',
            ],
            
        ]);
    }
}
