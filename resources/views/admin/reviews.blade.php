@extends('layouts.admin')

@section('main')
  <main class="app-main">
    <x-admin.title title="Reseñas" />
    {{-- @php
        $totalReviewsAccepted = App\Http\Controllers\Admin\AdminReviewController::getAllAcceptedReviews();
    @endphp --}}
        
    {{-- Inicio App Content--> --}}
    <div class="app-content">
        {{-- Inicio Contenedor --}}
        <div class="container-fluid">
            {{-- Widget Inicio --}}
            <div class="row">

                <div class="col-12 col-sm-6 col-md-3" onclick="return confirm('You have clicked on Pending Reviews!')">
                    {{-- <a href="{{ route('get.pending.reviews') }}"> --}}
                        <div class="info-box">
                            <span class="info-box-icon text-bg-warning shadow-sm">
                                <i class="bi bi-clock"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">
                                    Reseñas Pendientes
                                </span>
                                <span class="info-box-number">
                                    {{ $totalPendingReviews }}
                                </span>
                            </div>
                        </div>
                    {{-- </a> --}}
                </div>
        
                <div class="col-12 col-sm-6 col-md-3">
                    {{-- <a href="{{ route('get.accepted.reviews') }}"> --}}
                        <div class="info-box">
                            <span class="info-box-icon text-bg-success shadow-sm">
                                <i class="bi bi-check-circle"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">
                                    Reseñas Aprobadas
                                </span>
                                <span class="info-box-number">
                                    {{ $totalAcceptedReviews }}
                                </span>
                            </div>
                        </div>
                    {{-- </a> --}}
                </div>
                
                <div class="col-12 col-sm-6 col-md-3">
                    {{-- <a href="{{ route('get.rejected.reviews') }}"> --}}
                        <div class="info-box">
                            <span class="info-box-icon text-bg-danger shadow-sm">
                                <i class="bi bi-x-circle"></i>
                            </span>
                            <div class="info-box-content">
                                <span class="info-box-text">
                                    Reseñas No Aprobadas
                                </span>
                                <span class="info-box-number">
                                    {{ $totalRejectedReviews }}
                                </span>
                            </div>
                        </div>
                    {{-- </a> --}}
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon text-bg-primary shadow-sm">
                            <i class="bi bi-bar-chart"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                Reseñas Totales
                            </span>
                            <span class="info-box-number">
                                {{ $totalReviews }}
                            </span>
                        </div>
                    </div>    
                </div>

            </div>
            {{-- Widget Fin --}}

            <div class="row g-4">
                @if($totalPendingReviews)
                    @foreach($PendingReviews as $PendingReview)
                        <x-admin.review :review="$PendingReview" />
                    @endforeach
                @else
                    <h2 class="sec-title h2">
                        Sin reseñas pendientes...
                    </h2>
                @endif
            </div>

      </div>
      {{-- Fin Contenedor --}}
    </div>
    {{-- Fin App Content --}}
  </main>    
@endsection