<?php

use Illuminate\Database\Seeder;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$currenttime = date('Y-m-d H:i:s');
        DB::table('breeds')->insert([
	        [ 	'id' => 1,
	        	'name' =>'Meo ba tu',	        	
	        	'created_at' => $currenttime,
	        	'updated_at' => $currenttime
        	],
        	[ 	'id' => 2,
	        	'name' =>'Meo My',	        	
	        	'created_at' => $currenttime,
	        	'updated_at' => $currenttime
        	],
        	[ 	'id' => 3,
	        	'name' =>'Meo khac',	        	
	        	'created_at' => $currenttime,
	        	'updated_at' => $currenttime
        	]
        ]);
    }
}
