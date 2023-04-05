@foreach ($orders as $order)
    <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->user->name }}</td>
        <td>{{ $order->status }}</td>
        <td>{{ $order->created_at }}</td>
        <td><a href="{{ route('admin.orders.show', $order->id) }}">View Details</a></td>
    </tr>
@endforeach