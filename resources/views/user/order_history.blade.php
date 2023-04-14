<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <h1>{{ $user->name }}'s Orders</h1>
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Order ID</th>
                    <th>Payment Method</th>
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
                    <td>{{ $order? $order->payment_method : 'N/A' }}</td>
                    <td>{{ $order->status }}</td>
                    <td>$ {{ $order->total_amount }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td><a href="{{ route('user.show.order', $order->id) }}" class="btn btn-primary">View Details</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>