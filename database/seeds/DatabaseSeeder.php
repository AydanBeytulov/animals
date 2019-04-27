<?php

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
     //   $this->call(SeedAdsTypes::class);
     //   $this->call(SeedAnimals::class);
    //    $this->call(SeedAnimalsBreeds::class);
    //    $this->call(SeedAnimalsTypes::class);
    //    $this->call(SeedUsersTable::class);
        $this->call(FakeData::class);
    }
}
