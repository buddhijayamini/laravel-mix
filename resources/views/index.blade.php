@extends('layouts.app')

@section('content')

<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-blue-100 pt-10">
    
    <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 black-text-center">
        <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14 ">
            Welcome to Buddy's World...!
        </h1>
        <a href="/blog" class="text-center bg-blue-50 text-blue-700 py-2 px-4 font-bold text-xl uppercase">
                Read More...
        </a>
    </div>  
    </div>
</div>

<div class="sm:grid grid-cols-3 gap-20 w-4/5 mx-auto py-15 bord border-gray-200 ">
    <div>
       <img src="https://digitalnomadgirls.com/wp-content/uploads/2018/10/girl-on-laptop-website-digital-nomad-girls.jpg" width="700" alt="" />   
    </div>
<div class="m-auto sm:m-auto text-left w-4/5 block">
<h2 class="text-3xl font-extrabold text-blue-400">
Girl With Laptop
</h2>
<p class="py-0 text-blue-300 text-lg">
Download the perfect girl laptop pictures.
</p>
<p class="font-extrabold text-blue-400 text-s pb-9">
Download the perfect girl laptop pictures. Find over 100+ of the best free girl laptop images.
 Free for commercial use ✓ No attribution required ✓ Copyright-free.
</p>

<a href="/blog" class="uppercase bg-blue-200 text-indigo-400 text-s font-extrabold py-3 px-8 rounded-3xl">
    Find out more...
</a>
</div>
</div>

<div class="text-center p-15 bg-blue-300 text-white">
<h2 class="text-2xl pb-5 text-l">
I'm an expect in.....
</h2>
 
<span class="font-extrabold block text-4xl py-1">
UX Designe
</span>
<span class="font-extrabold block text-4xl py-1">
Project Management
</span>

<span class="font-extrabold block text-4xl py-1">
Backend Development
</span>

</div>


<div class="text-center py-15">
    <span class="uppercase text-s text-blue-400">
    Blog
    </span>
    
    <h2 class="text-4xl font-bold py-10">
        Recent Post
    </h2>
    <p class="m-auto w-4/5 text-blue-500">
    If the newly created 'api' guard is not set as a default guard or you have defined multiple guards to handle authentication, you should specify the guard when calling auth().
    The example below should give you an idea of how this could look. Obviously you should make any changes, as necessary, to suit your own needs.
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 m-auto">
<div class="flex bg-blue-400 text-red-400 pt-10">
<div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
    <span class="uppercase text-xs">PHP</span>
<h3 class="text-xl font-bold py-10">
The example below should give you an idea of how this could look. Obviously you should make any changes, as necessary, to suit your own needs.
Before continuing, make sure you have installed the package as per the installation instructions for Laravel or Lumen.
</h3>
<a href="" class="uppercase bg-transparent border-2 border-blue-200 text-red-500 text-xs font-extrabold py-3 px-5 rounded-3xl">
find out more
</a>
</div>
</div>
  <div>
       <img src="https://digitalnomadgirls.com/wp-content/uploads/2018/10/girl-on-laptop-website-digital-nomad-girls.jpg" width="700" alt="" />   
    </div>
</div>

@endsection