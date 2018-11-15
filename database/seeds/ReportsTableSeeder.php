<?php

use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('reports')->insert(
        	[
	        	'url' => str_random(10),
	        	'datetime' => '2018-11-16',
	        	'status' => 200,
	        	'time' => random_int(100, 999)
       		],
       		[
	        	'url' => str_random(10),
	        	'datetime' => '2018-11-16',
	        	'status' => 200,
	        	'time' => random_int(100, 999)
       		],
       		[
	        	'url' => str_random(10),
	        	'datetime' => '2018-11-16',
	        	'status' => 200,
	        	'time' => random_int(100, 999)
       		]
    );
    }
}
