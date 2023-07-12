<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = ["giochi", "cucina", "sport", "auto"];

        foreach($types as $typeCategory) {
            $newType = new Type();
            $newType->name = $typeCategory;
            $newType->save();
        }
        // for ($i=0; $i < 5; $i++) { 
        //     $newProduct = new Type();
        //     $newProduct->name = $faker->sentence(2);
        //     $newProduct->save();
        // }
    }

}
