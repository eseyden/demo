<?php

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'sweetwater_test';
    protected $primaryKey = 'orderid';
    protected $fillabe = [
        'comments',
        'shipdate_expected'
    ];
}