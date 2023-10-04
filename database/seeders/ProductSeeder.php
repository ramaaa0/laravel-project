<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::Create([
            'code'=>'7777',
            'name'=>'sabun GIV',
            'price'=>2400
        ]);
        Product::Create([
            'code'=>'8888',
            'name'=>'rinso',
            'price'=>5000
        ]);
        Product::Create([
            'code'=>'7626',
            'name'=>'pepsodent',
            'price'=>5500
        ]);
        Product::Create([
            'code'=>'2929',
            'name'=>'dettol',
            'price'=>15000
        ]);
        Product::Create([
            'code'=>'6711',
            'name'=>'sabun lifebuoy',
            'price'=>2500
        ]);
    }
}
