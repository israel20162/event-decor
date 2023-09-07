<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\HtmlString;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body', 'author_id','image'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function postBody()
    {
        return new HtmlString($this->body);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
