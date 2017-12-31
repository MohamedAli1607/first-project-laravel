<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //$this->call(UsersTableSeeder::class);
		factory(App\Formation::class,10)->create();
		factory(App\User::class,20)->create();
	}
}
