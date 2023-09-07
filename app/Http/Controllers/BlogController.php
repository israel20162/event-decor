<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use App\Models\Comment;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blog_posts = BlogPost::latest()->with('author')->paginate(4);

        return view('blog.index', [
            'blog_posts' => $blog_posts
        ]);

    }

    public function show($slug)
    {
        $blog_post = BlogPost::where('slug', $slug)->with('author')->first();

        return view('blog.single', [
            'post' => $blog_post
        ]);


    }

    public function addComment(Request $request, $postId)
    {
        $request->validate([
            'name' => 'required|string',
            'body' => 'required|string',
            'email'=> 'required|email'
        ]);

        Comment::create([
            'blog_post_id' => $postId,
            'name' => $request->name,
            'body' => $request->body
        ]);

        cookie()->queue('user_name', $request->name, 60 * 24 * 30);
        cookie()->queue('user_email', $request->email, 60 * 24 * 30);

        return back()->with('success', 'Comment added and awaiting approval.');
    }

}
