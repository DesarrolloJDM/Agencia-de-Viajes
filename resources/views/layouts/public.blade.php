<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- Meta Básico --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Titulo Principal --}}
        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- SEO Básico --}}
        <meta 
            name="description" 
            content="Agencia de viajes especializada en paquetes nacionales e internacionales. En Viaja Tus Sueños te ayudamos a planear vacaciones, escapadas y experiencias inolvidables."
        >
        <meta 
            name="keywords" 
            content="agencia de viajes, paquetes de viaje, viajes nacionales, viajes internacionales, vacaciones familiares, viajes a la playa, viajes a Canadá, viajes a Europa, destinos turísticos, paquetes vacacionales, viajes personalizados, asesoría de viajes, Viaja Tus Sueños, reservar viajes, viajes para parejas, viajes todo incluido"
        >      
        <meta name="author" content="Viaja tus Suenos">
        <meta name="robots" content="index, follow">

        {{-- URL principal de la página --}}
        <link rel="canonical" href="https://viajatussuenos.com/">

        {{-- Open Graph --}}
        <meta property="og:type" content="website">
        <meta property="og:title" content="Viaja Tus Sueños | Agencia de viajes">
        <meta 
            property="og:description" 
            content="Planea tus próximas vacaciones con Viaja Tus Sueños. Encuentra paquetes nacionales e internacionales, asesoría personalizada y destinos inolvidables."
        >
        <meta property="og:url" content="https://viajatussuenos.com/">
        <meta property="og:site_name" content="Viaja tus Suenos">
        {{-- <meta property="og:image" content="https://viajatussuenos.com/assets/img/og-image.png"> --}}
        <meta property="og:image:alt" content="Viaja Tus Sueños - Agencia de viajes y paquetes vacacionales">

        @fonts

        <!-- Styles / Scripts -->
        @vite(['resources/public/css/app.css'])
       
    </head>
    <body>
        <x-public.header />

            @yield('content')
            
        <x-public.footer />
    </body>
</html>
