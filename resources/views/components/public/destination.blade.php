<section 
    class="space space-extra-bottom bg-light shape-mockup-wrap" 
    data-bg-src="{{ asset('images/bg.png') }}"
>
    <div 
        class="shape-mockup d-none d-xl-block spin z-index-negative" 
        data-top="-20%" 
        data-right="-8%"
    >
        <img src="{{ asset('images/circle1.png') }}" alt="circle">
    </div>
    <div 
        class="shape-mockup d-none d-xl-block z-index-negative" 
        data-bottom="13%" 
        data-left="0%"
    >  
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 col-md-8">
                <div class="title-area">
                    <span class="sec-subtitle">
                        Top Destinos
                    </span>
                    <h2 class="sec-title h1">
                        Ciudades Imperdibles
                    </h2>
                    <p class="sec-text">
                        Descubre algunos de los destinos más fascinantes para tu próxima 
                        aventura. Ciudades llenas de cultura, historia, paisajes increíbles 
                        y experiencias que recordarás para siempre.
                    </p>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btns">
                    <button class="icon-btn" data-slick-prev=".destinationSlide">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="icon-btn" data-slick-next=".destinationSlide">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
        <div 
            class="row destinationSlide vs-carousel" 
            data-slide-show="3" 
            data-arrows="false" 
            data-lg-slide-show="2"  
            data-md-slide-show="2" 
            data-sm-slide-show="1"
        >
      
            <!-- Destino 1 Inicio -->
            <div class="col-xl-4">
                <div class="destination-style1">
                    <a href="destination-details.html"> 
                        <img src="{{ asset('images/destino-1.png') }}" alt="destination image">
                    </a>
                    <span class="destination-price">
                        $259
                    </span>
                    <div class="destination-info">
                        <h4 class="destination-name">
                            <a href="#">
                                París
                            </a>
                        </h4>
                        <p class="destination-text">
                            La ciudad del amor y la elegancia
                        </p>
                    </div>
                </div>
            </div>
            <!-- Destino 1 Fin -->
        
            <!-- Destino 2 Inicio -->
            <div class="col-xl-4">
                <div class="destination-style1">
                    <a href="destination-details.html"> 
                        <img src="{{ asset('images/destino-2.png') }}" alt="destination image">
                    </a>
                    <span class="destination-price">
                        $259
                    </span>
                    <div class="destination-info">
                        <h4 class="destination-name">
                            <a href="#">
                                Ciudad de México
                            </a>
                        </h4>
                        <p class="destination-text">
                            Historia, cultura y sabor en cada rincón
                        </p>
                    </div>
                </div>
            </div>
            <!-- Destino 2 Fin -->

            <!-- Destino 3 Inicio -->
            <div class="col-xl-4">
                <div class="destination-style1">
                    <a href="destination-details.html"> 
                        <img src="{{ asset('images/destino-3.png') }}" alt="destination image">
                    </a>
                    <span class="destination-price">
                        $259
                    </span>
                    <div class="destination-info">
                        <h4 class="destination-name">
                            <a href="#">
                                Bangkok
                            </a>
                        </h4>
                        <p class="destination-text">
                            Tradición, color y energía incomparable
                        </p>
                    </div>
                </div>
            </div>
            <!-- Destino 3 Fin -->

            <!-- Destino 4 Inicio -->
            <div class="col-xl-4">
                <div class="destination-style1">
                    <a href="destination-details.html"> 
                        <img src="{{ asset('images/destino-4.png') }}" alt="destination image">
                    </a>
                    <span class="destination-price">$259</span>
                    <div class="destination-info">
                        <h4 class="destination-name">
                            <a href="#">
                                Roma
                            </a>
                        </h4>
                        <p class="destination-text">
                            Historia, arte y romance en cada calle
                        </p>
                    </div>
                </div>
            </div>
            <!-- Destino 4 Fin -->

            <!-- Destino 5 Inicio -->
            <div class="col-xl-4">
                <div class="destination-style1">
                    <a href="destination-details.html"> 
                        <img src="{{ asset('images/destino-5.png') }}" alt="destination image">
                    </a>
                    <span class="destination-price">
                        $259
                    </span>
                    <div class="destination-info">
                        <h4 class="destination-name">
                            <a href="#">
                                Vancouver
                            </a>
                        </h4>
                        <p class="destination-text">
                            Naturaleza y ciudad en un solo destino
                        </p>
                    </div>
                </div>
            </div>
            <!-- Destino 5 Fin -->
            
        </div>
    </div>
</section>