<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Order History</title>
        <!-- Add the following link to include Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
    </head>
<body>
    @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $user->name }}'s Orders</h1>
        <table class="table-bordered table-hover table-striped">
            <thead class="table-dark">
              <tr>
                <th>Order ID</th>
                <th>Payment Method</th>
                <th>Payment Status</th>
                <th>Order Status</th>
                <th>Total Amount</th>
                <th>Created At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $order)
              <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->payment ? $order->payment->payment_method : 'N/A' }}</td>
                    <td>{{ $order->payment ? $order->payment->payment_status : 'N/A' }}</td>
                    <td>{{ $order->status }}</td>
                    <td>$ {{ $order->total_amount }}</td>
                    <td>{{ $order->created_at }}</td>
                        <!-- this is the line to show the details of order which is go to cart or somewhere to view-->
                        <td><a href="{{ route('user.profile', $order->id) }}">View Details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
</body>

</html>