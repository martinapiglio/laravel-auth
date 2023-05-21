
@extends('layouts/admin')

@section('content')

    <div class="container py-5">
        
        <h3 class="display-5 fw-bold mb-5">
            All projects
        </h3>

        <table class="table">

            <thead>
                <th></th>
                <th>Title</th>
                <th>Description</th>
                <th>Languages</th>
                <th>Year</th>
                <th>Repository name</th>
                <th>Details</th>
            </thead>
          
            <tbody>
          
              @foreach($projects as $project)
                <tr>
                    <td> <img class="img-thumbnail" src="{{$project->thumbnail}}" alt=""> </td>
                    <td>{{$project->title}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->languages}}</td>
                    <td>{{$project->year}}</td>
                    <td>{{$project->github_repo}}</td>
                    <td><a href="{{route('admin.projects.show', $project->slug)}}">click here</a></td>
                </tr>
              @endforeach
          
            </tbody>

        </table>

    </div>

@endsection