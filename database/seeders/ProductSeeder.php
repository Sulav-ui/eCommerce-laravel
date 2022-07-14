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
        //
        DB::table('products')->insert([
            [
                'name' => 'Samsung Galaxy S21',
                'price' => '159992',
                'description' => 'A smartphone with 16GB RAM and much more features',
                'category' => 'mobile',
                'gallery' => "https://media.router-switch.com/media/catalog/product/cache/b90fceee6a5fa7acd36a04c7b968181c/s/a/samsung-galaxy-s21-5g-sm-g9910.jpg"
            ],
            [
                'name' => 'Samsung Neo QLED 4K TV',
                'price' => '253433',
                'description' => 'Brilliant details shine even in daylight with Samsung’s ultra-precise Quantum Mini LEDs.',
                'category' => 'tv',
                'gallery' => "https://i.rtings.com/assets/products/ucr7d4BW/samsung-qn90a-qled/design-medium.jpg"
            ],
            [
                'name' => 'LG TV 4K',
                'price' => '120000',
                'description' => 'A smart tv with 4k quality and much more features',
                'category' => 'tv',
                'gallery' => "https://www.lg.com/np/images/tvs/MD07530797/gallery/N01_65UP7750PTB-uhd-4k-tvs-D.jpg"
            ],
            [
                'name' => 'COLORS 190 LITERS REFRIGERATOR',
                'price' => '28000',
                'description' => 'A refrigirator adjustable shelves and much more features',
                'category' => 'fridge',
                'gallery' => "https://static-01.daraz.com.np/p/d833e9415356f9c91159609a0e295f3d.jpg"
            ]
        ]);
    }
}
