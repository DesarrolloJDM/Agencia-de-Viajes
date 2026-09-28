@extends('layouts.public')

@section('content')
<section class="space">
    <div class="container">
        <div class="row align-items-center">
            <h2 class="sec-title h1 text-center">
                Reseñas de nuestros clientes
            </h2>

            <div class="container">
                <div class="row">
                    @forelse ($reviews as $review)
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="package-style1 shadow-lg">
                            <div class="package-img">
                                {{-- src={{ asset('images/paquete-3.png') }} --}}
                                <img class="w-100" src={{ asset($review->image_path) }} alt="Package Image">
                            </div>
                            <div class="card border-0 p-2">
                                <div class="card-title d-flex">
                                    {{-- asset('images/nosotros-1.png') --}}
                                    <img class="rounded-circle review-profile-img" src={{ asset($review->user_image_path) }} alt="image2">
                                    <div class="ps-2">
                                        {{-- Juan Sánchez --}}
                                        <h3 class="package-title">{{ $review->user_id }}</h3>
                                        <span>Visitó: Cancún</span><br>
                                        <span>Nivel de Satisfacción: {{ $review->rate }}</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="sec-text">
                                        {{-- En Viaja Tus Sueños creemos que cada viaje comienza con una ilusión. Por eso, te ayudamos a encontrar
                                        destinos, paquetes y experiencias que se adapten a tu estilo, presupuesto y forma de viajar.
                                        Nuestro objetivo es que disfrutes cada etapa del viaje, desde la planeación hasta el regreso a casa,
                                        con la confianza de tener un equipo que te acompaña en todo momento. --}}
                                        {{ $review->message }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                         <h2 class="sec-title h2">
                            No hay reseñas aún...
                        </h2>
                    @endforelse
                </div>
            </div>
        </div>
</section>
@endsection