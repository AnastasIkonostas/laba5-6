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

<br>
<br>
<table>
    <thead>
    <tr>
        <td>Название товара</td>
    </tr>
    </thead>
    <tbody>
    @if(count($users))
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
            </tr>
    </tbody>
    @endforeach
    @else
        <p>Похожего имени пользователя не найдено!</p>
    @endif
</table>
</body>
</html>
