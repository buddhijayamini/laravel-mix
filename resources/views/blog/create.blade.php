@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">

<div class="py-15">
    <h1 class="text-6xl">Create Post
    </h1>
</div>
</div>

<div class="w-4/5 m-auto pt-20 ">
<form action="/blog" method="POST" enctype="multipart/form-data">
@csrf

<input type="text" name="title" placeholder="Title.." class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none"/>

<textarea name="des" placeholder="Description" class="py-20 bg-transparent block border-b-2 w-full h-20 text-6xl outline-none"></textarea>
<div class="bg-gray-lighter pt-15">

</div>

</form>

</div>

@endsection