<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $table = 'attachment';
    protected $cast = [
    	'id' => 'string'
    ];
}
