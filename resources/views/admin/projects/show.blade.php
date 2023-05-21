@extends('layouts/admin')

@section('content')

<div class="container my-5">
    <h1>{{$project->title}}</h1>
    <hr class="mb-2">
    <p>
        <strong>Description</strong>: {{$project->description}}
    </p>
    <img class="img-thumbnail mb-2" src="{{$project->thumbnail}}" alt="">
    <div class="mb-2"><strong>Languages</strong>: {{$project->languages}}</div>
    <div class="mb-2"><strong>Github repository name</strong>: {{$project->github_repo}}</div>
    <div class="mb-3"><strong>Year</strong>: {{$project->year}}</div>

    <div class="mb-2">
        <a href="{{route('admin.projects.index')}}">Back</a>
    </div>

</div>
@endsection