<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $model_train = new Train();
            $model_train->agency = $faker->word();
            $model_train->departure_station = $faker->word();
            $model_train->arrival_station = $faker->word();
            $model_train->date = $faker->date();
            $model_train->departure_time = $faker->dateTime(); 
            $model_train->arrival_time = $faker->dateTime();
            $model_train->train_code = $faker->randomNumber(5, true);
            $model_train->n_carriages = $faker->randomNumber(3, true);
            $model_train->in_time = $faker->boolean();
            $model_train->deleted = $faker->boolean();

            $model_train->save();
        }
    }
}
