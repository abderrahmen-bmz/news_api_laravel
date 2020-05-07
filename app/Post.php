<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [ 'title','content','date_written','featured_image','vote_up','vote_down','category_id','user_id'];
}
