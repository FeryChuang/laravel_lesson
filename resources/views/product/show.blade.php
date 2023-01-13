@extends('layouts.app')

@section('content')

<h1>{{$product['name']}}</h1>
<img height="400" src="{{ $product['imageUrl'] }}">
<div style="margin: 36px 0;">
    <p style="font-size: 30px;">price: {{$product['price']}}</p>
    <input type="number" name="quantity" min="1" value="1"/>
    <button type="button" id="addToCart">Add to cart</button>
    <br/>
    <a href="../cart">Cart</a>
    <br/>
    <a href="../products">back to Product List</a>
</div>


@endsection


@section('inline_js')
    @parent
    <script>
        var productId = "{{ $product['id'] }}"
        initAddToCart(productId)
    </script>


@endsection
