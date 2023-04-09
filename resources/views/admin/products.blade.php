@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="d-flex align-items-center justify-content-between">
            <h1>Products</h1>
            <form action="{{ route('admin.products.create') }}" method="GET">
                @csrf
                <button class="btn btn-outline-success btn-lg">New</button>
            </form>
        </div>
    
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Item Name</th>
                        <th>Item Description</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $startIndex + $loop->iteration}}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>
                                <div class="btn-group">
                                    <form action="{{route('admin.products.edit',$product->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-outline-primary btn-lg">Edit</button>
                                    </form>
                                    <form action="{{route('admin.products.destroy',$product)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-lg">Delete</button>
                                    </form>                                
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links()}}
        </div>
    </div>
</div>
@endsection
