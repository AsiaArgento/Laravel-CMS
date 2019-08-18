<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    //
    protected $fillable = [
      'title',
      'content'
    ];

    public function user() {
      return $this->belongsTo('App\User'); // I want to get the user that belongs to this post
    }
}
