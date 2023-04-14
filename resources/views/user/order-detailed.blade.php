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
    border: 1px solid black;
    table-layout: fixed;
    width: 100%;
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
  <h1>Order Details</h1>

 
    <table>
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
         
        </tr>
      </thead>
      <tbody>
        @foreach ($orderItems as $item)
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
          <td colspan="3" class="total">Total:</td>
          <td>{{ $total }}</td>
        </tr>
      </tfoot>
    </table>
    
</div>
@endsection