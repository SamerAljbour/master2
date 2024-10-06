<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Transfer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
</head>
<body>
    <div>s</div>
    <div>s</div>
    <div>s</div>
    <div>s</div>

    @include('layout.dash')

    <div class="container">

        <h2>Add Transfer Type</h2>

        <!-- Display success message after addition or deletion -->
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.transfers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Transfer Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="dimensions">Dimensions</label>
                <input type="text" name="dimensions" id="dimensions" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>

        <h2>Available Transfer Types</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Transfer Name</th>
                    <th>Dimensions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($packageTypes as $packageType)
                    <tr>
                        <td>{{ $packageType->name }}</td>
                        <td>{{ $packageType->dimensions }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('admin.transfers.edit', $packageType->id) }}" class="btn btn-warning">Edit</a>

                            <!-- Delete Form -->
                            <form action="{{ route('admin.transfers.destroy', $packageType->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- JavaScript to show alert for success message -->
    @if(session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif

</body>
</html>
