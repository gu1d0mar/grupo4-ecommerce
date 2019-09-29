@extends('layouts.app')
@section('title') All Information About Products @endsection
@section('content')

  <h1>All Information About Products</h1>

  @foreach ($products as $product)
    <li> {{ $product}} </li>
  @endforeach

  <h1>Only Names Of Products</h1>

  @foreach ($products as $product)
    <li> {{$product->name}} </li>
  @endforeach

  <h1>Only Description Of Products</h1>
  @foreach ($products as $product)
    <li> {{ $product->description}} </li>
  @endforeach

  <h1>Only Category Of Products</h1>
  @foreach ($products as $product)
    <li> {{ $product->category_id}} </li>
  @endforeach

  <h1>Only Shop Of Products</h1>
  @foreach ($products as $product)
    <li> {{ $product->category_id}} </li>
  @endforeach

  <h1>Only Price Of Products</h1>
  @foreach ($products as $product)
    <li> {{ $product->price}} </li>
  @endforeach
@endsection
