@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">

<div class="py-15">
    <h1 class="text-6xl"> {{ $post->title}}
    </h1>
</div>
</div>


<div class="w-4/5 mx-auto pt-20 ">
    <span class="text-blue-500">
    By <span class="font-bold italic text-blue-700">code with {{ $post->user->name}}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at))}}
    </span>
    <p class="text-xl text-blue-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description}}
    </p>
</div>

@endsection