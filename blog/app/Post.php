<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public $table = 'news_web.post';

    public function comments(){
        return $this->hasMany('app.comment');
    }
}
