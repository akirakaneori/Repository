<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   function getPaginateByLimit(int $limit_count = 5)
   {
      return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
      
   }
   
   protected $fillable = [
      'title',
      'body',
      'category_id'
   ];
   
   public function category()
   {
      return $this->belongsTo('App\Category');
      
   }
}