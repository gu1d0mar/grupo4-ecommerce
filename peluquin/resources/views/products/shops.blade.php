@extends('layouts.app')
@section('title') Shops @endsection
@section('content')
  <ul class="list-group">
      @foreach($shops as $shop)
        <div class="card mb-2">
          <div class="card-body">
            <h5 class="card-title">{{$shop->name}} </h5>
         </div>
        </div>
      @endforeach
    </ul>
    {{$shops->links()}}
@endsection
