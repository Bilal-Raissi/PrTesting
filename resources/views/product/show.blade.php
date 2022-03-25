@extends('product.layout');

@section('content')
<div class="card container" style="margin-top: 12%">
    <div class="card-body">
        <a href="{{ route('products.index') }}">back</a>
        <p class="card-text">Product name : {{ $product->name }}</p>
    </div>
</div>


    <div class="container" style="padding-top: 2%">
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ $product->name }}</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">{{ $product->price }}</label>
        </div>
        <div class="form-group">
            {!! $product->detail !!}
        </div>
    </div>
@endsection
