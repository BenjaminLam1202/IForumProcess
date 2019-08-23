<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  protected $fillable = [
      'title', 'des', 'image'
  ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
