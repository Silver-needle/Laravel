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
    @csrf {{-- Формирует обновляемый токен (фишинговая защита) --}}
    <div class="form-group">
      <label for="category_id">Категория</label>
      <select class="form-control" name="category_id" id="category_id">
        @foreach($categories as $category)
        <option value="{{ $category->id }}" @if($category->id === old('category_id')) selected @endif>{{ $category->title }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
    </div>
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" class="form-control" name="author" id="author" value="{{ old('author') }}">
    </div>
    <div class="form-group">
      <label for="image">Изображение</label>
      <input type="file" class="form-control" name="image" id="image">
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select class="form-control" name="status" id="status">

        <option @if(old('status')===\App\Enums\News\Status::DRAFT->value) selected @endif>{{ \App\Enums\News\Status::DRAFT->value }}</option>
        <option @if(old('status')===\App\Enums\News\Status::ACTIVE->value) selected @endif>{{ \App\Enums\News\Status::ACTIVE->value }}</option>
        <option @if(old('status')===\App\Enums\News\Status::BLOCKED->value) selected @endif>{{ \App\Enums\News\Status::BLOCKED->value }}</option>
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