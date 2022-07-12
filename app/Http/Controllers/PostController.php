<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $user;
    protected $post;

    public function __construct(User $user, Post $post)
    {
        $this->user = $user;
        $this->post = $post;
    }

    public function index()
    {
        $posts =Post::paginate(3);
       // if (!$user = $this->user->find($userId)) {
          //  return redirect()->back();
       // }
        $posts = $this->post->all();

        return view('posts.index', compact('posts'));
    }
}
