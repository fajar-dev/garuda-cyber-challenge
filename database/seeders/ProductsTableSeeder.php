<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
                [
                    'product_name'	=> 'GoPro action camera 4K',
                    'image'	=> 'https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/1.webp',
                    'price'	=> '1500000',
                    'description'	=> 'Lorem Ipsum Dolar Sit Amet'
                ],
                [
                    'product_name'	=> 'Canon EOS professional',
                    'image'	=> 'https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/2.webp',
                    'price'	=> '2000000',
                    'description'	=> 'Lorem Ipsum Dolar Sit Amet'
                ],
                [
                    'product_name'	=> 'Apple iPhone 13 Pro max HDC',
                    'image'	=> 'https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/4.webp',
                    'price'	=> '500000',
                    'description'	=> 'Lorem Ipsum Dolar Sit Amet'
                ],
                [
                    'product_name'	=> 'Rexus Gaming Headphones',
                    'image'	=> 'https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/7.webp',
                    'price'	=> '200000',
                    'description'	=> 'Lorem Ipsum Dolar Sit Amet'
                ]
            ];

            foreach ($data as $item) {
                Product::create($item);
            }
    }
}
