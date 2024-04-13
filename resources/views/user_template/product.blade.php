@extends('user_template.layouts.template')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="box_main">
                <div class="tshirt_img"><img src="{{ asset($product->product_img) }}"></div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="box_main">
                <div class="product-info">
                    <h4 class="shirt_text text-left">{{ $product->product_name }}</h4>
                    <p class="price_text text-left">Price  <span style="color: #262626;">{{ $product->price }}</span></p>
                </div>
                <div class="my-3 product-details">
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, labore similique quas libero facilis possimus, doloribus minus maxime natus cumque quasi cupiditate voluptas aliquam, esse autem eligendi illo ea tenetur!</p>
                    <ul class="p-2 bg-light my-2">
                        <li>Category - Electronic</li>
                        <li>Subcategory - Mobile</li>
                        <li>Available Quantity - 10</li>
                    </ul>
                </div>
                <div class="btn-main">
                    <div class="btn btn-warning"><a href="">Add To Cart</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="fashion_section">
        <div id="main_slider">
            <div class="container">
                <h1 class="fashion_taital">Related Products</h1>
                <div class="fashion_section_2">
                    <div class="row">


                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Product Name</h4>
                                    <p class="price_text">Price <span style="color: #262626;">$ 50</span>
                                    </p>
                                    <div class="tshirt_img"><img src=""></div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                                        <div class="seemore_bt"><a href="">See More</a></div>
                                    </div>
                                </div>
                            </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
