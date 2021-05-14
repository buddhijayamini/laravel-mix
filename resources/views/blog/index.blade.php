@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-center">

<div class="py-15 border-b border-blue-300 ">
    <h1 class="text-6xl">Blog Posts
    </h1>
</div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
    <p class="w-1/6 mb-4 text-blue-500 bg-green-200 rounded-2xl py-4">
        {{ session()->get('message')}}
    </p>
    </div>
@endif

@if(Auth::check())
    <div class="pt-15 w-4/5 m-auto">
        <a href="/blog/create" class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
        Create Post
        </a>
    </div>
@endif

@foreach ( $posts as $post)

<div class="sm:grid grid-cols-3 gap-20 w-4/5 mx-auto py-15 bord border-blue-200 border-b">
 <div>
       <img src="https://digitalnomadgirls.com/wp-content/uploads/2018/10/girl-on-laptop-website-digital-nomad-girls.jpg" alt="" />   
    </div>
<div>
<h2 class="text-blue-500 font-bold text-5xl pb-4">{{ $post->title}}</h2>
<span class="text-blue-500">
By <span class="font-bold italic text-blue-700">code with {{ $post->user->name}}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at))}}
</span>
<p class="text-xl text-blue-700 pt-8 pb-10 leading-8 font-light">
{{ $post->description}}
</p>
<a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-400 text-blue-900 text-lg font-extrabold py-4 px-8 rounded-3xl">
Read more
 </a>
</div>
</div>
    
@endforeach




@endsection