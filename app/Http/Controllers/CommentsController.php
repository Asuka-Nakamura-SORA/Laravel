<?php
namespace App\Http\Controllers;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
    public function index()
    {
         $comments = Comment::all(); // commentsテーブルに保存されているデータをすべて取得
         return view('posts.show', compact('comments')); // views/posts/show.blade.php を表示する
    }

    public function store(CommentRequest $request)
    {
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->post_id = $request->post_id;
        $comment->save();
        return redirect()->back();
    }

    public function show($comments)
    {
        $comments = Comment::find($comment);

        return view('comments.show', compact('comment'));
    }
    
}

