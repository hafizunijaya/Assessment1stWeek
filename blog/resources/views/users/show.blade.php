
@extends('layouts.app')

@section('content')

<h1>{{ $user->name }}</h1>
<p class="lead">{{ $user->email }}</p>
<hr>

<a href="{{ route('users.index') }}" class="btn btn-info">Back to all users</a>
<a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit user</a>

<div class="pull-right">
    {!! Form::open([
            'method' => 'DELETE',
            'route' => ['users.destroy', $user->id]
        ]) !!}
            {!! Form::submit('Delete this user', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
</div>

@endsection