<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session()->has('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="{{ route('storePostName') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="body" placeholder="Content">
    <button type="submit">Create Post</button>
    </form>
</body>
</html>