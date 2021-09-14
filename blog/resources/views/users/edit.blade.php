@extends('layouts.app')

@section('content')
<div class="py-4">
<h1>Edit user - {{ $user->name }} </h1>
<p class="lead">Edit this user below. <a href="{{ route('users.index') }}">Go back to all users.</a></p>
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

{!! Form::model($user, [
    'method' => 'PATCH',
    'route' => ['users.update', $user->id]
]) !!}

<div class="form-group">
    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
    {!! Form::textarea('email', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update user', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
</div>
@endsection