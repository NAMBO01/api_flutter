<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Product Name3',
            'description' => 'Product Description',
            'price' => 19.99,
            'quantity' => 100,
            'image' => 'http://127.0.0.1:8000/images/hinh_sp/ADIDAS ADIFOM Q OFF-WHITE 1_1668140087.png', // Đường dẫn hình ảnh
        ]);
    }
}
