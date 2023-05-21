
@extends('layouts/admin')

@section('content')

    <div class="container py-5">
        
        <form action=" {{ route('admin.projects.store') }} " method="POST">
            @csrf 
  
            <div class="input-group mb-3">
                <label for="title">Title</label>
                <input class="mx-3 form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title')}}" required>
                
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="description">Description</label>
                <textarea class="mx-3 form-control @error('description') is-invalid @enderror" id="description" name="description" required>{{old('description')}}</textarea>
                            
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="thumbnail">Thumbnail</label>
                <input class="mx-3 form-control @error('thumb') is-invalid @enderror" type="text" id="thumbnail" name="thumbnail" value="{{old('thumbnail')}}" required>
                                
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="languages">Languages</label>
                <input class="mx-3 form-control @error('languages') is-invalid @enderror" type="text" id="languages" name="languages" value="{{old('languages')}}" required>
                            
                @error('languages')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="year">Year</label>
                <input class="mx-3 form-control @error('year') is-invalid @enderror" type="number" id="year" name="year" value="{{old('year')}}">
                            
                @error('year')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="github_repo">Github Repository Name</label>
                <input class="mx-3 form-control @error('github_repo') is-invalid @enderror" type="text" id="github_repo" name="github_repo" value="{{old('github_repo')}}" required>
                            
                @error('github_repo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
  
              <button type="submit">add</button>
          </form>
  

    </div>

@endsection