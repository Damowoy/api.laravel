<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $fillable = ['name'];
    public $timestamps = false;
    
}
