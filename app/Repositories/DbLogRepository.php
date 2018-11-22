<?php

namespace App\Repositories;
use App\Log;

/*
We make use of Eloquent in our SqlRepository
*/
class DbLogRepository implements LogRepositoryInterface {

	public function getAll() {
		return Log::all();
	}

	public function storeLog(array $data) {
		$log = Log::create($data);
	}

	public function getById($id) {
		return Log::findOrFail($id);
	}

}