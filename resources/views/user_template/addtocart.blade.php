@extends('user_template.layouts.template')
@section('main-content')
<h1>I am Add To Cart page</h1>
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<div class="row">
    <div class="col-12">
        <div class="box_main">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($cart_items as $item )
                        <tr>
                            @php
                               $product_name = App\Models\Product::where('id',$item->product_id)->value('product_name');
                               $img = App\Models\Product::where('id',$item->product_id)->value('product_img');
                            @endphp
                            <td><img src="{{ asset($img) }}" style="height: 80px"></td>
                            <td>{{ $product_name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{$item->price }}</td>
                            <td><a href="#" class="btn btn-warning">Remove</a></td>
                        </tr>
                        @php
                            $total = $total + $item->price;
                        @endphp
                        <tr>
                            <td>Total</td>
                            <td>{{ $total }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection






