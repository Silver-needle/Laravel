@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Add News</h1>
  <div class="btn-toolbar mb-2 mb-md-0"> 
  </div>
</div>
<div>
@if($errors->any())
    @foreach($errors->all() as $error)
    <x-alert :message="$error" type="danger"></x-alert>
    @endforeach
@endif 
  <form action="{{ route('admin.news.store') }}" method="post">
  @csrf          {{-- Формирует обновляемый токен (фишинговая защита) --}}  
  <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
    </div>
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" class="form-control" name="author" id="author" value="{{ old('author') }}">
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select class="form-control" name="status" id="status">

        <option @if(old('status') === 'draft') selected @endif>draft</option>
        <option @if(old('status') === 'active') selected @endif>active</option>
        <option @if(old('status') === 'blocked') selected @endif>blocked</option>
      </select>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" name="description" id="description">{{ old('description') }}</textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-success">Save</button>
  </form>
</div>
@endsection