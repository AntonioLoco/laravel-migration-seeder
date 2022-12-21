<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++) {
            $newTrain = new Train();
            $newTrain->train_code = $faker->randomNumber(7, true);
            $newTrain->agency = $faker->randomElement(['Trenitalia', 'FrecciaRossa', 'Galilei', 'Galvani']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 week');
            $newTrain->arrival_time = $faker->dateTimeInInterval($newTrain->departure_time, '+20 hour');
            $newTrain->number_carriages = $faker->numberBetween(4, 15);
            $newTrain->in_time = $faker->numberBetween(0, 1);
            $newTrain->deleted = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
