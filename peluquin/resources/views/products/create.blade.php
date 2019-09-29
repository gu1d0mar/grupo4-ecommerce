@extends('layouts.app')
@section('title') Agregar Productos y Servicios @endsection
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Alta de nuevo servicio')}}</div>
          <div class="card-body">
            <form method="post" action="{{route('products.save')}}">
              {{ csrf_field() }}


              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del Producto') }}</label>

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
                  <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                  <div class="col-md-6">
                      <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                      @error('price')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                  </div>
              </div>

              <div class="form-group row">
                  <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Duracion en minutos') }}</label>

                  <div class="col-md-6">
                      <input id="duration" type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ old('duration') }}" required autocomplete="duration" autofocus>

                      @error('duration')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                  </div>
              </div>

              <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                <div class="col-md-6 text-center">
                  <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" rows="4" autocomplete="description" autofocus></textarea>

                    @error('comments')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
              </div>

              <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

                <div class="col-md-6 text-center">
                  <select id="category_id" class="form-control @error('category_idshop_id') is-invalid @enderror" name="category_id" required autofocus>
                    <option value="">Elija una categoria</option>
                    @foreach($categories as $category)
                      <option {{old('category_id')==$category->id ? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>

                  @error('category_id')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                </div>
              </div>

              <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Local') }}</label>

                <div class="col-md-6 text-center">
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
