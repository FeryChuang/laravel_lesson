@extends('layouts.app')

@section('content')

<h1>Create</h1>
<form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label>
            product name:<input type="text" name="product_name" value="{{ old('product_name')}}" />
        </label>
    </div>
    <div>
        <label>
            product price:<input type="numver" name="product_price" value="{{ old('product_price')}}" />
        </label>
    </div>
    <div>
        <label>
            product image:<input type="file" name="product_image" />
        </label>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
@endsection

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
