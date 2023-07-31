@extends('layouts.main')

@section('content')
@for ($i = 1; $i < count($newsCategory); $i++) 
<a class="btn btn-link" href="category/{{$i}}">{{ $newsCategory[$i] }}</a>
    @endfor
    <table>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Description</td>
        </tr>
        @foreach ($cats as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->title }}</td>
            <td>{{ $category->description }}</td>
        </tr>
        @endforeach
    </table>
    @endsection