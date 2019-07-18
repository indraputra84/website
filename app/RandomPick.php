<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RandomPick extends Model
{
    protected $table = 'random_picks';
    protected $primaryKey = 'id_rp';
    protected $fillable = ['id_article'];
}
