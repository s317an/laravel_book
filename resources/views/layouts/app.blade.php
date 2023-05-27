<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/sass/app.scss')
    <title>@yield('title')|Laravel</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('product.index') }}">ホーム</a>
            <a class="fas fa-shopping-cart" href="#"></a>
        </div>
    </nav>

@yield('content')

</body>
</html>