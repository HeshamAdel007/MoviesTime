<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	//protected $fillable = ['name', 'email', 'comment_body',];

    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->hasOne(Post::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

}
