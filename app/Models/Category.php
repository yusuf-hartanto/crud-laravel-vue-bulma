<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
	protected $table = 'category';

    protected $fillable = [
        'name'
    ];

   	use SoftDeletes;
    protected $dates =['deleted_at'];
}
