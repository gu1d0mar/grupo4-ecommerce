@extends('layouts.app')
@section('title') Shops @endsection
@section('content')
  <div class="container">
    <!-- Filtros -->

    <!-- Filtros sm -->
    <div class="row justify-content-center d-sm-none mt-2">
      <div class="col">
        <div class="dropdown mb-2">
          <button class="btn btn-secondary w-100 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Filtros
          </button>
          <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Filtro 1</a>
            <hr>
            <a class="dropdown-item" href="#">Filtro 2</a>
            <hr>
            <a class="dropdown-item" href="#">Filtro 3</a>
            <hr>
            <a class="dropdown-item" href="#">Filtro 4</a>
            <hr>
            <a class="dropdown-item" href="#">Filtro 5</a>
            <hr>
            <a class="dropdown-item" href="#">Filtro 6</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Filtros md -->
    <div class="row">
      <ul class="nav flex-column col d-none d-sm-block pl-3 ml-2 mt-2 rounded bg-white">
        <li class="nav-item pb-2 border-bottom d-none d-lg-block">
          <form class="form-inline pt-2">
            <div class="input-group w-100">
              <input class="form-control col" type="search" placeholder="Search" aria-label="Search">
              <button type="button" class="btn btn-secondary col-2" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </form>
        </li>

        <li class="nav-item pt-2 pb-2 border-bottom">
          <div class="form-check">
            <label class="form-check-label" for="defaultCheck1">
              Filtro 1
            </label>
            <input class="form-check-input ml-2" type="checkbox" value="" id="defaultCheck1">
          </div>
        </li>
        <li class="nav-item pt-2 pb-2 border-bottom">
          <div class="form-check">
            <label class="form-check-label" for="defaultCheck1">
              Filtro 2
            </label>
            <input class="form-check-input ml-2" type="checkbox" value="" id="defaultCheck1">
          </div>
        </li>
        <li class="nav-item pt-2 pb-2 border-bottom">
          <div class="form-check">
            <label class="form-check-label" for="defaultCheck1">
              Filtro 3
            </label>
            <input class="form-check-input ml-2" type="checkbox" value="" id="defaultCheck1">
          </div>
        </li>
        <li class="nav-item pt-2 pb-2 border-bottom">
          <div class="form-check">
            <label class="form-check-label" for="defaultCheck1">
              Filtro 4
            </label>
            <input class="form-check-input ml-2" type="checkbox" value="" id="defaultCheck1">
          </div>
        </li>
        <li class="nav-item pt-2 pb-2 border-bottom">
          <div class="form-check">
            <label class="form-check-label" for="defaultCheck1">
              Filtro 5
            </label>
            <input class="form-check-input ml-2" type="checkbox" value="" id="defaultCheck1">
          </div>
        </li>
        <li class="nav-item pt-2 pb-2 border-bottom">
          <div class="form-check">
            <label class="form-check-label" for="defaultCheck1">
              Filtro 6
            </label>
            <input class="form-check-input ml-2" type="checkbox" value="" id="defaultCheck1">
          </div>
        </li>
      </ul>
      <div class="col-10 offset-1 offset-sm-0 ml-sm-auto mt-sm-2 col-lg-9">
      @foreach($shops as $shop)
        <div class="card mb-3">
          <div class="row no-gutters">
            <div class="col-md-4 col-lg-3 col-xl-2 align-content-center">
              <img src=" {{-- {{ Storage::url($shop->logo) }} --}} " class="card-img m-auto" alt="{{$shop->name}}">
            </div>
            <div class="col-md-8 col-lg-9 col-xl-10">
              <div class="card-body">
                <h5 class="card-title"><a href="{{route('shops.show',['id'=>$shop->id])}}">{{$shop->name}}</a></h5>
                <h6 class="card-subtitle mb-2 text-muted">Barrio {{--{{$shop->area}}--}} </h6>
                <a href=" {{--{{route('shops.show',['id'=>$shop->id])}}--}} " class="btn btn-secondary">Servicios</a>
                <a href="producto.php" class="btn btn-primary">Reservar</a>
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
