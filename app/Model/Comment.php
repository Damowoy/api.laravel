<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * @package App
 */
class Comment extends Model
{
    
    protected $table = 'comment';
    public $timestamps = false;
    
    /**
     * @var array
     */
    protected $fillable = [
        'order_id', 'user_id', 'comment','created_dt'
    ];
}
