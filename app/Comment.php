<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function commentable(){
      return $this->morphTo();
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'id', 'body',
    ];
}
