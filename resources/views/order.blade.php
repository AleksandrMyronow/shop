@extends('layouts.main')
@section('content')
    <form action="/order_final/">
        <div><input type="text" name="customer_name" class="form-control"/></div>
        <div><input type="text" name="phone_number" class="form-control"/></div>
        <div><input type="text" name="city" class="form-control"/></div>
        <div><input type="text" name="email" class="form-control"/></div>
        <div><textarea class="form-control" name="comment"/></div>
        <div><input type="number" name="amount" class="form-control"/></div>

        <input type="hidden" value="{{$good->id}}" name="product_id"/>
        <input type="submit" value="Order" class="btn btn-success"/>
    </form>
@endsection