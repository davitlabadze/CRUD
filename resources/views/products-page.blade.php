@extends('layouts.main')
@section('title','All Products')
@section('content')

<div class="card text-center"></div>
    <div class="card-header">
        <h3>All Products</h3>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            
            <form action="">
                <tr>
                    <th><input type="number" name="id"       value="{{ request('id') }}"placeholder="Enter ID"class="form-control"></th>
                    <th><input type="text"   name="name"     value="{{ request('name') }}"placeholder="Enter Name" class="form-control"></th>
                    <th><input type="text"   name="category" value="{{ request('category') }}"placeholder="Enter category" class="form-control"></th>
                    <th><input type="number" name="price"    value="{{ request('price') }}"placeholder="Enter Price" class="form-control"></th>
                    <th><input type="number" name="sale"     value="{{ request('sale') }}"placeholder="Enter Sale" class="form-control"></th>
                    <th><input type="number" name="stock"     value="{{ request('stock') }}"placeholder="Enter stock" class="form-control"></th>
                    <th><button class="btn btn-primary">filter</button></th>
                    <th colspan="2"><a href="{{ route('products.index') }}" type="reset" class="btn btn-danger">clear</a></th>
                </tr>
            </form>
           

            <thead class="thead-dark">
                <th>ID</th>
                <th>Name</th>
                <th>category</th>
                <th>Price</th>
                <th>Sale</th>
                <th>stock</th>
                <th>Date </th>
                <th colspan="2">Actions</th>
            </thead>
            <tbody>
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <tr>
                        <td colspan="2"><input type="text" required  name="name" class="form-control"/></td>
                        <td ><input type="text"  required name="category" class="form-control"/></td>
                        <td><input type="number" required name="price" class="form-control"/></td>
                        <td><input type="number" required name="sale" class="form-control"/></td>
                        <td><input type="number" required name="stock" class="form-control"/></td>
                        <td><button class="btn btn-success">add</button></td>
                        <td>delete</td>
                        <td>edit</td>
        
                    </tr>
                </form>
                
            </tbody>
        
        
            @foreach ($products as $pr )
                <tr>
                    <td>{{$pr->id}}</td>
                    <td>{{$pr->name}}</td>
                    <td>{{$pr->category}}</td>
                    <td>{{$pr->price}}</td>
                    <td>{{$pr->sale}}</td>
                    <td>{{$pr->stock}}</td>
                    <td>{{$pr->created_at}}</td>
                
                    <td>
                        <form action="{{ route('products.destroy', ['product' => $pr->id]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger">delete</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('products.edit',['product'=>$pr->id])}}">
                            @csrf
                            <button class="btn btn-light">edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection