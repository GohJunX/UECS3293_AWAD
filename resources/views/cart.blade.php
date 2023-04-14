@extends('layouts.app')

@section('content')
<style>
  
  body {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    
  }

  h1 {
    margin-top: 0;
    font-size: 30px;
  }

  table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    width:1000px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  }

  thead tr{
    background-color: #de9814;
    color: #ffffff;
    text-align: left;
  }
  th, td {
    border: 1px solid black;
    font-size: 20px;
    text-align: center;
    word-wrap: break-word;
    padding: 10px;
  }

  .total {
    font-weight: bold;
    text-align: end;
  }

  button {
    margin-top: 10px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

p {
  font-size: 18px;
}

</style>

<div>
  <h1>Shopping Cart</h1>

  @if (isset($message))
    <p>{{ $message }}</p>
  @else
    <table>
      <thead>
        <tr>
          <th></th>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
          <th>Operation</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cartItems as $item)
        <tr>
          <td><img src="{{ asset('image/' . $item->product->name . '.jpg') }}" alt="{{ $item->product->name }}" width="100" height="100" style="margin:auto"></td>
          <td>{{ $item->product->name }}</td>
          <td>{{ $item->quantity }}</td>
          <td>{{ $item->product->price }}</td>
          <td>{{ $item->quantity * $item->product->price }}</td>
          <td>
            <form action="{{route('cart.item.destroy',$item->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-outline-danger btn-lg">Remove</button>
          </form></td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <td colspan="5" class="total">Total:</td>
          <td>{{ $total }}</td>
        </tr>
      </tfoot>
    </table>
    <div style="display: flex; justify-content: center;">
      <a href="{{ route('checkout') }}">
        <button type="submit">Checkout</button>
      </a>
    </div>
    
  @endif
</div>
@endsection