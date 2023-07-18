<h2>{{ $category['title'] }}</h2>
<div>
  <h4><a href="{{ route('news.index') }}">{{ $category['title'] }}</a></h4>
  <br>
  <p>{{ $category['description'] }}</p>
</div>