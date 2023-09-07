<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class ManageComments extends Component
{
    public function approveComment(Comment $comment)
    {
        //
        $comment->update([
            'is_approved' => true,
        ]);


        session()->flash('message', 'Comment Approved successfully.');
    }
    public function deleteComment(Comment $comment)
    {
        $comment->delete();
    }
    public function render()
    {
        return view('livewire.manage-comments', ['comments' => Comment::where('is_approved', false)->get()]);
    }
}
