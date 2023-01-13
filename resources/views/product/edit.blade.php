@extends('layouts.app')

@section('content')

<h1>Edit</h1>
<img height="400" src="{{ $product['imageUrl'] }}">
<hr/>
<form method="post" action="{{route('products.update',['product' => $product['id']])}}">
    @csrf
    @method('PATCH')
    <input type="text" name="title" />
    <button type="submit">Submit</button>
</form>
@endsection


