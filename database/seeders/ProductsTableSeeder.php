<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'Chai',                       'price' => 18.50, 'in_stock' => 39],
            ['name' => 'Chang',                      'price' => 19.25, 'in_stock' => 17],
            ['name' => 'Aniseed Syrup',              'price' => 10.99, 'in_stock' => 13],
            ['name' => 'Cajun Seasoning',            'price' => 22.35, 'in_stock' => 53],
            ['name' => 'Gumbo Mix',                  'price' => 21.50, 'in_stock' => 0],
            ['name' => 'Boysenberry Spread',         'price' => 25, 'in_stock' => 120],
            ['name' => 'Organic Dried Pears',        'price' => 30, 'in_stock' => 15],
            ['name' => 'Northwoods Cranberry Sauce', 'price' => 40.99, 'in_stock' => 6],
            ['name' => 'Manchego Cheese',            'price' => 38.50, 'in_stock' => 86],
            ['name' => 'Tofu',                       'price' => 23.15, 'in_stock' => 35],
            ['name' => 'Alice Mutton',               'price' => 39.99, 'in_stock' => 0],
            ['name' => 'Teatime Chocolate Biscuits', 'price' => 12.25, 'in_stock' => 25],
            ['name' => 'Marmalade',                  'price' => 18.99, 'in_stock' => 40]
        ];

        foreach($products as $product) {
            Product::create($product);
        }
    }
}
