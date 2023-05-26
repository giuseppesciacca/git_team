<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $Artist = new Artist();
            $Artist->name = $faker->firstName();
            $Artist->lastname = $faker->lastName();
            $Artist->stage_name = $faker->company();
            $Artist->date_of_birth = $faker->dateTime();
            $Artist->record_label = $faker->company();
            $Artist->genre = $faker->randomElement(['rock', 'jazz', 'reggaeton', 'latino', 'prog']);;
            $Artist->album = $faker->word(50);
            $Artist->save();
        }
    }
}
