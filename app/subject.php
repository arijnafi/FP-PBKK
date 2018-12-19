<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    protected $table = 'subjects';
    protected $primaryKey = 'id_subject';
    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id_subject','nama_subject'
    ];

    public function pivot()
    {
    	return $this->hasMany('App\pivot', 'id');
    }
    public function learning()
    {
    	return $this->hasMany('App\learning', 'id_learning');
    }
}
