<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Product;
use App\Models\Type;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = Type::all(["id"]);

        for ($i=0; $i < 10; $i++) { 
            $newProduct = new Product();
            $newProduct->title = $faker->word();
            $newProduct->description = $faker->paragraph();
            $newProduct->imgPath = $faker->imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg');
            $newProduct->link_to_project = $faker->url();
            // $newProduct->type_id = rand(1,4);
            // $newProduct->type_id = rand(1, count($categories));
            // $newProduct->type_id = $faker->randomElement($types);
            $newProduct->type_id = $types->random()->id;
            
            $newProduct->save();
        }
    }
}
