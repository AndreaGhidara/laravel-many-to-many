<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newProduct = new Product();
            $newProduct->title = $faker->word();
            $newProduct->description = $faker->paragraph();
            $newProduct->imgPath = $faker->imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg');
            // $product->type = 
            $newProduct->link_to_project = $faker->url();
            $newProduct->save();
        }
    }
}
