@extends('layouts.app')
@section('title') Agregar Producto @endsection
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Alta de nuevo servicio')}}</div>
          <div class="card-body">
            <form method="post" action="/productsaction">
              {{ csrf_field() }}

              <div class="form-group row">
                <div class="col-md-4 text-md-right">
                  <label for="name" class="col-form-label ">{{ __('Nombre') }}</label>
                  {{'y'}}
                  <label for="price" class=" col-form-label">{{ __('Precio') }}</label>
                </div>

                <div class="col-md-3">
                    <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>
                </div>
                <div class="col-md-3">
                    <input id="price" type="text" class="form-control" name="price" required autocomplete="price" autofocus>
                </div>
              </div>

              <!-- <div class="form-group row">
                <label>Nombre</label>
                <div class="col-md6 text-center">
                  <textarea  id="comment" class="form-control" name="name" placeholder="Nombre del servicio" rows="1" required autocomplete="name" autofocus></textarea>
                </div>
              </div> -->

              <div class="form-group row">
                <div class="col-md-4 text-md-right">
                  <label for="description" class="col-form-label">{{ __('Descripcion') }}</label>
                </div>
                <div class="col-md-6">
                  <input id="description" type="text" class="form-control" name="description" required autocomplete="name" autofocus>
                </div>
              </div>

              <!-- <div class="form-group row">
                <label>Precio</label>
                <div class="col-md-6 text-center">
                  <textarea  id="comment" class="form-control" name="price" placeholder="Ingrese el costo del servicio" rows="4" required autocomplete="price" autofocus></textarea>
                </div>
              </div> -->

              <div class="form-group row">
                <label class="col-form-label">Categoria</label>
                <select name="category_id" class="form-control m-md-0">
                  <option value="">Elija una categoria</option>
                  @foreach($categories as $category)
                    <option value="{{$category->id}}">
                        {{$category->name}}
                    </option>
                  @endforeach
                </select>

              </div>

              <div class="form-group row">
                <label class="col-form-label">Comercio</label>
                <select name="shop_id" class="form-control m-md-0">
                  <option value="">Elija un comercio</option>
                  @foreach($shops as $shop)
                    <option value="{{$shop->id}}">
                        {{$shop->name}}
                    </option>
                  @endforeach
                </select>

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
