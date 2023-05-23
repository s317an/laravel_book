<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/sass/app.scss')
    <title>ショップ</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('product.index') }}">TOP</a>
            <a class="fas fa-shopping-cart" href="#"></a>
        </div>
    </nav>
</body>
    <div class="jumbotron top-img">
        <p class="text-center text-white top-img-text">{{ config('app.name',    'Laravel')}}</p>
    </div>
    <div class="container">
        <div class="top__title text-center">
            All Products
        </div>
        <div class="row">
            @foreach ($products as $product)
            <a href="#" class="col-lg-4 col-md-6">
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
</body>
</html>