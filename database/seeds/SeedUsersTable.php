<?php

use Illuminate\Database\Seeder;

class SeedUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Aydan Beytulov",
            'email' => "abeytulov@gmail.com",
            'password' => '$2y$10$r8W8C0LQoE8EId4kPdYFm.DtGMSnnGV6unRgVgM4EMEtgBjX1Xavi',
        ]);
    }
}
