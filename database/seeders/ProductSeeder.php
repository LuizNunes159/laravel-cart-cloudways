<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $products = [
            [
                'name' => 'caguei',
                'details' => 'asdasdhai',
                'description' => 'ajshdkjashdkjhasdkjhaskjdh',
                'brand' => 'new',
                'price' => '1452',
                'shippin_cost' => '00',
                'image_path' => 'torage/product.png',

            ],
            
            [
                'name' => 'caguei2',
                'details' => 'asdas546514',
                'description' => 'aksdjfalçdhfsdjj',
                'brand' => 'old',
                'price' => '3215',
                'shippin_cost' => '100',
                'image_path' => 'storage/product2.png',

            ] 
            ];

            foreach ($products as $key => $value) {
                Product::create($value);
            }
    }
}
