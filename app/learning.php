<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class learning extends Model
{
    protected $table = 'learnings';
	protected $primaryKey = 'id_learning';
	public $incrementing =false;
    public $timestamps = true;

    protected $fillable = [
        'id_learning','subject_id', 'material'
    ];

    public function subject()
    {
    	return $this->belongsTo('subject_id');
    }
}
