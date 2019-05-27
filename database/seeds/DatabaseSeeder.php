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
        // $this->call(UsersTableSeeder::class);
        $this->call( FacilitiesTableSeeder::class);
        //$this->call( AttractionsTableSeeder::class);
        $this->call( CategorieTableSeeder::class);
    }
}
