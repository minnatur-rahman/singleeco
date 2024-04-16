@extends('admin.layouts.template')
@section('page_title')
Pending Order - Single Ecom
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-title">Pending Order</div>
        <div class="card-body">
            <table>
                <thead>
                    <tr>
                        <th>User Id</th>
                        <th>Shipping Information</th>
                        <th>Product Id</th>
                        <th>Quantity</th>
                        <th>Total Will Pay</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pending_orders as $order )
                       <tr>
                          <td>{{ $order->user_id }}</td>
                          <td>
                            <ul>
                                <li>Phone Number - {{ $order->shipping_phoneNumber }}</li>
                                <li>City - {{ $order->shipping_city }}</li>
                                <li>Postal Code - {{ $oder->shipping_postalCode }}</li>
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
