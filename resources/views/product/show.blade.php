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
        <form action="{{route('line_item.create')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$product->id}}"/>
            <div class="product_quantity">
                <input type="number" name="quantity" min="1" value="1" require>
            </div>
            <div class="product__btn-add-cart">
                <button type="submit" class="btn btn-outline-secondary">カートに追加</button>
            </div>
        </form>
    </div>
    <br>
    <a href="{{route('product.index')}}">TOPへ戻る</a>
</div>
@endsection