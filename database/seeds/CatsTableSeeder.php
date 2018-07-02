<?php

use Illuminate\Database\Seeder;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $currenttime = date('Y-m-d H:i:s');
//        DB::table('cats')->insert([
//	        [ 	'id' => 1,
//	        	'name' =>'Meo ba tu',
//	        	'date_of_birth' => date('Y-m-d'),
//	        	'breed_id' => 1,
//	        	'user_id' => 1,
//	        	'created_at' => $currenttime,
//	        	'updated_at' => $currenttime
//        	],
//        	[ 	'id' => 2,
//	        	'name' =>'Meo den',
//	        	'date_of_birth' => date('Y-m-d'),
//	        	'breed_id' => 2,
//                'user_id' => 2,
//	        	'created_at' => $currenttime,
//	        	'updated_at' => $currenttime
//        	],
//        	[ 	'id' => 3,
//	        	'name' =>'Meo vang',
//	        	'date_of_birth' => date('Y-m-d'),
//	        	'breed_id' => 3,
//                'user_id' => 3,
//	        	'created_at' => $currenttime,
//	        	'updated_at' => $currenttime
//        	]
//        ]);
        factory(Furbook\Cat::Class, 50)->create();
    }
}
