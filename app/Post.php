<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'p_name', 'p_price', 'p_mile', 'p_cat', 'p_image', 's_img', 't_img', 'f_img',
         'ft_img', 'sx_img', 'st_img', 'e_img', 'n_img', 'tn_img', 'descr','cyl', 'air', 'dam',
    ];

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }
}
