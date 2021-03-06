<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;
use App\Tag;
use Intervention\Image\Facades\Image;
use Session;
use Purifier;
use Storage;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $posts=Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index')->withPosts($posts);
    }



    public function create()
    {
        $categories=Category::all();
        $tags=Tag::all();
        return view('posts.create')->withCategories($categories)->withTags($tags);
    }



    public function store(Request $request)
    {
       //validate the data
        $this->validate($request, array(
             'title' => 'required|max:255',
             'slug' => 'required|alpha_dash|min:2|max:255|unique:posts,slug',
             'category_id' => 'required|integer',
             'body' => 'required',
            'featured_image' => 'sometimes|image'
        ));

       //store in the database
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->body = Purifier::clean($request->body);

        //save image
        if ($request->hasFile('featured_image')){
            $image=$request->file('featured_image');
            $filename = time() . '.' .  $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(400, 200)->save($location);

            $post->image = $filename;
        }

        $post->save();

        $post->tags()->sync($request->tags, false);

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
        $categories=Category::all();
        $cats=array();
        foreach ($categories as $category){
            $cats[$category->id]=$category->name;
        }
        $tags = Tag::all();
        $tags2=array();
        foreach ($tags as $tag){
            $tags2[$tag->id] = $tag->name;
        }
        return view('posts.edit')->withPost($post)->withCategories($cats)->withTags($tags2);
    }



    public function update(Request $request, $id)
    {
        $post=Post::find($id);

            $this->validate($request, array(
                'title' => 'required|max:255',
                'slug' => "required|alpha_dash|min:2|max:255|unique:posts,slug,$id",
                'category_id' => 'required|integer',
                'body' => 'required',
                'featured_image' => 'image'
            ));

        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->body = Purifier::clean($request->input('body'));
        if ($request->hasFile('featured_image')){
            
            $image=$request->file('featured_image');
            $filename = time() . '.' .  $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename=$post->image;

            $post->image = $filename;

            Storage::delete($oldFilename);
        }

        $post->save();

        if (isset($request->tags)){
            $post->tags()->sync($request->tags);
        }else{
            $post->tags()->sync(array());
        }


        Session::flash('success', 'Промените бяха успешно запазени.');

        return redirect()->route('posts.show', $post->id);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->detach();

        Storage::delete($post->image);

        $post->delete();

        Session::flash('success', 'Обектът беше успено изтрит.');
        return redirect()->route('posts.index');
    }
}
