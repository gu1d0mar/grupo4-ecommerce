@extends('layouts.app')
@section('title') Servicios @endsection
@section('content')
  <div class="container">
    <!-- Filtros sm -->
    <div class="row justify-content-center d-lg-none">
      <div class="col">
        <form class="form-inline my-2" action="{{ route('shops.search') }}" method="get">
          <div class="input-group w-100">
            <input class="form-control col-10 rounded" type="text" name="search" placeholder="Buscar" aria-label="Search">
            <button type="submit" class="btn btn-secondary col-2 ml-lg-1">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="row justify-content-center d-sm-none">
      <div class="col">
        <div class="dropdown mb-2">
          <button class="btn btn-secondary w-100 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Filtros
          </button>
          <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
            <ul class="nav flex-column dropdown-item">
              <li class="nav-item">
                <a class="nav-link border-bottom" href="#">
                  Peluqueria
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-bottom" href="#">
                  Manicura
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-bottom" href="#">
                  Barberia
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-bottom" href="#">
                  Maquillaje
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-bottom" href="#">
                  Productos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Promociones
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Filtros md -->

    <div class="row">
      <nav class="col-2 col-lg-3 d-none d-md-block bg-light sidebar rounded my-2 bg-white">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item pb-2 border-bottom d-none d-lg-block">
              <form class="form-inline pt-2" action="{{ route('shops.search') }}" method="get">
                <div class="input-group w-100">
                  <input class="form-control col-10 rounded" type="text" name="search" placeholder="Buscar" aria-label="Search">
                  <button type="submit" class="btn btn-secondary col-2 ml-lg-1">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
            @foreach ($categories as $category)
              @if($category->products->count()>0)
              <li class="nav-item">
                <a class="nav-link border-bottom" href="{{ route('shops.search',['category'=>$category->id]) }}">
                  {{$category->name . " (" . $category->products->count()  . ")"}}
                </a>
              </li>
              @endif
            @endforeach
            <li class="nav-item">
              <a class="nav-link border-bottom" href="#">
                Promociones
              </a>
            </li>
          </ul>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-3 mb-1 text-muted">Barrios</h6>
          <ul class="nav flex-column mb-3">
            @foreach ($nbhds as $nbhd)
              @if(count($nbhd->shops)>0)
              <li class="nav-item">
                <a class="nav-link border-bottom" href="{{ route('shops.search',['nbhd'=>$nbhd->id]) }}">
                  {{$nbhd->name . " (" . $nbhd->shops->count()  . ")"}}
                </a>
              </li>
              @endif
            @endforeach
          </ul>
        </div>
      </nav>

      <div class="col-10 col-lg-9 offset-1 offset-sm-0 ml-sm-auto mt-sm-2 ">
      @foreach($shops as $shop)
        @if (count($shop->products)>=0)
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4 col-lg-3 m-auto pt-1">
              <img src="{{$shop->logo ? Storage::url($shop->logo) : asset('/img/defaultLogo.png')}}" class="card-img m-auto" alt="{{$shop->name}}">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><a href="{{route('shops.show',['id'=>$shop->id])}}">{{$shop->name}}</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$shop->nbhd->name}} </h6>
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
                <a href="{{route('shops.show',['id'=>$shop->id])}}" class="btn btn-primary my-2">Servicios</a>
                <p class="card-text d-none d-lg-block"><small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i>{{ " " . $shop->address}}</a></small></p>
              </div>
            </div>
          </div>
          <div class="row-no-gutters card-body">
              <h5 class="card-subtitle mb-2">Servicios recomendados:</h5>
              <div class="list-group list-group-flush">
                @foreach ($shop->products as $product)
                  <a href="{{ url('cart/add/'.$product->id) }}" class="list-group-item list-group-item-action">
                    <li class="d-flex w-100 justify-content-between">
                      {{$product->name}}
                      <small class="text-muted">{{"$" . $product->price}}</small>
                    </li>
                  </a>
                @endforeach
              </div>
            </div>

          <div class="card-footer d-lg-none">
            <small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i>{{$shop->address}}</a></small>
          </div>
        </div>
        @endif
        @endforeach
      </div>
    </div>
    <div class="row mt-3">
      {{$shops->links()}}
    </div>
  </div>
@endsection
