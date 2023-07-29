<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/sass/app.scss')
    <title>@yield('title')|Laravel</title>
</head>
<header>
    <div class="container flex">
        <a class="logo" href="{{ route('product.index') }}"><span>laravel</span> market</a>
        <nav>
            <ul class="header-top flex">
                <a href="#">アカウント </a>
                <a class="fas fa-shopping-cart" href="{{route('cart.index')}}"></a>
            </ul>
        </nav>
    </div>
</header>
<body>

@yield('content')

@yield('book')

</body>
</html>