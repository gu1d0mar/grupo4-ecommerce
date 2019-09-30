@extends('layouts.app')
@section('title') User @endsection
@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">{{ __('Editar Avatar') }}</div>
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{Storage::url(Auth::user()->avatar)}}" id="blah" class="card-img" alt="{{Auth::user()->username}}">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <form method="post" action="{{ route('user.updateAvatar') }}" enctype="multipart/form-data">
                      @csrf

                          {{ method_field('PUT') }}
                          <div class="form-group">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{__('Avatar')}}</label>

                            <div class="col-md-6 custom-file">
                              <input id="avatar" type="file" class="custom-file-input @error('avatar') is-invalid @enderror" name="avatar" autofocus onchange="readURL(this);">
                                <label class="custom-file-label" for="avatar">Elegi una imagen</label>

                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                          </div>


                          <div class="form-group mt-5">
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
      </div>
  </div>

  <script type="text/javascript">
  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
  </script>
@endsection
