<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Formation extends Model
{
	use SoftDeletes;

    protected $table= "formations";
    protected $dates = ['deleted_at'];
}
