@extends('layouts.app')

@section('title')
ショップ
@endsection


@section('content')
@if(session('success_message'))
    <div class="alert alert-success" role="alert">
        {{session('success_message')}}
    </div>
@endif
    <div class="jumbotron top-img">
        <p class="text-center text-white top-img-text">Laravel_book</p>
    </div>
    <div class="container">
        <div class="top__title text-center">
            商 品 一 覧
        </div>
        <div class="row">
            @foreach ($products as $product)
            <a href="{{route('product.show',$product->id)}}" class="col-lg-4 col-md-6">
                <div class="card">
                    <img src="{{ asset($product->images) }}" class="card-img"/>
                    <div class="card-body">
                        <p class="card-title">{{ $product->name }}</p>
                        <p class="card-text">¥{{ number_format($product->price) }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection