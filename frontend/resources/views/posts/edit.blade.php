@extends('layouts.master')

@section('content')

<h1>Edit post - {{ $post->title }} </h1>
<p class="lead">Edit this post below. <a href="{{ route('posts.index') }}">Go back to all posts.</a></p>
<hr>

@if(Session::has('flash_message'))
  <div class="alert alert-success">
    {{ Session::get('flash_message') }}
  </div>
@endif

@if($errors->any())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  </div>
@endif

{!! Form::model($post, [
    'method' => 'PATCH',
    'route' => ['posts.update', $post->id]
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update post', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection