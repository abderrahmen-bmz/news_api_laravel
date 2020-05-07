<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [ 'title','content','date_written','featured_image','vote_up','vote_down','category_id','user_id'];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function author(){
        return $this->belongsTo( User::class , 'user_id' , 'id' );
    }

    
    public function category(){
        return $this->belongsTo( Category::class );
    }
}


