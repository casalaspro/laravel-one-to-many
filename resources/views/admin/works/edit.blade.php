@extends('layouts.app')

@section('content')

<div class="container mt-3">
  <form action="{{ route('admin.works.update', $work) }}" method="POST">

    @csrf

    @method('PUT')

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="insert the project title here.." value="{{ $work->title }}">
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control" id="slug" placeholder="insert the project slug here.." value="{{ $work->slug }}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
    <textarea type="text" name="description" class="form-control" id="description" placeholder="insert the description here.." value="">{{ $work->description }}</textarea>
    </div>
    <div class="mb-3">
      <label for="github_link" class="form-label">GitHub Link</label>
    <input type="text" name="github_link" class="form-control" id="github_link" placeholder="http://..." value="{{ $work->github_link }}">
    </div>

    {{-- <a href="" class="btn btn-success mt-3">Update</a> --}}
    <button class="btn btn-success mt-3">Update</button>
  </form>

  <div class="error">
    @if ($errors->any())
        <ul>
          @foreach ($errors->all() as $error)
              <li class="alert alert-danger">{{ $error }}</li>
          @endforeach
        </ul>
    @endif
  </div>
</div>

@endsection