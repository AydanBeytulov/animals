<?php

use Illuminate\Database\Seeder;

class SeedAnimalsBreeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals_breeds')->insert([
            'name' => "Alaskan Klee Kai",
            'animal_type' => "1",
        ]);

        DB::table('animals_breeds')->insert([
            'name' => "Alaskan Malamute",
            'animal_type' => "1",
        ]);

        DB::table('animals_breeds')->insert([
            'name' => "American Shorthair Cat",
            'animal_type' => "2",
        ]);

        DB::table('animals_breeds')->insert([
            'name' => "Abyssinian Cat",
            'animal_type' => "2",
        ]);
    }
}
