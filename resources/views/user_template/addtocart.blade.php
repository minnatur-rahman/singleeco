@extends('user_template.layouts.template')
@section('main-content')
<h1>I am Add To Cart page</h1>
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
@endsection
