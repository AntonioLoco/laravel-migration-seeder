<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //Qui possiamo chiamare tutti i seeder in un solo colpo
        //con il comando da terminale: php artisan db:seed
        $this->call([
            TrainsTableSeeder::class
        ]);
    }
}
