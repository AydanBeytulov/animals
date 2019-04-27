<?php

use Illuminate\Database\Seeder;

class SeedAnimalsTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals_types')->insert([
            'name' => "Dog",
        ]);

        DB::table('animals_types')->insert([
            'name' => "Cat",
        ]);
    }
}
