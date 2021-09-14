@extends('layouts.master')

@section('content')

<h1>Task List</h1>
<p class="lead">All the post <a href="{{ route('posts.create') }}">Add a new one?</a></p>
<hr>
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
@foreach($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->body}}</p>
    <p>
        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">View Post</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit Post</a>
       
    </p>
    <hr>
    
@endforeach
@endsection