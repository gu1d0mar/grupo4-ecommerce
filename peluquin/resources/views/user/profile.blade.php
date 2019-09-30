@extends('layouts.app')
@section('title') User @endsection
@section('content')
<div class="container">
  <div class="row">
    <!-- Izquierda -->
    <div class="col-md-3">
      <div class="card my-3 p-2 ">
        <div class="card-img text-center mx-auto">
          <h4>{{Auth::user()->getFullName() }}</h4>
          <img src="{{Auth::user()->avatar ? Storage::url(Auth::user()->avatar) : asset('/img/defaultAvatar.png')}}" alt="{{Auth::user()->username}}" class="rounded-circle w-50 h-50 ">
        </div>
        <hr>
        @if (Auth::user()->avatar)
          <p class="card-text"><a href="{{route('user.editAvatar')}}" class="text-body"><i class="fas fa-cog"></i> Cambiar Avatar</p></a>
        @endif
          <p class="card-text"><i class="far fa-user"></i>{{" " . Auth::user()->username}}</p>
        @if (Auth::user()->nbhd_id)
          <p class="card-text"> <i class="fas fa-home"></i>{{" " . Auth::user()->nbhd->name}}</p>
        @endif
        @if (Auth::user()->bday)
          <p class="card-text"> <i class="fas fa-birthday-cake"></i>{{" " . Auth::user()->bday}}</p>
        @endif
        <p class="card-text"><a href="carrito.php" class="text-body"><i class="far fa-calendar-alt"></i> Mis turnos</p></a>
        <p class="card-text"><a href="{{route('user.edit')}}" class="text-body"><i class="fas fa-cog"></i> Editar Perfil</p></a>
        <hr class="mt-0">
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
            <img src="{{asset('/img/calendario.jpg')}}" alt="turno" class="card-img w-75 h-75 pb-2">
            <p class="card-text">Aqui pondriamos el calendario</p>
            <small class="text-muted">Si tan solo tuviera uno</small>
        </div>
      </div>
      <form class="form-inline mt-2 mt-md-0" action="{{route('user.delete')}}" method="post">
        @method('DELETE')
        @csrf
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Eliminar Cuenta</button>
      </form>
    </div>

    <!--Centro -->
    <div class="col-md-6 col-xl-7">
      <div class="card my-3">
        <div class="card-header">
          <p class="text-muted mb-0">Dejanos tu reseña acerca de algun Local</p>
        </div>

        <div class="card-body p-2">

          <form method="post" action="{{ route('comments.addFromProfile') }}">
            @csrf
            <div class="form-group">
              <label for="description" class="text-muted card-text">{{ __('Local') }}</label>

              <div class="text-center">
                <select id="shop_id" class="form-control @error('shop_id') is-invalid @enderror" name="shop_id" required autofocus>
                  <option value="">Elija un local</option>
                  @foreach($shops as $shop)
                    <option {{old('shop_id')==$shop->id ? 'selected':''}} value="{{$shop->id}}">{{$shop->name}}</option>
                  @endforeach
                </select>

                @error('shop_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

              </div>
            </div>
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

          </form>
        </div>
      </div>
      @if (count($comments)>0)
        <div class="card mb-3">
          <div class="card-header">
            <p class="text-muted mb-0">Comentaste</p>
          </div>
          @foreach ($comments as $comment)
          <div class="card-body">
            <div class="row no-gutters">

              <div class="col-md-4 col-lg-3 h-75 w-75 m-auto">
                <img src="{{$comment->shop->logo ? Storage::url($comment->shop->logo) : asset('/img/defaultLogo.png')}}" class="img-fluid" alt="{{$comment->shop->name}}">
              </div>
              <div class="col">
                <div class="card-body pb-0">
                  <h3 class="card-title"><a href="producto.php">{{$comment->shop->name}}</a></h3>
                  <h6 class="card-subtitle mb-2 text-muted">{{$comment->shop->nbhd->name}}</h6>
                  <p class="card-text mt-2">
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
                  <small class="text-muted">{{$comment->created_at}}</small>
                </div>
              </div>
            </div>
          </div>
          <hr>
        @endforeach
        </div>
      @endif
    </div>

    <!-- Derecha -->
    <div class="col-md-3 col-xl-2">
      <div class="card my-3 d-none d-md-block">
        <div class="card-header">
          <h6>Proximamente</h6>
        </div>
        <div class="card-body p-2 text-center">
            <img src="{{asset('/img/calendario.jpg')}}" alt="turno" class="card-img w-75 h-75 pb-2">
            <p class="card-text">Aqui Pondriamos el calendario</p>
            <small class="text-muted">Si tan solo tuvieramos uno</small>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
