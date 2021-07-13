@extends('layouts.main')


@section('title','edit product')
    

@section('content')
<div class="card"></div>
    <div class="card-header">
        <h3>edit product</h3>
    </div>

    <form action="{{ route('products.update',['product' => $product->id]) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">

        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>name</label>
                <input class="form-control" type="text" name="name"  value="{{ $product->name }}" placeholder="Enter name">
                
                <div class="form-group"> 
                    <label>price</label>
                    <input class="form-control" type="number" name="price"  value="{{ $product->price }}" placeholder="Enter price">
                </div>

                <div class="form-group">
                    <label>stock</label>
                    <input class="form-control" type="number" name="stock"  value="{{ $product->stock }}" placeholder="Enter stock">
                </div>

                <div class="form-group">
                    <label>sale</label>
                    <input class="form-control" type="number" name="sale"  value="{{ $product->sale }}" placeholder="Enter sale">
                </div>

                <div class="form-group">
                    <label>category</label>
                    <input class="form-control" type="text" name="category" p value="{{ $product->category }}" laceholder="Enter category">
                </div>
            </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-success">update</button>
        </div>
    </form>
</div> 
@endsection