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
                'gallery' => "https://www.cnet.com/a/img/resize/979330a06e7a2aed4c201c70328f58f5d3421351/2021/01/20/5ac18449-617c-49ba-83f2-2971cb51078c/215-samsung-galaxy-s21-ultra-back.jpg?auto=webp&fit=crop&height=675&width=1200"
            ],
            [
                'name' => 'Samsung Neo QLED 4K TV',
                'price' => '253433',
                'description' => 'Brilliant details shine even in daylight with Samsung’s ultra-precise Quantum Mini LEDs.',
                'category' => 'tv',
                'gallery' => "https://i0.wp.com/onhike.com/wp-content/uploads/2021/04/2021-Samsung-Neo-QLED-8K-Neo-QLED-4K-TVs.jpg?fit=1200%2C675&ssl=1"
            ],
            [
                'name' => 'LG TV 4K',
                'price' => '120000',
                'description' => 'A smart tv with 4k quality and much more features',
                'category' => 'tv',
                'gallery' => "https://www.cnet.com/a/img/resize/8e08d7376b41d6aa4594fe30579f3c69b28753cf/hub/2016/07/27/b43fd760-1dce-4d90-bded-6a764d9ea53d/lg-uh8500-series-02.jpg?auto=webp&fit=crop&height=675&width=1200"
            ],
            [
                'name' => 'COLORS 190 LITERS REFRIGERATOR',
                'price' => '28000',
                'description' => 'A refrigirator adjustable shelves and much more features',
                'category' => 'fridge',
                'gallery' => "https://www.cnet.com/a/img/resize/46b36e7c85bd804746d59a1dcc159b3b9e3b6cf0/hub/2015/05/16/0b0dfa43-041a-4fd0-9fde-025efbe9b721/ge-french-door-refrigerator-pfe28rshss-product-photos-21.jpg?auto=webp&fit=crop&height=675&width=1200"
            ],
        ]);
    }
}
