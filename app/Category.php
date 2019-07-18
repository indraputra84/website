<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id_category';
    protected $fillable = ['category','id_category'];

    public function Article()
    {
        return $this->hasMany(Article::class);
    }
}
