@extends('layouts.app')
@section('title') Contacto @endsection
@section('content')
<div class="container">
  <div class="text-center mt-2">
    <form class="col col-md-6 m-auto bg-white border rounded p-3 text-center" action="{{route('home')}}" method="get">
      @csrf
      <h1>Contacto</h1>
      <h3 class="h3 mb-3 font-weight-normal">Dejanos tu mensaje</h3>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Nombre</label>
          <input type="text" name= "name" class="form-control" placeholder="Ingrese su nombre" value="{{old('name')}}">
        </div>
        <div class="form-group col-md-6">
          <label for="surname">Apellido</label>
          <input type="text" name="surname" class="form-control" placeholder="Ingrese su apellido" value="{{old('surname')}}">
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Ingrese un nombre de usuario" value="{{old('email')}}">
      </div>
      <div class="form-group">
        <label for="comentario">Comentarios</label>
        <textarea class="form-control" name="comentario" placeholder="Deja tu comentario" rows="4"></textarea>
      </div>
      <div class="form-check">
        <p>
          <input type="checkbox" name="terms" class="form-check-input">
          <label class="form-check-label" for="terms">Acepto los <a href="faq.php">Términos y condiciones</a> de Peluca y peluquín S.A.</label>
        </p>
      </div>
      <button type="submit" class="btn btn-lg btn-primary btn-block">Enviar</button>
    </form>
  </div>
</div>
@endsection
