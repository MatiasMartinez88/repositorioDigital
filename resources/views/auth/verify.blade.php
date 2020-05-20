@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('se ha enviado un nuevo enlace de verificación a su dirreción de correo electronico.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar,fijate tu correo electronico para obtener un enlace de verificación') }}
                    {{ __('Si no recibiste el correo electronico') }},
                    <form class="d-inline" method="POST" action="{{ route('verificación.Enviar') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Haga click aqui para solicitar otro') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
