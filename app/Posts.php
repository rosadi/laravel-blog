<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User; #  <-- di pake di method author

class Posts extends Model
{

    protected $fillable = ['title', 'slug', 'author_id', 'excerpt', 'content' ];

    //
    public function getImagePostAttribute(){
        $imgpath = "";
        if ( $this->image != null) {
            if (file_exists(public_path('img/'.$this->image))) {
                $imgpath = '/img/'.$this->image;

            }
        }
        return $imgpath;
    }

    # method untuk menampilkan author di hasil post
    public function author(){
        return $this->belongsTo(User::class);
    }

    public function getDateAttribute(){
        return $this->created_at->diffForHumans();
    }

    public function scopeLatestFirst($query){
        return $query->orderBy('created_at', 'DESC');
    }
}
