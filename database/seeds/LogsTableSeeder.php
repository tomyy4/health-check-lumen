<?php

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder
{
	public $httpStatus = [200,301,403,404,500];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	var_dump($this->httpStatus);
        DB::table('logs')->insert([
            'website' => 'www.' . str_random(10). '.com',
            'status' => $this->httpStatus[array_rand($this->httpStatus)],
            'datetime' => '2018-11-16',
            'time' => rand(1,2)
        ]);
    }
}
