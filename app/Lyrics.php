<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lyrics extends Model
{
	protected $table = 'lyrics';
	protected $primaryKey = 'track_id';
	public $incrementing = false;
	protected $connection = 'sqlite';
}