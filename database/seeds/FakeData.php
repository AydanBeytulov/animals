<?php

use Illuminate\Database\Seeder;

class FakeData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        factory(App\Animals::class, 100)->create()->each(function ($animal) {
            factory(App\AnimalsImages::class, 5)->create([
                'animal' => $animal->id,
            ]);
        });
    }
}
