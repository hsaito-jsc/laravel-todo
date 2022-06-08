<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Task extends Model
{
    const STATUS = [
		1 => [ 'label' => 'yet', 'class' => 'label-danger' ],
		2 => [ 'label' => 'on', 'class' => 'label-info' ],
		3 => [ 'label' => 'done', 'class' => '' ],
	];

	/** @return string*/
	public function getStatusLabelAttribute()
	{
		$status = $this->attributes['status'];
		if(!isset(self::STATUS[$status])){
			return '';
		}
		return self::STATUS[$status]['label'];
	}

	/** @return string*/
	public function getStatusClassAttribute()
	{
		$status = $this->attributes['status'];
		if(!isset(self::STATUS[$status])){
			return '';
		}
		return self::STATUS[$status]['class'];
	}

	/** @return string*/
	public function getFormattedDueDateAttribute()
	{
		return Carbon::createFromFormat('Y-m-d', $this->attributes['due_date'])->format('Y/m/d');
	}
	
}
