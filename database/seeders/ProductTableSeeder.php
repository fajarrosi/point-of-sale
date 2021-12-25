<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i <5 ; $i++) { 
            Product::create([
                'product' => $faker->sentence(3),
                'category_id' => 1
            ]);
        }
    }
}
