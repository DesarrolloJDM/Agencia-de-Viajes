@extends('layouts.admin')

@section('main')
  <main class="app-main">
    <x-admin.title title="Reseñas" />
        
    {{-- Inicio App Content--> --}}
    <div class="app-content">
        {{-- Inicio Contenedor --}}
        <div class="container-fluid">
            {{-- Widget Inicio --}}
            <div class="row">

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon text-bg-warning shadow-sm">
                            <i class="bi bi-clock"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                Pendientes
                            </span>
                            <span class="info-box-number">
                                10
                            </span>
                        </div>
                    </div>
                </div>
        
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon text-bg-success shadow-sm">
                            <i class="bi bi-check-circle"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                Aprobadas
                            </span>
                            <span class="info-box-number">
                                10
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon text-bg-danger shadow-sm">
                            <i class="bi bi-x-circle"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                No Aprobadas
                            </span>
                            <span class="info-box-number">
                                10
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon text-bg-primary shadow-sm">
                            <i class="bi bi-bar-chart"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                Total
                            </span>
                            <span class="info-box-number">
                                30
                            </span>
                        </div>
                    </div>    
                </div>

            </div>
            {{-- Widget Fin --}}

            <div class="row g-4">
                <x-admin.review />
                <x-admin.review />
                <x-admin.review />
                <x-admin.review />
            </div>

      </div>
      {{-- Fin Contenedor --}}
    </div>
    {{-- Fin App Content --}}
  </main>    
@endsection