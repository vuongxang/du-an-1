<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   $faker = Faker\Factory::create();
        $limit = 20;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('products')->insert([
                'name' => $faker->name,
                'image' =>$faker->image('public/storage/images',640,480, null, false),
                'cate_id' =>$faker->numberBetween($min = 1, $max = 10),
                'price'=> $faker->numberBetween($min = 100, $max = 1000),
                'short_desc'=>$faker->text($maxNbChars = 200),
                'detail'=>$faker->text($maxNbChars = 500),
            ]);
        }
    }
}
