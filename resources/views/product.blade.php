@extends('layouts.main')
@section('content')
        <p>
            <p>{{$good->name}}</p>
            <p>{{$good->description}}</p>
            <p>UAH {{$good->price}}</p>
        </p>
        <form action="/order/{{$good->id}}">
            <input type="submit" value="Order" class="btn btn-success">
        </form>
@endsection