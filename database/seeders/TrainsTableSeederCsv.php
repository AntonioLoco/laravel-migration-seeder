<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainsData = Helpers::GetCsvData(__DIR__ . "/trains.csv");

        foreach ($trainsData as $key => $train) {
            if ($key !== 0) {
                $newTrain = new Train();
                $newTrain->agency = $train[0];
                $newTrain->departure_station = $train[1];
                $newTrain->arrival_station = $train[2];
                $newTrain->departure_time = $train[3];
                $newTrain->arrival_time = $train[4];
                $newTrain->train_code = $train[5];
                $newTrain->number_carriages = $train[6];
                $newTrain->in_time = $train[7];
                $newTrain->deleted = $train[8];
                $newTrain->save();
            }
        }
    }
}
