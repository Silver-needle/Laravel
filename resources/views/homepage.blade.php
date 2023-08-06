//Homepage
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<body>
    <x-header></x-header>
    <h1>Welcome, leather!</h1>
    <br>
    @if($errors->any())
    @foreach($errors->all() as $error)
    <x-alert :message="$error" type="danger"></x-alert>
    @endforeach
    @endif
    <form method="post" action="{{ route('homepage') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="message">Data request</label>
            <textarea type="text" class="form-control" name="message" id="message" value="{{ old('message') }}">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Send data</button>
            <a href="{{ route('homepage.download') }}" class="btn btn-sm btn-outline-secondary">Download news</a>
        </form>
    </div>
@endsection
<x-footer></x-footer>
</body>
</html>