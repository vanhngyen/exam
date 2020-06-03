<!doctype html>
<html lang="1">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search</title>
</head>
<body>
<h1>search book</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Author_id</th>
        <th scope="col">Title</th>
        <th scope="col">ISBN</th>
        <th scope="col">Pub year</th>
        <th scope="col">Available</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <th>{{$book->id}}</th>
            <td>{{$book->author_id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->ISBN}}</td>
            <td>{{$book->pub_year}}</td>
            <td>{{$book->available}}</td>
        </tr>
    </tbody>
</table>
</body>
</html>
