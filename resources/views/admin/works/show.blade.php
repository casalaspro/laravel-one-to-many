@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="card">
      <div class="card-header">
        <h2>{{ $work->title }}</h2>
      </div>
      <div class="card-body">
        <h3>Slug:</h3>
        <p>{{ $work->slug }}</p>
        <h3>Description:</h3>
        <p>{{ $work->description }}</p>
        <h3>Link GitHub:</h3>
        <a href="#">{{ $work->github_link }}</a>
        <h3>Modify:</h3>
        
        <a href="{{ route('admin.works.edit', $work) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('admin.works.destroy', $work) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Trash</button>
        </form>

      </div>
    </div>
  </div>

@endsection