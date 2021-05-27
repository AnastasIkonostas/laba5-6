<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Соберу само</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/add.css">
    <link rel="stylesheet" href="./css/podverzhdenie.css">
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
<div>
    <h1>Регистрация пользователя.</h1>
    <p>Введите, пожалуйста, данные.</p>
    <form action="{{route('labapp')}}" method="get">
        <div class="input">
            <div class="blockinput">
                <i class="icon-envelope-alt"></i><input type="mail" placeholder="Електронная почта..." name="emaill">
            </div>
            <div class="blockinput">
                <i class="icon-unlock"></i><input type="text" placeholder="Имя и фамилия..." name="namee">
            </div>
        </div>
        <button>Добавить</button>
    </form>
</div>
<br>
<h6></h6>
</body>
</html>
