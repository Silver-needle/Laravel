@extends('layouts.main')

@section('title') Categories @endsection

@section('content')
<h1>Categories</h1>
@for ($i = 1; $i < count($newsCategory); $i++) <a class="btn btn-link" href="category/{{$i}}">{{ $newsCategory[$i] }}</a>
    @endfor
    <table>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Description</td>
        </tr>
        @foreach ($cats as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->title }}</td>
            <td>{{ $cat->description }}</td>
        </tr>
        @endforeach
    </table>
    @endsection

    <h2>News Categories</h2>
    <?php foreach ($cats as $cat) : ?>
        <div>
            <h4><a href="<?= route('category.show', ['id' => $category['id']]) ?>"><?= $category['name'] ?></a></h4>
            <br>
            <p><?= $category['description'] ?></p>
        </div>
        <hr /><br>
    <?php endforeach; ?>