@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <h2>Dashboard</h2>
    <a href="{{ route('admin.works.create') }}" class="btn btn-success">Create New Project</a>
  </div>
</div>

<div class="container">
  <div class="card">
    <div class="card-header">
      <h3>Dashboard Projects</h3>
    </div>

    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Description</th>
            <th scope="col">GitHub Link</th>
            <th scope="col">Modify</th>
          </tr>
        </thead>
        <tbody>
          
            @foreach ($works as $work)
            <tr>
              <th scope="row">{{ $work->id }}</th>
              <td>{{ $work->title }}</td>
              <td>{{ $work->slug }}</td>
              <td>{{ $work->description }}</td>
              <td><a href="#">{{ $work->github_link }}</a></td>
              <td>
                <a href="{{ route('admin.works.show', $work ) }}" class="btn btn-primary">More Infos</a>
                <a href="{{ route('admin.works.edit', $work) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('admin.works.destroy', $work) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Trash</button>
                </form>
              </td>
            </tr>
            @endforeach
         
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection