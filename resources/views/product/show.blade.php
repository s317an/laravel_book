@extends('layouts.app')

@section('title')
{{$product->name}}
@endsection

@section('content')
<div class="container">
    <div class="product">
        <img src="{{asset($product->images)}}" class="product-img">
        <div class="product__content-header text-center">
            <div class="product__name">
                {{$product->name}}
            </div>
            <div class="product price">
                <h3>¥{{number_format($product->price)}}</h3>
            </div>
        </div>
        {{$product->description}}
    </div>
</div>
@endsection