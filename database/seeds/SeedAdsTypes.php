<?php

use Illuminate\Database\Seeder;

class SeedAdsTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ads_types')->insert([
            'name' => "Breeding",
        ]);

        DB::table('ads_types')->insert([
            'name' => "Sale",
        ]);
    }
}
