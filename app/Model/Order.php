<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package App\Model
 */
class Order extends Model
{
    /**
     * @var string
     */
    protected $table = 'order';
    
    /**
     * @var bool
     */
    public $timestamps = false;
    
    /**
     * @var array
     */
    protected $fillable = [
        'user_id', 'engener_id', 'status_id','name','description','company','place','address'
    ];
}
