<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;


class Report extends Model {

	$table = 'reports';
	protected $fillable = [
		'url','status','datetime','time'
	];
}