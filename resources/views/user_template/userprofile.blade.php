@extends('user_template.layouts.user_profile_template')
@section('profilecontent')
<h1>Dashboard</h1>

<div class="container">
    <div class="card">
        <div class="card-title"><h3 class="text-center mt-4">Approved Order</h3></div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Shipping Information</th>
                        <th>Product Id</th>
                        <th>Quantity</th>
                        <th>Total Will Pay</th>

                    </tr>
                </thead>
                <tbody>
                @php
                    $pending_orders= App\Models\Order::where('status', 'pending')->get();
                @endphp
                    @foreach ($pending_orders as $order )
                       <tr>
                          <td>{{ $order->user_id }}</td>
                          <td>
                            <ul>
                                <li>Phone Number - {{ $order->shipping_phoneNumber }}</li>
                                <li>City - {{ $order->shipping_city }}</li>
                                <li>Postal Code - {{ $order->shipping_postalCode }}</li>
                            </ul>
                          </td>
                          <td>{{ $order->product_id }}</td>
                          <td>{{ $order->quantity }}</td>
                          <td>{{ $order->total_price }}</td>

                       </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
