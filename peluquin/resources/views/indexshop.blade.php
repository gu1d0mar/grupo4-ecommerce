@extends('layouts.app')
@section('title') All Information About Shops @endsection
@section('content')

  <h1>All Information About Shops</h1>

  @foreach ($shops as $shop)
    <li> {{ $shop}} </li>
  @endforeach

  <h1>Only Email Of Shops</h1>

  @foreach ($shops as $shop)
    <li> {{$shop->email}} </li>
  @endforeach

  <h1>Only Name Of Shops</h1>
  @foreach ($shops as $shop)
    <li> {{ $shop->name}} </li>
  @endforeach

  <h1>Only Work Hours Of Shops</h1>
  @foreach ($shops as $shop)
    <li> {{ $shop->work_hours}} </li>
  @endforeach

  <h1>Only Address Of Shops</h1>
  @foreach ($shops as $shop)
    <li> {{ $shop->address}} </li>
  @endforeach

  <h1>Only Password Of Shops</h1>
  @foreach ($shops as $shop)
    <li> {{ $shop->price}} </li>
  @endforeach
@endsection
