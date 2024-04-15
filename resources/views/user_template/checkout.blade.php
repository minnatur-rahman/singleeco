@extends('user_template.layouts.template')
@section('main-content')
<h1>Final step to place order</h1>
<div class="row">
    <div class="col-8">
        <div class="box_main">
            <h3>Products will Send At -</h3>
            <p>City/Village - {{ $shipping_address->city_name }}</p>
            <p>Postal Code - {{ $shipping_address->postal_code }}</p>
            <p>Phone number - {{ $shipping_address->phone_number	 }}</p>
        </div>
    </div>

    <div class="col-4">
        <div class="box_main">
            <h3>Your Final Products Are -</h3>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($cart_items as $item )
                        <tr>
                            @php
                               $product_name = App\Models\Product::where('id',$item->product_id)->value('product_name');
                            @endphp
                            <td>{{ $product_name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{$item->price }}</td>
                        </tr>
                        @php
                            $total = $total + $item->price;
                        @endphp
                    @endforeach
                         @if ($total > 0)
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>{{ $total }}</td>
                        </tr>
                        @endif
                </table>
            </div>
        </div>
    </div>
    <div class="space-bwting">
        <form action="" method="POST">
            @csrf
            <input type="submit" class="btn btn-primary" value="Place Order" me-3>
        </form>

        <form action="" method="POST">
            @csrf
            <input type="submit" class="btn btn-warning" value="Cancel Order">
        </form>
    </div>
</div>
@endsection
