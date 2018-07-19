<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = 'home';
        return view('index')->with(compact('page'));
    }

    public function users()
    {
        $page = 'users';
        $users = User::get();
        return view('users')->with(compact('users','page'));
    }

    public function posts()
    {
        $access = false;
        $page = 'all-posts';
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts')->with(compact('page', 'posts','access'));
    }

    public function newPost($id = false)
    {
        $page = 'new-post';
        $post = false;
        if($id){
            $post = Post::find($id);
        }
        return view('add-post')->with(compact('page', 'post'));
    }

    public function addPost(Request $request, $id = null)
    {
        $text = 'Post created!';
        $post = $id ? Post::find($id) : new Post();
        $post->user_id = Auth::user()->id;
        $post->content = $request->post;
        if( $post->save() ){
            if($id){
                $text = 'Post edited!';
            }
            return redirect()->back()->with('success', $text);
        }
        return redirect()->back()->with('danger', 'Post created!');
    }

    public function myPosts()
    {
        $access = true;
        $page = 'my-posts';
        $posts = Post::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
        return view('posts')->with(compact('page', 'posts', 'access'));
    }

    public function removePost($id){
        $post = Post::find($id);

        if(!$post){
            return redirect()->back()->with('danger', 'Post not found!');
        }

        if($post->user_id != Auth::user()->id){
            return redirect()->back()->with('danger', 'You don\'t have permission for this!');
        }

        if( $post->delete() ) {
            return redirect()->back()->with('success', 'Post successfully deleted!');
        }
    }
}
