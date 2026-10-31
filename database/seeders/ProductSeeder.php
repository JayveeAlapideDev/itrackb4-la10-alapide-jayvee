<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Brand;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        
        $a = Brand::create(['name' => 'Choco']);
        $b = Brand::create(['name' => 'Mint']);
        $c = Brand::create(['name' => 'Dishwashing']);

        
        Product::create([
            'name'     => 'Choco',
            'price'    => 40,
            'stock'    => 50,
            'package'  => 'pack',
            'brand_id' => $a->id,
        ]);

        Product::create([
            'name'     => 'Mentos',
            'price'    => 10,
            'stock'    => 10,
            'package'  => 'stick',
            'brand_id' => $b->id,
        ]);

        Product::create([
            'name'     => 'Drinks',
            'price'    => 10,
            'stock'    => 20,
            'package'  => 'plastic',
            'brand_id' => $a->id,
        ]);

        Product::create([
            'name'     => 'Tops',
            'price'    => 10,
            'stock'    => 50,
            'package'  => 'sachet',
            'brand_id' => $c->id,
        ]);

       
        Product::create([
            'name'     => 'Mint Candy',
            'price'    => 5,
            'stock'    => 100,
            'package'  => 'pack',
            'brand_id' => $b->id,
        ]);
    }
}