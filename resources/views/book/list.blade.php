<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book list</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h3 class="card-title">book search</h3>
<form  role="form" action="{{url("/searchbook")}}" method="POST"  >
    @method("POST")
    @csrf
    <div class="form-group" style="width: 30%">
        <label for="book">Email address</label>
        <input type="text" name="bookname" class="form-control" id="book" placeholder="Search....">
        <button class="btn btn-dark">Search</button>
    </div>
</form>
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
    @foreach($books as $book)
    <tr>
        <th>{{$book->__get("id")}}</th>
        <td>{{$book->__get("author_id")}}</td>
        <td>{{$book->__get("title")}}</td>
        <td>{{$book->__get("ISBN")}}</td>
        <td>{{$book->__get("pub_year")}}</td>
        <td>{{$book->__get("available")}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
