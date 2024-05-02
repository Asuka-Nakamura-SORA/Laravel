<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Postモデルを使用するために追加

class PostsController extends Controller
{
   public function index()
   {
        $posts = Post::all(); // postsテーブルに保存されているデータをすべて取得
        return view('posts.index', ['posts' => $posts]); // views/posts/index.blade.php を表示する
   }

   public function store(Request $request)
   {
       $post = new Post;
       $post->title = $request->title;
       $post->message = $request->message;
       $request->validate([
        'title' => ['required', 'max:30'],
        'message' => ['required'],
        ]);  
        session()->flash('success', '投稿されました');
        $post->save();
        return redirect()->route('posts.index');
   }

    public function show($id)
    {
        $show = Post::find($id);

        return view('posts.show', compact('post'));
    }

}

