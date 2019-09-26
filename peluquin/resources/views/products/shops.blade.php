@extends('layouts.app')
@section('title') Servicios @endsection
@section('content')
  <div class="container">
    <!-- Filtros sm -->
    <div class="row justify-content-center d-lg-none">
      <div class="col">
        <form class="form-inline my-2">
          <div class="input-group w-100">
            <input class="form-control col-10 rounded" type="search" placeholder="Buscar" aria-label="Search">
            <button type="button" class="btn btn-secondary col-2 ml-lg-1">
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
              <form class="form-inline pt-2">
                <div class="input-group w-100">
                  <input class="form-control col-10 rounded" type="search" placeholder="Buscar" aria-label="Search">
                  <button type="button" class="btn btn-secondary col-2 ml-lg-1">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
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
              <a class="nav-link border-bottom" href="#">
                Promociones
              </a>
            </li>
          </ul>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center mt-3 mb-1 text-muted">Barrios</h6>
          {{-- Foreach --}}

        </div>
      </nav>

      <div class="col-10 col-lg-9 offset-1 offset-sm-0 ml-sm-auto mt-sm-2 ">
      @foreach($shops as $shop)
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4 col-lg-3 col-xl-2 align-content-center">
              <img src=" {{-- {{ Storage::url($shop->logo) }} --}} " class="card-img m-auto" alt="{{$shop->name}}">
            </div>
            <div class="col-md-8 col-lg-9 col-xl-10">
              <div class="card-body">
                <h5 class="card-title"><a href="{{route('shops.show',['id'=>$shop->id])}}">{{$shop->name}}</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$shop->nbhd}} </h6>
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
          <div class="card-footer d-lg-none">
            <small class="text-muted"><a href="#"><i class="fas fa-map-marker-alt"></i>{{$shop->address}}</a></small>
          </div>
        </div>
              {{-- <div class="card mb-2">
                <div class="card-body">
                  <h5 class="card-title">{{$shop->name}} </h5>
               </div>
              </div> --}}
        @endforeach
      </div>
    </div>
    <div class="row mt-3">
      {{$shops->links()}}
    </div>
  </div>
@endsection
