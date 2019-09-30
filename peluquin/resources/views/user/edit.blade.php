@extends('layouts.app')
@section('title') User @endsection
@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Editar Perfil') }}</div>

                  <div class="card-body">
                      <form method="post" action="{{ route('user.edit') }}" enctype="multipart/form-data">
                          @csrf

                          {{ method_field('PUT') }}
                          <div class="form-group row">
                            <div class="col-md-4 text-md-right">
                              <label for="first_name" class="col-form-label ">{{ __('Nombre') }}</label>
                              {{'y'}}
                              <label for="last_name" class=" col-form-label">{{ __('Apellido') }}</label>
                            </div>

                            <div class="col-md-3">
                                <input id="first_name" type="text" readonly class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{Auth::User()->first_name}}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <input id="last_name" type="text" readonly class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{Auth::User()->last_name}}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>

                          <div class="form-group row">
                              <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de usuario') }}</label>

                              <div class="col-md-6">
                                  <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{Auth::user()->username}}" required autocomplete="username" autofocus>

                                  @error('username')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" required autocomplete="email">

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{__('Avatar')}}</label>

                            <div class="col-md-6 custom-file">
                              <input id="avatar" type="file" class="custom-file-input @error('avatar') is-invalid @enderror" name="avatar" autofocus>
                                <label class="custom-file-label" for="avatar">Elegi una imagen</label>

                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="bday" class="col-md-4 col-form-label text-md-right">{{__('Fecha de Nacimiento')}}</label>

                            <div class="col-md-6">
                            <input id="bday" type="{{Auth::user()->bday ? 'text' : 'date'}}" class="form-control @error('bday') is-invalid @enderror" name="bday" value="{{Auth::user()->bday}}" autocomplete="bday" autofocus>

                              @error('bday')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror

                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="nbhd_id" class="col-md-4 col-form-label text-md-right">{{__('Barrio')}}</label>

                            <div class="col-md-6">
                              <select class="form-control @error('nbhd_id') is-invalid @enderror" name="nbhd_id">

                                <option value="" >Elegi tu Barrio</option>
                                @foreach ($nbhds as $nbhd)
                                  <option {{Auth::user()->nbhd_id == $nbhd->id ? 'selected':''}} value="{{$nbhd->id}}">{{$nbhd->name}}</option>
                                @endforeach

                                @error('nbhd_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                              </select>
                            </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Guardar Cambios') }}
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
