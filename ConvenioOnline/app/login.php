<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class login extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'convenios';
    protected $keyType = 'string';
    public $incrementing = false;
}