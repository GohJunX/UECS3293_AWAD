@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row table-responsive">
        <div class="col-md-12 ">
            <h1>Orders</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Order Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $startIndex+$loop->iteration }}</td>
                            <td>{{ $order->order->user->name }}</td>
                            <td>{{ $order->product->name }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->price }}</td>
                            <td>{{ $order->order->created_at }}</td>
                            <td>{{ $order->order->status}}</td>
                            <td>
                                <div class="btn-group">
                                    <form action="{{route('admin.orders.show',$order->order->id)}}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button class="btn btn-outline-success btn-lg">Show</button>
                                    </form>               
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$orders->links()}}
        </div>
    </div>
</div>
@endsection
