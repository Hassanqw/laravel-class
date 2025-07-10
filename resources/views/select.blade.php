<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
     @foreach ($allstudent as $std)
     
     
        <tr>
            <td scope="row">{{ $std["name"] }}</td>
            <td>{{ $std["email"] }}</td>
            <td>{{ $std["password"] }}</td>
            <td><a class="btn btn-info" href="edit/{{ $std["id"] }}">Eidt</a></td>
           <td>
  <form action="{{ url('delete/'.$std['id']) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button>
  </form>
</td>

        </tr>
       @endforeach
    </tbody>
</table>
  </body>
</html>