<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>BookStore</title>
</head>

<body>
    <div class="container">
        <a href="{{ url('/')}}" class="btn btn-primary my-3"> Show Data </a>
        <form action="{{ url('/update-data/'.$editData->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" value="{{$editData->name}}" placeholder="Enter Your Name">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" value="{{$editData->email}}" placeholder="Enter Your Email">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <input type="submit" class="btn btn-primary my-3" value="Submit">
        </form>
    </div>
</body>

</html>