<?php

use Illuminate\Database\Seeder;

class SeedAnimals extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            'name' => "My doggy",
            'animal_type' => "1",
            'animal_breed' => "1",
            'ad_type' => "1",
            'user_id' => "1",
            'sex'=> '1',
            'dateBorn'=> date('Y-m-d H:i:s')
        ]);
    }
}