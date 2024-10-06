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
        <h2>Edit Transfer Type</h2>

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.transfers.update', $packageType->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Transfer Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $packageType->name }}" required>
            </div>
            <div class="form-group">
                <label for="dimensions">Dimensions</label>
                <input type="text" name="dimensions" id="dimensions" class="form-control" value="{{ $packageType->dimensions }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
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
