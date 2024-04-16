@extends('user_template.layouts.user_profile_template')
@section('profilecontent')
    Pending Orders

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Produc Name</td>
                <th>Image</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pending_orders as $order)
         @php
            $product_name = App\Models\Product::where('id',$order->product_id)->value('product_name');
            $img = App\Models\Product::where('id',$order->product_id)->value('product_img');
         @endphp
            <tr>
                <td>{{ $product_name  }}</td>
                <td><img src="{{ asset($img) }}" style="height: 80px"></td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->total_price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
