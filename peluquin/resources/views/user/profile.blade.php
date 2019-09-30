@extends('layouts.app')
@section('title') User @endsection
@section('content')
<div class="container">
  <div class="row">
    <!-- Izquierda -->
    <div class="col-md-3">
      <div class="card my-3 p-2 ">
        <div class="card-img text-center">
          <h4>{{Auth::user()->getFullName() }}</h4>
          <img src="{{Auth::user()->avatar ? Storage::url(Auth::user()->avatar) : asset('/img/defaultAvatar.png')}}" alt="{{Auth::user()->username}}" class="rounded-circle w-50 h-50 ">
        </div>
        <hr>
          <p class="card-text"><i class="far fa-user"></i>{{" " . Auth::user()->username}}</p>
        @if (Auth::user()->nbhd_id)
          <p class="card-text"> <i class="fas fa-home"></i>{{" " . Auth::user()->nbhd->name}}</p>
        @endif
        @if (Auth::user()->bday)
          <p class="card-text"> <i class="fas fa-birthday-cake"></i>{{" " . Auth::user()->bday}}</p>
        @endif
        <p class="card-text"><a href="carrito.php" class="text-body"><i class="far fa-calendar-alt"></i> Mis turnos</p></a>
        <p class="card-text"><a href="{{route('user.edit')}}" class="text-body"><i class="fas fa-cog"></i> Editar Perfil</p></a>
        @if (count(Auth::user()->shops)>0)
          <h6 class="card-subtitle">Mis Locales</h6>
          <ul class="list-group">
            @foreach (Auth::user()->shops as $shop)
              <li class="list-group-item border-0 pl-0"><a href="{{route('shops.show',$shop->id)}}" class="text-body"><i class="fas fa-dollar-sign"></i>{{" ".$shop->name}}</a></li>
            @endforeach
          </ul>
        @endif
      </div>
      <div class="card mb-3 p-2 bg-secondary ">
        <ul class="list-group bg-secondary ">
          <li class="list-group-item bg-secondary border-0 pl-0 pt-1"><a href="#" class="text-white"><i class="fas fa-history"></i> Historial</a></li>
          <li class="list-group-item bg-secondary border-0 pl-0 pt-1"><a href="#" class="text-white"><i class="far fa-heart"></i> Favoritos</a></li>
          <li class="list-group-item bg-secondary border-0 pl-0 pt-1 pb-1"><a href="#" class="text-white"><i class="far fa-star"></i> Reseñas</a></li>
          <li class="list-group-item bg-secondary border-0 pl-0 pt-1 pb-1"><a href="{{route('shops.create')}}" class="text-white"><i class="far fa-star"></i> Crear Local</a></li>
        </ul>
      </div>
      <div class="card mb-3 d-md-none">
        <div class="card-header">
          <h5>Proximamente</h5>
        </div>
        <div class="card-body p-2 text-center">
            <img src="img/depilation.jpg" alt="turno" class="card-img w-75 h-75 pb-2">
            <p class="card-text">Corte en Peluqueria Don Pepito</p>
            <small class="text-muted">Martes 15 20:00</small>
        </div>
      </div>
    </div>

    <!--Centro -->
    <div class="col-md-6 col-xl-7">
      <div class="card my-3">
        <div class="card-header">
          <p class="text-muted mb-0">Dejanos tu reseña acerca del lugar al que fuiste</p>
        </div>
        <div class="card-body p-2">
          <form>
            <div class="form-group">
              <label for="exampleFormControlTextarea1"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </form>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-header">
          <p class="text-muted mb-0">Visitaste:</p>
        </div>
        <div class="card-body">
          <div class="row no-gutters">
            <div class="col-md-4 col-lg-3 h-75 w-75 m-auto">
              <img src="img/manicura.jpg" class="img-fluid" alt="manicura">
            </div>
            <div class="col">
              <div class="card-body pb-0">
                <h3 class="card-title"><a href="producto.php">Nombre del Local </a></h3>
                <h6 class="card-subtitle mb-2 text-muted">Barrio</h6>
                <p class="card-text mt-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                <small class="text-muted">Hace una semana</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Derecha -->
    <div class="col-md-3 col-xl-2">
      <div class="card my-3 d-none d-md-block">
        <div class="card-header">
          <h6>Proximamente</h6>
        </div>
        <div class="card-body p-2 text-center">
            <img src="img/depilation.jpg" alt="turno" class="card-img w-75 h-75 pb-2">
            <p class="card-text">Corte en Peluqueria Don Pepito</p>
            <small class="text-muted">Martes 15 20:00</small>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
