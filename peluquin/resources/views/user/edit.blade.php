@extends('layouts.app')
@section('title') User @endsection
@section('content')
  <div class="container">

<div class="card">
  <div class="card-body">

  <form action="" method="post" enctype="multipart/form-data">
  @csrf

  <form>
    <div class="form-group">
      <label for="avatar">Example file input</label>
      <input type="file" class="form-control-file" name="avatar" id="avatar">
    </div>
  </form>
  <div class="form-group">
    <label for="avatar">Avatar</label>
    <div class="custom-file">
      <input type="file" class="custom-file-input" name="avatar">
      <label class="custom-file-label" for="avatar"></label>
    </div>
  </div>
  <div class="form-group">
    <label for="username">Nombre de usuario</label>
    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" required autocomplete="username" autofocus value="{{Auth::user()->username}}">
  </div>
  <div class="form-group">
    <label for="bday">Fecha de Nacimiento</label>
    <input id="bday" type="{{Auth::user()->bday ? 'text' : 'date'}}" class="form-control @error('bday') is-invalid @enderror" name="bday" required autocomplete="bday" autofocus value="{{Auth::user()->bday}}">
  </div>
  <div class="form-group">
    <label for="email">E-mail</label>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus value="{{Auth::user()->email}}">
  </div>
  <div class="form-group" >
    <label for="exampleInputEmail1">Localidad</label>
    <select class="form-control" name="nbhd_id">
      <option value="" >Elegi tu localidad</option>
      {{-- @foreach ($nbhds as $nbhd)
        <option {{$user->nbhd_id == $nbhd->id ? 'selected':''}} value="{{$nbhd->id}}">{{$nbhd->name}}</option>
      @endforeach --}}
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@endsection
