<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

  protected $fillable = ['title', 'slug', 'description_short', 'description', 'image', 'image_show','meta_title', 'meta_description', 'meta_keyword', 'published', 'created_by', 'modified_by'];

  //Mutators
  public function setSlugAttribute($value){
    $this->attributes['slug']= Str::slug(mb_substr($this->title, 0, 40) ."-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
  }


  public function categories(){
    return $this->morthToMany('App\Category', 'categoryable');
  }

  public function scopeLastArticles($query, $count){
    return $query->orderBy('created_at', 'desc')->take($count)->get();
  }
}
