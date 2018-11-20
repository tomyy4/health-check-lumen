<?php

namespace App\Repositories;
use App\Log;

interface LogRepositoryInterface {

	public function getAll();
	public function storeLog(array $data);
	public function getById($id);
}