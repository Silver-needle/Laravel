@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">News List</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="{{ route('admin.news.create') }}" class="btn btn-sm btn-outline-secondary">Add News</a>
    </div>
  </div>
</div>
<div class="table-responsive small">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Header</th>
        <th scope="col">Author</th>
        <th scope="col">Status</th>
        <th scope="col">Date</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($newsList as $news)
      {{-- @dump($loop->first) --}}
      <tr>
        <td>{{ $news->id }}</td>
        <td>{{ $news->title }}</td>
        <td>{{ $news->author }}</td>
        <td>{{ $news->status }}</td>
        <td>{{ $news->created_at }}</td>
        <td><a href="">Edit</a> &nbsp; <a href="">Delete</a></td>
      </tr>
      @empty
      <tr>
        <td colspan="6">Not found</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection