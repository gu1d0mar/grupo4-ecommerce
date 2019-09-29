@extends('layouts.app')
@section('title') Alta de Comercio @endsection
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Alta de nuevo comercio')}}</div>
          <div class="card-body">
            <form method="post" action="/shopsaction">
              {{ csrf_field() }}

              <div class="form-group row">
                <div class="col-md-4 text-md-right">
                  <label for="email" class="col-form-label ">{{ __('Email') }}</label>
                  {{'y'}}
                  <label for="name" class=" col-form-label">{{ __('Nombre') }}</label>
                </div>

                <div class="col-md-3">
                    <input id="email" type="text" class="form-control" name="email" required autocomplete="name" autofocus>
                </div>
                <div class="col-md-3">
                    <input id="name" type="text" class="form-control" name="name" required autocomplete="price" autofocus>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Logo</label>
                <div class="col-md-6">
                  <select name="logo" class="form-control">
                    <option value="">Elija un Logo</option>
                    @foreach($shops as $shop)
                      <option value="{{$shop->logo}}">
                        {{$shop->logo}}
                      </option>
                    @endforeach
                  </select>

                </div>
              </div>

                <div class="form-group row">
                  <div class="col-md-4 text-md-right">
                    <label hidden for="rating" class="col-form-label">{{ __('Rating') }}</label>
                  </div>
                  <div class="col-md-6">
                    <input hidden id="rating" type="text" class="form-control" name="rating" required autocomplete="rating" value="0.00" autofocus>
                  </div>
                </div>

              <div class="form-group row">
                <div class="col-md-4 text-md-right">
                  <label for="address" class="col-form-label">{{ __('Direccion') }}</label>
                </div>
                <div class="col-md-6">
                  <input id="address" type="text" class="form-control" name="address" required autocomplete="address" autofocus>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Barrio</label>
                <div class="col-md-6">
                  <select name="nbhd_id" class="form-control">
                    <option value="">Elija un barrio</option>
                    @foreach($nbhds as $nbhd)
                      <option value="{{$nbhd->id}}">
                        {{$nbhd->name}}
                      </option>
                    @endforeach
                  </select>

                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-4 text-md-right">
                  <label for="work_hours" class="col-form-label">{{ __('Horario') }}</label>
                </div>
                <div class="col-md-6">
                  <input id="work_hours" type="text" class="form-control" name="work_hours" required autocomplete="work_hours" autofocus>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-4 text-md-right">
                  <label for="password" class="col-form-label">{{ __('Contrasena') }}</label>
                </div>
                <div class="col-md-6">
                  <input id="password" type="text" class="form-control" name="password" required autocomplete="password" autofocus>
                </div>
              </div>


              </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Salvar')}}
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
