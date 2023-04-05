@extends('layouts.admin')

@section('content')
    <h1>Admin Dashboard</h1>
    @if (Auth::check())
    <p>Welcome, {{ Auth::user()->name }}</p>
    @else
    <p>Welcome, Guest</p>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Orders</div>
                <div class="card-body">
                    <p class="card-text">View all orders and their details.</p>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-primary">View Orders</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Products</div>
                <div class="card-body">
                    <p class="card-text">View all products and manage them.</p>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>
    </div>
@endsection
