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
    @include('components.header')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Order ID</th>
                <th>Order Details</th>
                <th>Total Amount</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$order->id}}</td>
                <td>{{$order->}}</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</body>

</html>