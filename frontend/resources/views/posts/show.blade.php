@extends('layouts.master')

@section('content')

<h1>{{ $post->title }}</h1>
<p class="lead">{{ $post->id }}</p>
<p class="lead">{{ $post->body }}</p>
<hr>

<a href="{{ route('posts.index') }}" class="btn btn-info">Back to all posts</a>
<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit post</a>

<div class="pull-right">
    {!! Form::open([
            'method' => 'DELETE',
            'route' => ['posts.destroy', $post->id]
        ]) !!}
            {!! Form::submit('Delete this post', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
</div>

@endsection