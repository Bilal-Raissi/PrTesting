@extends('product.layout');

@section('content')
<div class="card container" style="margin-top: 12%">
    <div class="card-body">
        <a href="{{ route('products.index') }}">back</a>
        <p class="card-text">Product name : {{ $product->name }}</p>
    </div>
</div>


    <div class="container" style="padding-top: 2%">
        <form action="{{ route('products.update', $product->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlInput1">Name: </label>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="product name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Price: </label>
                <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="product price">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Details: </label>
                <textarea class="form-control" name="detail" rows="3">
                    {!! $product->detail !!}
                </textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
