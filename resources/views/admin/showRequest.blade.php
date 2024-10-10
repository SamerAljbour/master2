<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <base href="{{ url('/') }}/" target="_self">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* لون خلفية الصفحة */
        }
        h4 {
            margin-top: 2rem; /* مسافة أعلى العنوان */
        }
        .table thead th {
            background-color: #343a40; /* لون خلفية رؤوس الجدول */
            color: white; /* لون النص في رؤوس الجدول */
        }
        .table tbody tr:hover {
            background-color: #e9ecef; /* تأثير تفاعلي عند تمرير الفأرة */
        }
    </style>
</head>
<body>
    @include('layout.dash')

    <div class="container mt-5">
        <h4 class="text-center">My Requests</h4>
        @if($inventoryRequests->isEmpty())
            <div class="alert alert-warning text-center">You have no current requests.</div>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Name</th>
                            <th>Request ID</th>
                            <th>Housing Details</th>
                            <th>Status</th>
                            <th>Size</th>
                            <th>Breakable</th>
                            <th>Requested Service</th>
                            <th>Message</th>
                            <th>Total Price</th>
                            <th>Request Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($inventoryRequests as $request)
                            <tr>
                                <td>{{ $request->name }}</td>
                                <td>{{ $request->id }}</td>
                                <td>{{ $request->housing_details }}</td>
                                <td>
                                    @if($request->status_id == 1)
                                        <span class="badge badge-success">Pending</span>
                                    @elseif($request->status_id == 2)
                                        <span class="badge badge-info">In Progress</span>
                                    @else
                                        <span class="badge badge-danger">Completed</span>
                                    @endif
                                </td>
                                <td>{{ $request->size }}</td>
                                <td>{{ $request->breakable ? 'Yes' : 'No' }}</td>
                                <td>{{ $request->delivery_service }}</td>
                                <td>{{ $request->message }}</td>
                                <td>${{ number_format($request->total_price, 2) }}</td>
                                <td>{{ $request->created_at->format('d/m/Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
