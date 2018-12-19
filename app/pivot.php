<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pivot extends Model
{
    protected $table = 'subject_user';
    protected $primaryKey = 'id';
        
    protected $fillable = [
    	'user_id',
    	'subject_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function subject()
    {
        return $this->belongsTo('App\subject', 'id_subject');
    }
}
