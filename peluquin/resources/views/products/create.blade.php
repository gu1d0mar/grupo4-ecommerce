@extends('layouts.app')
@section('title') Agregar Producto @endsection
@section('content')
  <h1>Create New Product</h1>
  <div class="">
    <form method="post" action="/productsaction">
      {{ csrf_field() }}
      <div>
        <label>Product Name</label>
        <input type="text" name="name" value="Product Name">

      </div>

      <div>
        <label>Product Description</label>
        <textarea name="description" placeholder="Product Description"></textarea>

      </div>

      <div>
        <label>Product Price</label>
        <input type="text" name="price" value="Product Price">
      </div>

      <div>
        <label>Product Category</label>
        <select name="category_id">
          @foreach($categories as $category)
            <option value="{{$category->id}}">
                {{$category->name}}
            </option>
          @endforeach
        </select>

      </div>

      <div>
        <label>Product Shop</label>
        <select name="shop_id">
          @foreach($shops as $shop)
            <option value="{{$shop->id}}">
                {{$shop->name}}
            </option>
          @endforeach
        </select>

      </div>

      <div>
        <input type="submit" value="Make Product">

      </div>

    </form>

  </div>
@endsection
