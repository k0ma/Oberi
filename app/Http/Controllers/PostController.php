<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{


    public function index()
    {
        $posts=Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index')->withPosts($posts);
    }



    public function create()
    {
        return view('posts.create');
    }



    public function store(Request $request)
    {
       //validate the data
        $this->validate($request, array(
             'title' => 'required|max:255',
             'body' => 'required'
        ));

       //store in the database
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        Session::flash('success', 'Успешно създадохте нов обект');

       return redirect()->route('posts.show', $post->id);
    }



    public function show($id)
    {
        $post= Post::find($id);
        return view('posts.show')->withPost($post);
    }



    public function edit($id)
    {
        $post=Post::find($id);
        return view('posts.edit')->withPost($post);
    }



    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));

        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();

        Session::flash('success', 'Промените бяха успешно запазени.');

        return redirect()->route('posts.show', $post->id);
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'Обектът беше успено изтрит.');
        return redirect()->route('posts.index');
    }
}
