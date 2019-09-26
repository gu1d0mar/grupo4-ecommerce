@extends('layouts.app')
@section('title') {{$shop->name}} @endsection
@section('content')
  <div class="container">
      <div class="row">
        <div class="col-12 col-md-9 pb-0">
          <div class="card mb-3">
            <div class="row no-gutters">
              <div class="col-md-4 col-lg-3 h-75 w-75 m-auto">
                <img src="img/depilation.jpg" class="img-fluid" alt="depilacion">
              </div>
              <div class="col">
                <div class="card-body pb-0">
                  <h3 class="card-title"><a href="producto.php">{{$shop->name}} </a></h3>
                  <h6 class="card-subtitle mb-2 text-muted">{{$shop->nbhd}}</h6>
                  <a href="producto.php" class="btn btn-primary btn-block">Reservar</a>
                  <p class="card-text mt-2 lead">Pequeña descripcion del lugar, servicios que ofrece, cosas que hace, etc.</p>
                  <p class="card-text"><a href="#"><i class="fas fa-map-marker-alt"></i>{{$shop->address}}</a></p>
                </div>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="card-body col-12 pb-0">
                <div class="card-header">
                  <h4 class="card-subtitle"><i class="fas fa-cut"></i> Servicios</h4>
                </div>
                <div class="list-group list-group-flush">
                  <a href="carrito.php" class="list-group-item list-group-item-action">
                    <li class="d-flex w-100 justify-content-between">
                      Corte
                      <small class="text-muted">$300</small>
                    </li>
                  </a>
                  <a href="carrito.php" class="list-group-item list-group-item-action">
                    <li class="d-flex w-100 justify-content-between">
                      Corte
                      <small class="text-muted">$300</small>
                    </li>
                  </a>
                  <a href="carrito.php" class="list-group-item list-group-item-action">
                    <li class="d-flex w-100 justify-content-between">
                      Corte
                      <small class="text-muted">$300</small>
                    </li>
                  </a>
                </div>
                <div class="card-header">
                  <h4 class="card-subtitle"><i class="fas fa-paw"></i> Servicios</h4>
                </div>
                <div class="list-group list-group-flush">
                  <a href="carrito.php" class="list-group-item list-group-item-action">
                    <li class="d-flex w-100 justify-content-between">
                      Corte
                      <small class="text-muted">$300</small>
                    </li>
                  </a>
                  <a href="carrito.php" class="list-group-item list-group-item-action">
                    <li class="d-flex w-100 justify-content-between ">
                      Corte
                      <small class="text-muted">$300</small>
                    </li>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Reseñas</h5>
              <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  </p>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Reseñas</h5>
              <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  </p>
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">Reseñas</h5>
              <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></h6>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
