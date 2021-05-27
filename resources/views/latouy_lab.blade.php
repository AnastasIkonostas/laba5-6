<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>о</title>
    <link rel="stylesheet" href="./css/reset.css">
</head>
<body>
<div>
    <nav>
        <ul>
            <li><a href="{{ route('lab5') }}"> Пользователи</a></li>
            <li><a href="{{ route('labadd') }}"> Добавление пользователя</a></li>
            <li><a href="{{ route('lab') }}"> Магазин </a></li>
            <li><a href="{{ route('hasmanylab') }}">hasmany</a></li>
            <li><a href="{{ route('belongtomanelab') }}">belongtomany</a></li>
        </ul>
    </nav>
</div>
<form method="get" action="{{route('poisk')}}" >
    <input type="text" placeholder="поиск..." name="nam">
    <button type="submit"></button>
</form>
<br>
<br>
@yield('content');
</body>
</html>
