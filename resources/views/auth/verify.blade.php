@extends('layouts.app')

@section('content')

@include('partials.shared.breadcrumb', ['page' => "Verifica tu cuenta"])

<section class="jobguru-login-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login-box">
                    <div class="login-title">
                        <h3>Verifica tu cuenta</h3>
                    </div>
                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Te hemos enviado un nuevo correo de verificación.') }}
                            </div>
                        @endif

                        Para acceder a esta sección, primero debes verificar tu cuenta. Hemos enviado un email a tu dirección de correo electrónico.
                        <br>
                        Si aún no has recibido el email.
                        <div class="single-login-field">
                            <a href="{{ route('verification.resend') }}" class="btn btn-block btn-success">Haz click aqui para enviar un nuevo correo</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
