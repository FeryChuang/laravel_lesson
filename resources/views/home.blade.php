@extends('layouts.app')

@section('content')
<main id="home">
    <h1>home page</h1>
    <div class="card">
        <p class="title">title</p>
        <div class="description">
            <a href="./products">Products</a>
            <a href="./cart">Cart</a>
            <p>description description</P>
        </div>
    </div>
    <br/>
    <P>outside~</P>
    <div id="main"></div>
</main>
@endsection

@section('inline-js')
    @parent
    
@endsection



