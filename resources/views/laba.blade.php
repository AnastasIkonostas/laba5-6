@extends('layout_laba')
@section('content')
    <table>
        <thead>
        <tr>
            <td>Id</td>
            <td>Название товара</td>
            <td>Удалить</td>
        </tr>
        </thead>
        <tbody>
        @if(count($shops))
            @foreach($shops as $shop)
                <tr>
                    <td>{{$shop->id}}</td>
                    <td>{{$shop->name}}</td>
                    <td><a href="{{route('labdeletee')}}?id={{$shop->id}}">Удалить</a></td>
                </tr>
        </tbody>
        @endforeach
        @else
            <p>Похожего названия товара не найдено!</p>
        @endif
    </table>
@stop
