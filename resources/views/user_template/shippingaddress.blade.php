@extends('user_template.layouts.template')
@section('main-content')
<h1>Provide Your Shipping Address</h1>
<div class="row">
    <div class="col-12">
        <div class="box_main">
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="phone_num">Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" id="phone_num" placeholder="Input Your Phone Number">
                </div>

                <div class="form-group">
                    <label for="city_name">City/Village Name</label>
                    <input type="text" name="city_name" class="form-control" id="city_name" placeholder="Input Your City/village Name">
                </div>

                <div class="form-group">
                    <label for="postal_code">Postal Code</label>
                    <input type="text" name="postal_code" class="form-control" id="postal_code" placeholder="Input Your Postal Code">
                </div>

                <input type="submit" class="btn btn-danger" value="Next" id="submit_info">
            </form>
        </div>
    </div>
</div>
@endsection
