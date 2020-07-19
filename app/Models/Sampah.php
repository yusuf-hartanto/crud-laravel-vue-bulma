<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sampah extends Model
{
	protected $table = 'sampah';

    protected $fillable = [
        'name',
        'category_id'
    ];

   	use SoftDeletes;
    protected $dates =['deleted_at'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category')->withTrashed();
    }
}
