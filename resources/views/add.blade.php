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
      <div class="container">
        <form action="" method="post">
          @csrf
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" value="{{old("name") }}" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
              @error("name")
              <small id="helpId" class="text-danger">{{$message}}</small>
               @enderror
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" value="{{ old("email") }}" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
              @error("email")
              <small id="helpId" class="text-danger">{{$message}}</small>
               @enderror
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="text" value="{{ old ("password") }}" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
             @error("password")
              <small id="helpId" class="text-danger">{{$message}}</small>
               @enderror
            </div>
            <button class="btn btn-info">Add</button>
        </form>
      </div>
  </body>
</html>