@extends('latouy_lab')
@section('content')
    <table>
        <thead>
        <tr>
            <td>Имя пользователя</td>
            <td>Почта пользователя</td>
            <td>Удалить</td>
        </tr>
        </thead>
        <tbody>
        @if(count($users))
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{route('labdelete')}}?id={{$user->id}}">Удалить</a></td>
                </tr>
        </tbody>
        @endforeach
        @else
            <p>Похожего имени пользователя не найдено!</p>
        @endif
    </table>
@stop
