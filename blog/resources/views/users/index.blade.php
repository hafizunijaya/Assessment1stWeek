@extends('layouts.app')

@section('content')
<div class="py-4">
<h1>User List</h1>
<p class="lead">All your users information <a href="{{ route('users.create') }}">Add a new one?</a></p>
<hr>
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
@foreach($users as $user)
    <h3>{{ $user->name }}</h3>
    <p>{{ $user->email}}</p>
    <p>
        <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">View user</a>
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit user</a>
       
    </p>
    <hr>
    
@endforeach
</div>
@endsection