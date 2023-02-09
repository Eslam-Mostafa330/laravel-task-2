<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New category</title>
</head>
<body>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{ url('category/store')}}" method="POST">
        @csrf
        <label for="name">Create New Category</label>
        <input type="text" name="name" id="name">
        <input type="submit" value="Create">
    </form>
</body>
</html>