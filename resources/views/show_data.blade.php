<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Bookstore</title>
</head>

<body>
    <div class="container">
        <a href="{{ url('/add-data')}}" class="btn btn-primary my-3"> Add Data </a>
        @if(Session::has('msg'))
        <p class="alert alert-success">{{Session::get('msg')}}</p>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($showData as $key=>$data)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>
                        <a href="{{url('/edit-data/'.$data->id)}}" class="btn btn-success">Edit</a>
                        <a href="{{url('/delete-data/'.$data->id)}}" onclick="return confirm('Are you sure you want to Delete ?')" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $showData->links() }}
    </div>
</body>

</html>