@extends('layouts.app')
@section('title') Alta de Comercio @endsection
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Alta de nuevo comercio')}}</div>
          <div class="card-body">
            <form method="post" action="{{route('shops.save')}}" enctype="multipart/form-data">

              @csrf

              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Local') }}</label>

                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                  </div>
              </div>

              <div class="form-group row">
                  <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>

                  <div class="col-md-6">
                      <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                      @error('address')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                  </div>
              </div>

              <div class="form-group row">
                  <label for="rating" class="col-md-4 col-form-label text-md-right">{{ __('Rating') }}</label>

                  <div class="col-md-6">
                      <input id="rating" type="number" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ old('rating') }}" required autocomplete="rating" autofocus min="0" max="5">

                      @error('rating')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                  </div>
              </div>

              <div class="form-group">
                <label for="logo" class="col-md-4 col-form-label text-md-right">{{__('Logo')}}</label>

                <div class="col-md-6 custom-file">
                  <input id="logo" type="file" class="custom-file-input @error('logo') is-invalid @enderror" name="logo" autofocus>
                    <label class="custom-file-label" for="logo"></label>

                    @error('logo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
              </div>

              <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                  </div>
              </div>

              <div class="form-group row">
                <div class="col-md-4 text-md-right">
                  <label for="opens_at" class="col-form-label ">{{ __('Apertura') }}</label>
                  {{'y'}}
                  <label for="closes_at" class=" col-form-label">{{ __('Cierre') }}</label>
                </div>

                <div class="col-md-3">
                    <input id="opens_at" type="time" class="form-control @error('opens_at') is-invalid @enderror" name="opens_at" value="{{ old('opens_at') }}" required autocomplete="opens_at" autofocus>

                    @error('opens_at')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-3">
                    <input id="closes_at" type="time" class="form-control @error('closes_at') is-invalid @enderror" name="closes_at" value="{{ old('closes_at') }}" required autocomplete="closes_at" autofocus>

                    @error('closes_at')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Barrio') }}</label>

                <div class="col-md-6 text-center">
                  <select id="nbhd_id" class="form-control @error('nbhd_id') is-invalid @enderror" name="nbhd_id" required autofocus>
                    <option value="">Elija su barrio</option>
                    @foreach($nbhds as $nbhd)
                      <option {{old('nbhd_id')==$nbhd->id ? 'selected':''}} value="{{$nbhd->id}}">{{$nbhd->name}}</option>
                    @endforeach
                  </select>

                  @error('nbhd_id')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                </div>
              </div>

              <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Repetir contraseña') }}</label>

                  <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Guardar')}}
                  </button>
                </div>
              </div>

            </form>

          </div>
        </div>

      </div>

    </div>
  </div>


@endsection
