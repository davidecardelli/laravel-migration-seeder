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
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 35; $i++) {
            $new_train = new Train();
            $new_train->azienda = $faker->company();
            $new_train->stazione_partenza = $faker->city();
            $new_train->stazione_arrivo = $faker->city();
            $new_train->orario_partenza = $faker->time();
            $new_train->orario_arrivo = $faker->time();
            $new_train->codice_treno = $faker->randomNumber(6, true);
            $new_train->numero_carrozze = $faker->randomDigitNotNull();
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();
            $new_train->save();
        }
    }
}
