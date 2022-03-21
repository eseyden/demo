<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'sweetwater_test';
    protected $primaryKey = 'orderid';
    protected $fillabe = [
        'comments',
        'shipdate_expected'
    ];
    protected $casts =[
        'shipdate_expected' => 'date:Y-m-d'
    ];

}