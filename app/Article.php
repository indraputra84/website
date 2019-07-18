<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id_article';
    protected $fillable = ['judul','author','article','id_category','cover','no_category'];

    public function Category()
   {
       return $this->belongsTo(Category::class);
   }
}
