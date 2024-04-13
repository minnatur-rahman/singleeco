@extends('user_template.layouts.template')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="box_main mt-5">
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li><a href="">Pending</a></li>
                    <li><a href="">History</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="box_main mt-5">
                @yield('profilecontent')
            </div>
        </div>
    </div>
</div>
@endsection
