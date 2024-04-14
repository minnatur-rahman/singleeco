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
                    @foreach ($cart_items as $items )
                        <tr>
                            <td>{{ $items->product_id }}</td>
                            <td>{{ $items->quantity }}</td>
                            <td>{{ $items->price }}</td>
                            <td><a href="" class="btn btn-warning">Remove</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
