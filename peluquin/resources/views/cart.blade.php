@extends('layouts.app')
@section('title') Carrito @endsection
@section('content')

        <!-- Carrito -->
        <div class="row">
          <div class="col-md-8 offset-md-2 mb-2 bg-white border rounded p-3">
            <h4 class="d-flex justify-content-between align-items-center mb-3 mw-500">
              <span class="text-muted">Carrito</span>
              <span class="badge badge-secondary badge-pill">{{count(Cart::content())}}</span>
            </h4>
            <ul class="list-group mb-3">
              @foreach (Cart::content() as $product)
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h6 class="my-0">{{$product->name}}</h6>
                        <small class="text-muted">{{$product->description}}</small>
                      </div>
                      <div class="">

                      <span class="text-muted mr-2">${{$product->price}}</span>
                      <a href="{{ url('/cart/remove/' .$product->id) }}"> x </a>
                    </div>
                </li>
              @endforeach
              <li class="list-group-item d-flex justify-content-between">
                <span>Total</span>
              <strong>{{Cart::total()}}</strong>
              </li>
            </ul>
            <form>
              <a href="" class="btn btn-primary btn-lg btn-block my-2">Finalizar compra</a>
              <p class="text-center mt-2 "><a href="{{route('shops')}}" class="text-secondary">Seguir comprando</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
