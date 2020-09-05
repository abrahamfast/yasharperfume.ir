<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'product';
	protected $casts = [
		'id' => 'string'
	];

    public function attachment()
    {
        return $this->hasMany('App\Attachment', 'related_id');
    }
}
