@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu Email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un mensaje acaba de ser enviado a tu casilla de correo') }}
                        </div>
                    @endif

                    {{ __('Porfavor verifique su casilla de correo') }}
                    {{ __('No recibiste el email?') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
		                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Reenviar el mail') }}</button>.
	                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
