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
       	    [
                'name' 		  => 'Utilities',
                'description' => 'All Utilities'
            ],
       	    [
                'name' 		  => 'Telecomm',
                'description' => 'All Telecomm'
            ]
        ]);

       	DB::table('billers')->insert([
       	    [
                'name' 		  => 'Meralco',
                'description' => 'Meralco Bill',
                'category_id' 	  => 1
            ],
       	    [
                'name' 		  => 'Maynilad',
                'description' => 'Maynilad Bill',
                'category_id' 	  => 1
            ],
       	    [
                'name' 		  => 'Globe',
                'description' => 'Globe Bill',
                'category_id' 	  => 2
            ],
       	    [
                'name' 		  => 'Smart',
                'description' => 'Smart Bill',
                'category_id' 	  => 2
            ],
        ]);
    }
}
