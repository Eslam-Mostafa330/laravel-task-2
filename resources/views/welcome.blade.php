<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            @if(Auth::user()->admin == true)
                <h1>You logged in as an admin, and currently, you have permission to create and delete!</h1>
                <th colspan="3"><a href="{{ url('category/create') }}"><h3>Create</h3></a></th>
            @else
            <h1>You logged in as a user, and you don't have permission to create or delete!</h1>
            @endif
        </tr>
        <br>
        <hr>
        @foreach($data as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->user_id }}</td>
            <td><a href="{{ url("category/edit/$category->id") }}">Edit</a></td>
            <td><a href="{{ url("category/delete/$category->id") }}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ url('/logout') }}"><button>Logout</button></a>
</body>
</html>