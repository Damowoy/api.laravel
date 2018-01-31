<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderStdate
 * @package App\model
 */
class OrderStdate extends Model
{
    protected $table = 'order_stdate';
    public $timestamps = false;
    
    /**
     * @var array
     */
    protected $fillable = [
        'order_id', 'status_id', 'created_at'
    ];
}
