@extends('layouts.app')
@section('title') Contacto @endsection
@section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Dejanos tu mensaje') }}</div>

                  <div class="card-body">
                      <form method="POST" action="{{ route('login') }}">
                          @csrf

                          <div class="form-group row">
                            <div class="col-md-4 text-md-right">
                              <label for="first_name" class="col-form-label ">{{ __('Nombre') }}</label>
                              {{'y'}}
                              <label for="last_name" class=" col-form-label">{{ __('Apellido') }}</label>
                            </div>

                            <div class="col-md-3">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>


                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

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
                            <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('Contacto') }}</label>
                            <div class="col-md-6 text-center">
                              <textarea class="form-control @error('comments') is-invalid @enderror" name="comments" placeholder="Deja tu comentario" rows="4" required autocomplete="comment" autofocus></textarea>

                                @error('comments')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                          </div>

                          <div class="form-group row">
                              <div class="col-md-10 offset-md-2">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="terms" id="terms" {{ old('terms') ? 'checked' : '' }}>

                                      <label class="form-check-label" for="remember">
                                          Acepto los <a href="{{route('faq')}}">Términos y condiciones</a> de Peluca y peluquín S.A.
                                      </label>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                {{ __('Enviar mensaje') }}
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
