<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
</head>
<body>

    @include('layout.dash')

    <div class="container mt-5">
        <h2 class="mb-4">Registered Users</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.createuser') }}" class="btn btn-primary mb-3">
            Create New Account
        </a>

        <div class="card">
            <div class="card-header">List of Users</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Actions</th>
                                <th>Role</th> 

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->number }}</td>
                                    <td>{{ $user->address }}</td>

                                    <td>
                                        @if($user->deleted_at)
                                            <span class="text-danger">Deleted</span>
                                        @else
                                            <span class="text-success">Active</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if(!$user->deleted_at)
                                            <a href="{{ route('admin.edituser', $user->id) }}" class="btn btn-outline-secondary btn-icon-text">
                                                Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                            </a>
                                            <a href="{{ route('admin.softdeleteuser', $user->id) }}" class="btn btn-outline-warning btn-icon-text">
                                                Soft Delete <i class="mdi mdi-delete btn-icon-append"></i>
                                            </a>
                                        @else
                                            <a href="{{ route('admin.restoreuser', $user->id) }}" class="btn btn-outline-success btn-icon-text">
                                                Restore <i class="mdi mdi-recycle btn-icon-append"></i>
                                            </a>
                                        @endif
                                    </td>

                                    <td>
                                        @switch($user->role_id)
                                            @case(1)
                                                User
                                                @break
                                            @case(2)
                                                Admin
                                                @break
                                            @case(3)
                                                Super Admin
                                                @break
                                            @default
                                                Unknown
                                        @endswitch
                                    </td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
