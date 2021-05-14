<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $post = Post::all();
        // dd($post);
     return view('blog.index')
     ->with('posts',Post::OrderBy('updated_at','desc')->get());
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'des' => 'required',
            'img' => 'required | mimes:jpg,png,jpeg | max:5048'
        
        ]);

        $newImgName = uniqid() . '-' . $request->title . '.' . $request->img->extension();
          $request->img->move(public_path('images'),$newImgName);

          Post::create(
              [
                'title' => $request->input('title'),
                'description' => $request->input('des'),
                'slug' => SlugService::createSlug(Post::class,'slug',$request->title),
                'image_path' => $newImgName,
                'user_id' => auth()->user()->id
              ]
            );

            return redirect('/blog')->with('message','post added');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show')->with('post',Post::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')->with('post',Post::where('slug',$slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        Post::where('slug',$slug)
        ->update([
            'title' => $request->input('title'),
            'description' => $request->input('des'),
            'slug' => SlugService::createSlug(Post::class,'slug',$request->title),
           // 'image_path' => $newImgName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog')->with('message','post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
