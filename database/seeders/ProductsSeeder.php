<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create([
            'name' => 'Tomato',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptates fugiat dignissimos.',
            'category_id' => '3',
            'image_file' => 'product-1.jpg',
            'price' => '12000'
        ]);
        Products::create([
            'name' => 'Pineapple',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptates fugiat dignissimos.',
            'category_id' => '2',
            'image_file' => 'product-2.jpg',
            'price' => '14000'
        ]);
        Products::create([
            'name' => 'Chili',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptates fugiat dignissimos.',
            'category_id' => '3',
            'image_file' => 'product-3.jpg',
            'price' => '16000'
        ]);
        Products::create([
            'name' => 'Strawberry',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptates fugiat dignissimos.',
            'category_id' => '2',
            'image_file' => 'product-4.jpg',
            'price' => '18000'
        ]);
        Products::create([
            'name' => 'Cucumber',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptates fugiat dignissimos.',
            'category_id' => '3',
            'image_file' => 'product-5.jpg',
            'price' => '20000'
        ]);
        Products::create([
            'name' => 'Japan Tomato',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptates fugiat dignissimos.',
            'category_id' => '3',
            'image_file' => 'product-6.jpg',
            'price' => '22000'
        ]);
        Products::create([
            'name' => 'Potato',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptates fugiat dignissimos.',
            'category_id' => '3',
            'image_file' => 'product-7.jpg',
            'price' => '24000'
        ]);
        Products::create([
            'name' => 'Banana',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptates fugiat dignissimos.',
            'category_id' => '2',
            'image_file' => 'product-8.jpg',
            'price' => '26000'
        ]);
        Products::create([
            'name' => 'Tomato',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptates fugiat dignissimos.',
            'category_id' => '3',
            'image_file' => 'product-1.jpg',
            'price' => '28000'
        ]);
        Products::create([
            'name' => 'Pineapple',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptates fugiat dignissimos.',
            'category_id' => '2',
            'image_file' => 'product-2.jpg',
            'price' => '30000'
        ]);
        Products::create([
            'name' => 'Chili',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptates fugiat dignissimos.',
            'category_id' => '3',
            'image_file' => 'product-3.jpg',
            'price' => '32000'
        ]);
        Products::create([
            'name' => 'Strawberry',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas voluptates fugiat dignissimos.',
            'category_id' => '2',
            'image_file' => 'product-4.jpg',
            'price' => '34000'
        ]);
    }
}
