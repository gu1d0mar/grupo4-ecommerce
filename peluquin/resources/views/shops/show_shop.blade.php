@extends('layouts.app')
@section('title') {{$shop->name}} @endsection
@section('content')
  <div class="container">
      <div class="row">
        <div class="col-12 col-md-9">
          <div class="card mb-3 pt-2">
            <div class="row no-gutters pb-3">
              <div class="col-md-4 col-lg-3 m-auto pt-1">
                <img src="{{$shop->logo ? Storage::url($shop->logo) : asset('/img/defaultLogo.png')}}" class="img-fluid" alt="{{$shop->name}}">
              </div>
              <div class="col-md-8">
                <div class="card-body py-0">
                  <h3 class="card-title">{{$shop->name}}</h3>
                  <h6 class="card-subtitle mb-2 text-muted">{{$shop->nbhd->name}}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">
                    @for($i=0; $i<$shop->stars; $i++)
                      <i class="fas fa-star"></i>
                    @endfor
                    @if($dif=5-$shop->stars)
                      @for($i=0;$i<$dif;$i++)
                        <i class="far fa-star"></i>
                      @endfor
                    @endif
                  </h6>
                  <a href="producto.php" class="btn btn-primary btn-block">Reservar</a>
                  <p class="card-text mt-2 lead"></p>
                  <p class="card-text"><a href="#"><i class="fas fa-map-marker-alt"></i>{{" " . $shop->address}}</a></p>
                </div>
              </div>
            </div>
            @if (count($shop->products)>=0)
            <div class="row no-gutters">
              <div class="card-body col-12 pb-0">
                <div class="card-header">
                  <h4 class="card-subtitle"><i class="fas fa-cut"></i> Servicios</h4>
                </div>
                <div class="list-group list-group-flush">
                  <ul>

                  @foreach ($shop->products as $product)
                    <a href="{{ url('/cart/add/'.$product->id) }}" class="list-group-item list-group-item-action">
                      <li class="d-flex w-100 justify-content-between">
                        {{$product->name}}
                        <small class="text-muted">{{"$" . $product->price}}</small>
                      </li>
                    </a>
                  @endforeach
                  </ul>
                </div>
              </div>
              @if ($shop->user_id == Auth::user()->id)
                <a href="{{ route('products.create',['shop_id'=>$shop->id])}}" class="list-group-item list-group-item-action bg-dark">
                  <li class="d-flex w-100 justify-content-between text-light">
                    Agregar Productos o Servicios
                  </li>
                </a>
              @endif
            </div>
          @endif
          </div>
          @auth
            @if ($shop->user_id == Auth::user()->id)
              <form class="form-inline mt-2 mt-md-0" action="{{route('shops.delete')}}" method="post">
                @method('DELETE')
                @csrf
                <input type="hidden" name="id" value="{{$shop->id}}">
                <button class="btn btn-success my-2 mx-2" type="submit" formaction="{{route('shops.edit',['id'=>$shop->id])}}" formmethod="get">Editar Local</button>
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Eliminar Local</button>
              </form>
            @endif
          @endauth
        </div>
        <div class="col-md-3">
          @auth
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Deja tu comentario</h5>

            <form method="post" action="{{ route('comments.add') }}">

              @csrf

              <input type="hidden" name="shop_id" value="{{$shop->id}}">
              <label class="text-muted card-text">{{ __('Rating') }}</label>
              <div class="form-group" >
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio2" value="2">
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="3">
                <label class="form-check-label" for="inlineRadio3">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio4" value="4">
                <label class="form-check-label" for="inlineRadio5">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rating" id="inlineRadio5" value="5">
                <label class="form-check-label" for="inlineRadio5">5</label>
              </div>
            </div>

                <div class="form-group">
                <div class="text-center">
                  <textarea id="comment" class="form-control @error('comment') is-invalid @enderror" name="comment" placeholder="Deja tu comentario" rows="4" required autocomplete="comment" autofocus></textarea>

                    @error('comment')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>


              <div class="form-group">
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Enviar mensaje') }}
                  </button>
                </div>
              </div>

            </div>
          </div>
        </form>
        @endauth
        @if (count($comments)>0)

        <h4 class="card-title">Reseñas</h4>
          @foreach ($comments as $comment)
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">{{$comment->user->username}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">
                @for($i=0; $i<$comment->stars; $i++)
                  <i class="fas fa-star"></i>
                @endfor
                @if($dif=5-$comment->stars)
                  @for($i=0;$i<$dif;$i++)
                    <i class="far fa-star"></i>
                  @endfor
                @endif
              </h6>
              <p class="card-text">{{$comment->comment}}</p>
            </div>
          </div>
        @endforeach
      @endif
        </div>
      </div>
    </div>
@endsection
