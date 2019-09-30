@extends('layouts.app')
@section('title') Home @endsection
@section('content')

  <div class="jumbo p-4 p-md-5 text-white text-center">
      <div class="row">
        <div class="col-md-12 px-0">
          <h1 class="display-3">Peluca & Peluquin</h1>
        </div>
      </div>

      <section class="search-sec">
        <form action="{{ route('shops.search') }}" method="get">
          <div class="row">
            <div class="col-lg-12">
              <div class="row searchg">
                <div class="col-md-2 col-sm-12 p-0">
                  <select class="form-control search-inp m-md-0" name="nbhd">
                    <option value="">Introduzca Localidad</option>
                    @foreach ($nbhds as $nbhd)
                      <option {{$nbhd->name == $nbhd->id ? 'selected':''}} value="{{$nbhd->id}}">{{$nbhd->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-2 col-sm-12 p-0">
                  <select class="form-control search-inp m-md-0" name="category">
                    <option value="">Introduzca Categoria</option>
                    @foreach ($categories as $category)
                      <option {{$category->name == $category->id ? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-2 col-sm-12 p-0">
                  <input type="text" class="form-control search-inp m-md-0" name="search" placeholder="Introduzca Servicio">
                </div>
                <div class="col-md-3 col-sm-12 p-0">
                  <button type="submit" class="btn btn-primary search-btn">Buscar</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </section>

    </div>

<div class="container">

  <div class="recomend">
    <div class="text-center">
      <h2>Lo mejor para vos</h2>
      <p>Reserva online facil y rapido. Los mejores locales y profesionales te esperan</p>
    </div>
    <div class="row text-center mt-3">
      @foreach ($shops as $shop)
        <div class="col-md-4 mt-3">
          <a href="producto.php"><img src="{{$shop->logo ? Storage::url($shop->logo) : asset('/img/defaultLogo.png')}}" alt="{{$shop->name}}" class="rounded-circle" width="200" height="200"></a>
          <h2>{{$shop->name}}</h2>
          <a class="btn btn-secondary" href="{{route('shops.show',['id'=>$shop->id])}}" role="button">Ver servicios</a>
        </div>
      @endforeach
    </div>
  </div>

  <hr class="divider">

  <div class="row info">
    <div class="col-md-7 order-md-2 info-text text-center mx-auto">
      <h2 class="featurette-heading">Reserva lo que quieras, donde quieras, cuando quieras</h2>
      <p class="lead">Queremos facilitarte la vida, y queremos verte bien, asi que ingresa la direccion y decinos lo que queres, y blablablablabala </p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
    </div>
  </div>

  <hr class="divider">

  <div class="resena">
    <div class="text-center mb-5">
      <h2>La opinion de nuestros usuarios</h2>
    </div>

    <div class="row">

      @foreach ($comments as $comment)
      <div class="col-md-3">
        <div class="card mb-3">
          <div class="card-body p-2 text-center" style="max-height:400px; overflow:scroll">
              <img src="{{$comment->user->avatar ? Storage::url($comment->user->avatar) : asset('/img/defaultAvatar.png')}}" alt="usuario" class="card-img pb-2 rounded-circle w-50 h-50">
              <p class="card-text"><small class="text-muted">{{$comment->user->username}}</small></p>
              <p class="mb-2">
                @for($i=0; $i<$comment->stars; $i++)
                  <i class="fas fa-star"></i>
                @endfor
                @if($dif=5-$comment->stars)
                  @for($i=0;$i<$dif;$i++)
                    <i class="far fa-star"></i>
                  @endfor
                @endif
              </p>
              <p class="card-text">{{$comment->comment}}</p>
              <a href="{{route('shops.show',['id'=>$comment->shop->id])}}"><small class="text-muted">{{$comment->shop->name}}</small></a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>

  <hr class="divider">

  <div class="unite text-center">
    <div class="row">
      <div class="col-md-5  info-text mx-auto">
        <h2 class="featurette-heading">Unite a la comunidad P&P</h2>
        <p class="lead">Tenes ganas de brindar tus servicios, o conoces a alguien que quiera hacerlo? </p>
        <a class="btn btn-secondary" href="{{route('shops.create')}}" role="button">Apreta aca</a>
      </div>
    </div>
    <div class="col-md-5 order-md-1 mx-auto">
      <img src="{{asset('/img/peluquinLogo.png')}}" alt="Logo Peluquin" class="img-fluid mx-auto" width="300" height="300">
    </div>
  </div>

    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
