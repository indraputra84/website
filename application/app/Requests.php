<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $table = 'requests';
    protected $primaryKey = 'id_request';
    protected $fillable = ['name','email','category','req'];
}
