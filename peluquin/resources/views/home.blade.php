@extends('layouts.app')
@section('title') Home @endsection
@section('content')

  <div class="jumbo p-4 p-md-5 text-white text-center">
      <div class="row">
        <div class="col-md-12 px-0">
          <h1 class="display-3">Peluca & Peluquin</h1>
          <p class="lead my-3">Comodidad y bienestar</p>
        </div>
      </div>

      <section class="search-sec">
        <form action="{{ route('shops.search') }}" method="get">
          <div class="row">
            <div class="col-lg-12">
              <div class="row searchg">
                <div class="col-md-3 col-sm-12 p-0">
                  <select class="form-control search-inp m-md-0" name="nbhd">
                    <option value="">Introduzca Localidad</option>
                    @foreach ($nbhds as $nbhd)
                      <option {{$nbhd->name == $nbhd->id ? 'selected':''}} value="{{$nbhd->id}}">{{$nbhd->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-3 col-sm-12 p-0">
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
    <div class="row text-center">
      <div class="col-md-4">
        <a href="producto.php"><img src="img/depilation.jpg" alt="depilation" class="rounded-circle" width="200" height="200"></a>
        <h2>Nombre del local</h2>
        <a class="btn btn-secondary" href="producto.php" role="button">Ver servicios</a>
      </div>
      <div class="col-md-4">
        <a href="producto.php"><img src="img/manicura.jpg" alt="manicura" class="rounded-circle" width="200" height="200"></a>
        <h2>Nombre del local</h2>
        <a class="btn btn-secondary" href="producto.php" role="button">Ver servicios</a>
      </div>
      <div class="col-md-4">
        <a href="producto.php"><img src="img/peluqueria.jpg" alt="peluqueria" class="rounded-circle" width="200" height="200"></a>
        <h2>Nombre del local</h2>
        <a class="btn btn-secondary" href="producto.php" role="button">Ver servicios</a>
      </div>
    </div>
  </div>

  <hr class="divider">

  <div class="row info">
    <div class="col-md-7 order-md-2 info-text">
      <h2 class="featurette-heading">Reserva lo que quieras, donde quieras, cuando quieras</h2>
      <p class="lead">Queremos facilitarte la vida, y queremos verte bien, asi que ingresa la direccion y decinos lo que queres, y blablablablabala </p>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="img/amigos.jpg" alt="m" class="img-fluid mx-auto" width="100%" height="100%">
    </div>
  </div>

  <hr class="divider">

  <div class="resena">
    <div class="text-center">
      <h2>La opinion de nuestros usuarios</h2>
    </div>

    <div class="row">
      <div class="col-md-3">
        <div class="card mb-3">
          <div class="card-body p-2 text-center">
              <img src="img/batman.jpg" alt="usuario" class="card-img pb-2 rounded-circle w-50 h-50">
              <p class="card-text"><small class="text-muted">Brunito</small></p>
              <p class="mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
              <p class="card-text">Persona diciendo que la pagina esta buenisima y blabla</p>
              <small class="text-muted">Nombre del local al que fue</small>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-3">
          <div class="card-body p-2 text-center">
            <img src="img/batman.jpg" alt="usuario" class="card-img pb-2 rounded-circle w-50 h-50">
            <p class="card-text"><small class="text-muted">Brunito</small></p>
            <p class="mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
            <p class="card-text">Persona diciendo que la pagina esta buenisima y blabla</p>
            <small class="text-muted">Nombre del local al que fue</small>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-3">
          <div class="card-body p-2 text-center">
              <img src="img/batman.jpg" alt="usuario" class="card-img pb-2 rounded-circle w-50 h-50">
              <p class="card-text"><small class="text-muted">Brunito</small></p>
              <p class="mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
              <p class="card-text">Persona diciendo que la pagina esta buenisima y blabla</p>
              <small class="text-muted">Nombre del local al que fue</small>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card mb-3">
          <div class="card-body p-2 text-center">
              <img src="img/batman.jpg" alt="usuario" class="card-img pb-2 rounded-circle w-50 h-50">
              <p class="card-text"><small class="text-muted">Brunito</small></p>
              <p class="mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
              <p class="card-text">Persona diciendo que la pagina esta buenisima y blabla</p>
              <small class="text-muted">Nombre del local al que fue</small>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr class="divider">

  <div class="unite text-center">
    <div class="row">
      <div class="col-md-5 order-md-2 info-text">
        <h2 class="featurette-heading">Unite a la comunidad P&P</h2>
        <p class="lead">Tenes ganas de brindar tus servicios, o conoces a alguien que quiera hacerlo? </p>
        <a class="btn btn-secondary" href="faq.php" role="button">Apreta aca</a>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/manicura2.png" alt="m" class="img-fluid mx-auto" width="300" height="300">
      </div>
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
