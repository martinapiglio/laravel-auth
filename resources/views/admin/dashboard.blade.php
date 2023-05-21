@extends('layouts.admin')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        
        <h1 class="display-5 fw-bold">
            You are now logged in!
        </h1>

    </div>
</div>

<div class="content">
    <div class="container">
        <p>This is the main login page</p>
        <a href="{{route('admin.projects.index')}}">Show all projects</a> <br>
        <a href="{{route('admin.projects.create')}}">Add a new project</a>
    </div>
</div>
@endsection