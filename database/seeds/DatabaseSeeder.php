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
       	DB::table('users')->insert([
            'name' 		=> 'Site Admin',
            'email' 	=> 'admin@gmail.com',
            'password' 	=> Hash::make('password')
        ]);

       	DB::table('categories')->insert([
            'name' 		  => 'Utilities',
            'description' => 'All Utilities'
        ]);

       	DB::table('billers')->insert([
            'name' 		  => 'Meralco',
            'description' => 'Meralco Bill',
            'category' 	  => 1
        ]);
    }
}
