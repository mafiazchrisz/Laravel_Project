<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    //
    public function addPost()
    {
        $post = new Post();
        $post->title = "First Post Title";
        $post->body = "First Post Description";
        $post->save();
        return "Post has been created successfully!";
    }
    public function addComment($id)
    {
        $post = Post::find($id);
        $comment = new Comment();
        $comment->comment = "This is first comment.";
        $post->comments()->save($comment);
        return "Comment has been posted";
    }
    public function getCommentsByPost($id)
    {
        $comment = Post::find($id)->comments;
        return $comment;
    }
}
