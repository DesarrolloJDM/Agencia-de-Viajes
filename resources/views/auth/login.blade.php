@extends('layouts.auth')

@section('main')
<main class="login-box">
    <div class="card">
        <div class="card-body login-card-body">
            <h3 class="login-box-msg">
                Viaja tus Sueños
            </h3>

            @if ($errors->any())
            <div class="alert alert-danger text-center" role="alert">
                <div class="mb-0 ps-3">
                    @foreach ($errors->all() as $error)
                    <p>
                        {{ $error }}
                    </p>
                    @endforeach
                </div>
            </div>
            @endif
            
            {{-- Formulario Inicio --}}
            <form 
                action="{{ route('login.store') }}" 
                method="POST"
            >
                @csrf
                <label class="visually-hidden" for="loginEmail">
                    Correo electrónico
                </label>
                <div class="input-group mb-3">
                    <input 
                        id="loginEmail"
                        name="email" 
                        type="email"
                        value="{{ old('email') }}" 
                        class="form-control @error('email') is-invalid @enderror" 
                        placeholder="Correo electrónico" 
                        autocomplete="email"
                        required
                        autofocus
                    />
                    <div class="input-group-text">
                        <span class="bi bi-envelope"></span>
                    </div>
                </div>

                {{-- @error('email')
                    <div class="text-danger small mb-3">
                        {{ $message }}
                    </div>
                @enderror --}}
        
                <label class="visually-hidden" for="loginPassword">
                    Contraseña
                </label>
                <div class="input-group mb-3">
                    <input
                        id="loginPassword"
                        name="password"
                        type="password"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="Contraseña"
                        autocomplete="current-password"
                        required
                    />
                    <div class="input-group-text">
                        <span class="bi bi-lock-fill"></span>
                    </div>
                </div>

                {{-- @error('password')
                    <div class="text-danger small mb-3">
                        {{ $message }}
                    </div>
                @enderror --}}
            
                <div class="row">
                    <div class="col-6">
                        <div class="form-check">
                            <input 
                                id="remember"
                                name="remember"
                                class="form-check-input" 
                                type="checkbox" 
                                value="1" 
                                @checked(old('remember')) 
                            />
                            <label class="form-check-label" for="flexCheckDefault"> 
                                Recuérdame
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">
                                Iniciar Sesión
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            {{-- Formulario Fin --}}

            <p class="mb-1">
                <a href="#">
                    Olvidé mi contraseña
                </a>
            </p>
        </div>
    </div>
</main>
@endsection
