<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Product::truncate();

        Product::create([
            'name'=> 'SONY',
            'category'=> 'Mobile',
            'price'=> '3999',
            'sale'=> '4999',
            'stock'=> '20',
        ]);

        Product::create([
            'name'=> 'Apple',
            'category'=> 'Mobile',
            'price'=> '2999',
            'sale'=> '3999',
            'stock'=> '50',
        ]);

        Product::create([
            'name'=> 'Samsung',
            'category'=> 'Mobile',
            'price'=> '1999',
            'sale'=> '2999',
            'stock'=> '30',
        ]);
        Product::create([
            'name'=> 'Acer',
            'category'=> 'Laptop',
            'price'=> '1399',
            'sale'=> '2799',
            'stock'=> '70',
        ]);
        Product::create([
            'name'=> 'HP',
            'category'=> 'Laptop',
            'price'=> '1499',
            'sale'=> '2899',
            'stock'=> '120',
        ]);
    }
}
