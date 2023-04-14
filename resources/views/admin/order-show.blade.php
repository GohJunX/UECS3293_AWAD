@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h4>Order #{{ $order->id }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Customer Information:</h5>
                                <p><strong>Name:</strong> {{ $order->user->name }}</p>
                                <p><strong>Email:</strong> {{ $order->user->email }}</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Order Details:</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order->orderItems as $item)
                                            <tr>
                                                <td>{{ $item->product->name }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->product->price }}</td>
                                                <td>{{ $item->quantity * $item->product->price }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3"><strong>Total:</strong></td>
                                            <td>{{ $order->total_amount }}</td>
                                            
                                        </tr>
                                        <tr>
                                            <td colspan="3"><strong>Status:</strong></td>
                                            <td><strong>{{ $order->status }}</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <button class="btn btn-secondary" onclick="window.history.back()">Go Back</button>
                        <form action="{{route('admin.orders.edit',$order->id)}}" method="GET">
                            @csrf
                            <button class="btn btn-outline-success btn-lg">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
