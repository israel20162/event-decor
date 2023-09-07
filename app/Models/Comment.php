<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['blog_post_id', 'name', 'body', 'is_approved'];

    public function post()
    {
        return $this->belongsTo(BlogPost::class, 'blog_post_id');
    }
}
