@extends('layouts.main')
@section('title') List of News - @parent @stop
@section('content')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  @forelse($newsList as $news)
  <div class="col">
    <div class="card shadow-sm">
      <h4><a href="{{ route('news.show', [$news['id']]) }}">{{ $news['title'] }}</a></h4>
      <img src="{{ $news['image'] }}">
      <div class="card-body">
        <p class="card-text">{!! $news['description'] !!}</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="{{ route('news.show', [$news['id']]) }}" class="btn btn-sm btn-outline-secondary">View</a>
          </div>
          <small class="text-body-secondary"><em>{{ $news['author'] }}</em> &nbsp; ({{ $news['created_at'] }})</small>
        </div>
      </div>
    </div>
  </div>
  @empty
  <h2>There is no news yet</h2>
  @endforelse
</div>
@endsection