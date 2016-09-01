<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=" {{asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-primary" href="{{route('createUser')}}">Add User</a>
            <table class="table table-sm">
                <h2>USER LIST</h2>
                <tr>
                   <!-- <th>First Name</th>
                    <th>Last Name</th>-->
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                @foreach( $users as $user )
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->phone }}</td>
                        <td><a href="{{ /*url('users/'.$user->id ."/edit")*/ Route('editUser',$user->id) }}">Edit</a>&nbsp;<a href="{{Route('deleteUser',$user->id)}}">Delete</a></td>

                    </tr>
                @endforeach
            </table>

        </div>

    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</html>

