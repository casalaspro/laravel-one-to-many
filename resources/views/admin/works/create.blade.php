@extends('layouts.app')

@section('content')

<div class="container">
  <form class="mt-3" action="{{ route('admin.works.store') }}" method="POST">

    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="insert the project title here.." value="{{ old('title') }}">
    </div>
    
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea type="text" name="description" class="form-control" id="description" placeholder="insert the description here.." rows="5">{{ old('description') }}</textarea>
    </div>
    
    <div class="mb-3">
      <label for="github_link" class="form-label">GitHub Link</label>
      <input type="text" name="github_link" class="form-control" id="github_link" placeholder="http://..." value="{{ old('github_link') }}">
    </div>

    <div class="mb-3">
      <label for="type_id" class="form-label">Type</label>
      <select class="form-control" name="type_id" id="type_id">
        <option value="">-- Select Type --</option>
        @foreach($types as $type) 
          <option @selected( $type->id == old('type_id') ) value="{{ $type->id }}"> {{ $type->name }}</option>
        @endforeach
      </select>
    </div>

    <button class="btn btn-success">Create</button>
  </form>

  @if ($errors->any())
    <ul class="errors">
      @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{ $error }}</li>  
      @endforeach
    </ul>
  @endif
</div>
    
@endsection