@extends('layouts.admin')

@section('main')
<main class="app-main">
    
<x-admin.title 
    title="Añadir Paquete" 
/>

{{-- App Content Inicio --}}
<div class="app-content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Nuevo Paquete
                </h3>
            </div>
            <div class="card-body">
                {{-- Formulario Inicio --}}
                <form 
                    class="row g-3"
                    method="POST"
                    action="{{ route('admin.paquetes.store') }}"
                    enctype="multipart/form-data"
                >
                    @csrf
                    <div class="col-4">
                        <label class="form-label" for="code">
                            Código
                        </label>
                        <input
                            type="text"
                            id="code"
                            name="code"
                            class="form-control @error('code') is-invalid @enderror"
                            value="{{ old('code') }}"
                            placeholder="Ej. MT-12337"
                        />

                        <x-admin.alerta-input 
                            name="code"
                        />
                    </div>

                    <div class="col-4">
                        <label class="form-label" for="title">
                            Nombre del Paquete
                        </label>
                        <input
                            type="text"
                            id="title"
                            name="title"
                            class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title') }}"
                            placeholder="Ej. Viva Europa"
                        />

                        <x-admin.alerta-input 
                            name="title"
                        />
                    </div>

                    <div class="col-md-4">
                        <label class="form-label" for="supplier_id">
                            Proveedor
                        </label>
                        <select
                            id="supplier_id"
                            name="supplier_id"
                            class="form-select @error('supplier_id') is-invalid @enderror"
                        >
                            <option value="">
                                --- Selección ---
                            </option>

                            @foreach ($suppliers as $supplier)
                                <option 
                                    value="{{ $supplier->id }}"
                                    @selected(old('supplier_id') == $supplier->id)
                                >
                                    {{ $supplier->name }}
                                </option>    
                            @endforeach
                            
                        </select>

                        <x-admin.alerta-input 
                            name="supplier_id"
                        />
                    </div>

                    <div class="col-md-3">
                        <label class="form-label" for="scope">
                            Categoría
                        </label>
                        <select
                            id="scope"
                            name="scope"
                            class="form-select @error('scope') is-invalid @enderror"
                        >
                            <option value="">
                                --- Selección ---
                            </option>
                            <option 
                                value="nacional"
                                @selected(old('scope') === 'nacional')
                            >
                                Nacional
                            </option>
                            <option 
                                value="internacional"
                                @selected(old('scope') === 'internacional')
                            >
                                Internacional
                            </option>
                            
                        </select>

                        <x-admin.alerta-input 
                            name="scope"
                        />
                    </div>

                    <div class="col-md-3">
                        <label class="form-label" for="travel_type">
                            Tipo de Viaje
                        </label>
                        <select
                            id="travel_type"
                            name="travel_type"
                            class="form-select @error('travel_type') is-invalid @enderror"
                        >
                            <option value="">
                                --- Selección ---
                            </option>
                            <option 
                                value="circuito"
                                @selected(old('travel_type') === 'circuito')
                            >
                                Circuito
                            </option>
                            <option 
                                value="crucero"
                                @selected(old('travel_type') === 'crucero')
                            >
                                Crucero
                            </option>
                            <option 
                                value="vacacional"
                                @selected(old('travel_type') === 'vacacional')
                            >
                                Paquete Vacacional
                            </option>
                            <option 
                                value="excursion"
                                @selected(old('travel_type') === 'excursion')
                            >
                                Tour o excursión
                            </option>
                        </select>

                        <x-admin.alerta-input 
                            name="travel_type"
                        />
                    </div>

                    <div class="col-3">
                        <label class="form-label" for="days">
                            Días
                        </label>
                        <input
                            type="number"
                            id="days"
                            name="days"
                            class="form-control @error('days') is-invalid @enderror"
                            value="{{ old('days') }}"
                        />

                        <x-admin.alerta-input 
                            name="days"
                        />
                    </div>

                    <div class="col-3">
                        <label class="form-label" for="nights">
                            Noches
                        </label>
                        <input
                            type="number"
                            id="nights"
                            name="nights"
                            class="form-control @error('nights') is-invalid @enderror"
                            value="{{ old('nights') }}"
                        />

                        <x-admin.alerta-input 
                            name="nights"
                        />
                    </div>
                    
                    <div class="col-md-4">
    <label
        class="form-label"
        for="origin_continent_id"
    >
        Continente de salida
    </label>

    <select
        id="origin_continent_id"
        name="origin_continent_id"
        class="form-select"
    >
        <option value="">
            --- Seleccionar ---
        </option>

        @foreach ($destinations->where('type', 'continente') as $continent)
            <option
                value="{{ $continent->id }}"
                @selected(
                    old('origin_continent_id') == $continent->id
                )
            >
                {{ $continent->name }}
            </option>
        @endforeach
    </select>
</div>

{{-- País de salida --}}
<div class="col-md-4">
    <label
        class="form-label"
        for="origin_country_id"
    >
        País de salida
    </label>

    <select
        id="origin_country_id"
        name="origin_country_id"
        class="form-select"
        disabled
    >
        <option value="">
            Selecciona primero un continente
        </option>
    </select>
</div>


                    {{-- Ciudad de salida --}}
<div class="col-md-4">
    <label
        class="form-label"
        for="origin_city_id"
    >
        Ciudad de salida
    </label>

    <select
        id="origin_city_id"
        name="origin_city_id"
        class="form-select @error('origin_city_id') is-invalid @enderror"
        disabled
    >
        <option value="">
            Selecciona primero un país
        </option>
    </select>

    <x-admin.alerta-input
        name="origin_city_id"
    />
</div>


                    <div class="col-12">
                        <label class="form-label" for="description">
                            Descripción
                        </label>
                        <textarea
                            id="description"
                            name="description"
                            class="form-control @error('description') is-invalid @enderror"
                            rows="4"
                        >
                            {{ old('description') }}
                        </textarea>
                    </div>

                    <div class="col-12">
                        <label class="form-label">
                            Continentes visitados
                        </label>

                        <div class="row" id="visited-continents-container">
                            @foreach ($destinations->where('type', 'continente') as $continent)
                                <div class="col-6 col-md-3">
                                    <div class="form-check">
                                        <input
                                            type="checkbox"
                                            class="form-check-input js-visited-continent"
                                            id="visited-continent-{{ $continent->id }}"
                                            name="visited_continent_ids[]"
                                            value="{{ $continent->id }}"
                                            @checked(
                                                in_array(
                                                    $continent->id,
                                                    old('visited_continent_ids', [])
                                                )
                                            )
                                        >

                                        <label
                                            class="form-check-label"
                                            for="visited-continent-{{ $continent->id }}"
                                        >
                                            {{ $continent->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label">
                            Países visitados
                        </label>

                        <div
                            id="visited-countries-container"
                            class="row"
                        >
                            <div class="col-12">
                                <p class="text-muted mb-0">
                                    Selecciona primero uno o más continentes.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label">
                            Ciudades visitadas
                        </label>

                        <div
                            id="visited-cities-container"
                            class="row"
                        >
                            <div class="col-12">
                                <p class="text-muted mb-0">
                                    Selecciona primero uno o más países.
                                </p>
                            </div>
                        </div>

                        @error('visited_destination_ids')
                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>
                        @enderror

                        @error('visited_destination_ids.*')
                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label
                            class="form-label"
                            for="first_destination_id"
                        >
                            Primer destino
                        </label>

                        <select
                            id="first_destination_id"
                            name="first_destination_id"
                            class="form-select @error('first_destination_id') is-invalid @enderror"
                            disabled
                        >
                            <option value="">
                                Selecciona primero las ciudades visitadas
                            </option>
                        </select>

                        <x-admin.alerta-input
                            name="first_destination_id"
                        />
                    </div>

                    <div class="col-md-6">
                        <label
                            class="form-label"
                            for="last_destination_id"
                        >
                            Último destino
                        </label>

                        <select
                            id="last_destination_id"
                            name="last_destination_id"
                            class="form-select @error('last_destination_id') is-invalid @enderror"
                            disabled
                        >
                            <option value="">
                                Selecciona primero las ciudades visitadas
                            </option>
                        </select>

                        <x-admin.alerta-input
                            name="last_destination_id"
                        />
                    </div>

                    <div class="col-4">
                        <label class="form-label" for="price_from">
                            Precio
                        </label>
                        <input
                            type="number"
                            id="price_from"
                            name="price_from"
                            class="form-control @error('price_from') is-invalid @enderror"
                            value="{{ old('price_from') }}"
                        />

                        <x-admin.alerta-input 
                            name="price_from"
                        />
                    </div>

                    <div class="col-4">
                        <label class="form-label" for="taxes_from">
                            Impuesto
                        </label>
                        <input
                            type="number"
                            id="taxes_from"
                            name="taxes_from"
                            class="form-control @error('taxes_from') is-invalid @enderror"
                            value="{{ old('taxes_from') }}"
                        />

                        <x-admin.alerta-input 
                            name="taxes_from"
                        />
                    </div>

                    <div class="col-md-4">
                        <label class="form-label" for="currency">
                            Moneda
                        </label>
                        <select
                            id="currency"
                            name="currency"
                            class="form-select @error('currency') is-invalid @enderror"
                        >
                            <option value="">
                                --- Selección ---
                            </option>
                            <option 
                                value="MXN"
                                @selected(old('currency') === 'MXN')
                            >
                                MXN
                            </option>
                            <option 
                                value="USD"
                                @selected(old('currency') === 'USD')
                            >
                                USD
                            </option>
                            <option 
                                value="eur"
                                @selected(old('currency') === 'EUR')
                            >
                                EUR
                            </option>
                        </select>

                        <x-admin.alerta-input 
                            name="currency"
                        />
                    </div>

                    <div class="col-md-4">
                        <label class="form-label" for="room_type">
                            Tipo de habitación
                        </label>
                        <select
                            id="room_type"
                            name="room_type"
                            class="form-select @error('room_type') is-invalid @enderror"
                        >
                            <option value="">
                                --- Selección ---
                            </option>
                            <option 
                                value="sencilla"
                                @selected(old('room_type') === 'sencilla')
                            >
                                Sencilla
                            </option>
                            <option 
                                value="doble"
                                @selected(old('room_type') === 'doble')
                            >
                                Doble
                            </option>
                            <option 
                                value="triple"
                                @selected(old('room_type') === 'triple')
                            >
                                Triple
                            </option>
                            <option 
                                value="familiar"
                                @selected(old('room_type') === 'familiar')
                            >
                                Familiar
                            </option>
                        </select>

                        <x-admin.alerta-input 
                            name="room_type"
                        />
                    </div>

                    <div class="col-4">
                        <label class="form-label" for="valid_from">
                            Inicio de Vigencia
                        </label>
                        <input
                            type="date"
                            id="valid_from"
                            name="valid_from"
                            class="form-control @error('valid_from') is-invalid @enderror"
                            value="{{ old('valid_from') }}"
                        />

                        <x-admin.alerta-input 
                            name="valid_from"
                        />
                    </div>

                    <div class="col-4">
                        <label class="form-label" for="valid_until">
                            Fin de Vigencia
                        </label>
                        <input
                            type="date"
                            id="valid_until"
                            name="valid_until"
                            class="form-control @error('valid_until') is-invalid @enderror"
                            value="{{ old('valid_until') }}"
                        />

                        <x-admin.alerta-input 
                            name="valid_until"
                        />
                    </div>

                    <div class="form-check form-switch">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            role="switch"
                            id="includes_flight"
                            name="includes_flight"
                            value="1"
                            @checked(old('includes_flight'))
                        />
                        <label class="form-label" for="includes_flight">
                            Incluye Vuelo
                        </label>
                    </div>
                    <div class="col-4">
                        <label class="form-label" for="image">
                            Imagen (Recomendado: 581x660 px)
                        </label>
                        <input 
                            type="file"
                            name="image"
                            id="image"
                            accept=".jpg,.jpeg,.png,.webp" 
                            class="form-control @error('image') is-invalid @enderror"  
                        />
                    </div>
                    <div class="col-4">
                        <label class="form-label" for="pdf">
                            PDF
                        </label>
                        <input 
                            type="file"
                            name="pdf"
                            id="pdf"
                            accept=".pdf" 
                            class="form-control @error('pdf') is-invalid @enderror" 
                        />
                    </div>

                    <div class="col-md-4">
                        <label class="form-label" for="status">
                            Publicación
                        </label>
                        <select
                            id="status"
                            name="status"
                            class="form-select @error('status') is-invalid @enderror"
                        >
                            <option 
                                value="draft"
                                @selected(old('status') === 'draft')
                            >
                                Borrador
                            </option>
                            <option 
                                value="archived"
                                @selected(old('status') === 'archived')
                            >
                                Archivado
                            </option>
                            <option 
                                value="published"
                                @selected(old('status') === 'published')
                            >
                                Publicar
                            </option>
                        </select>

                        <x-admin.alerta-input 
                            name="status"
                        />
                    </div>

                    <div class="col-3">
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-plus me-1" aria-hidden="true"></i>
                            Crear
                        </button>
                    </div>
                </form>
                {{-- Formulario Fin  --}}
            </div>
            <div class="card-footer d-flex gap-2">
                <a 
                    href="#"
                    class="btn btn-outline-danger ms-auto"
                >
                    <i class="bi bi-x-lg me-1" aria-hidden="true"></i>
                    Cancelar
                </a>
            </div>
        </div>
    </div>
</div>
{{-- App Content Fin --}}
       
</main>
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    /*
     * Destinos proporcionados por el controlador:
     * id, name, type y parent_id.
     */
    const destinations = @json($destinations);

    /*
     * Valores anteriores. Sirven para restaurar el formulario
     * cuando Laravel encuentra un error de validación.
     */
    const oldContinentIds = @json(
        old('visited_continent_ids', [])
    ).map(String);

    const oldCountryIds = @json(
        old('visited_country_ids', [])
    ).map(String);

    const oldCityIds = @json(
        old('visited_destination_ids', [])
    ).map(String);

    const oldFirstDestination = String(
        @json(old('first_destination_id', ''))
    );

    const oldLastDestination = String(
        @json(old('last_destination_id', ''))
    );

    const countriesContainer = document.getElementById(
        'visited-countries-container'
    );

    const citiesContainer = document.getElementById(
        'visited-cities-container'
    );

    const firstDestinationSelect = document.getElementById(
        'first_destination_id'
    );

    const lastDestinationSelect = document.getElementById(
        'last_destination_id'
    );

    /*
     * Normalizamos los identificadores porque los valores
     * de los inputs siempre llegan como texto.
     */
    const normalizedDestinations = destinations.map(destination => ({
        ...destination,
        id: String(destination.id),
        parent_id: destination.parent_id === null
            ? null
            : String(destination.parent_id),
    }));

    const destinationsById = new Map(
        normalizedDestinations.map(destination => [
            destination.id,
            destination,
        ])
    );

    let selectedContinentIds = new Set(oldContinentIds);
    let selectedCountryIds = new Set(oldCountryIds);
    let selectedCityIds = new Set(oldCityIds);
    let firstRender = true;

    /**
     * Busca el ancestro de un destino según su tipo.
     *
     * Esto permite encontrar el país de Roma aunque entre
     * Italia y Roma exista una región o estado.
     */
    function findAncestorByType(destinationId, type) {
        let currentDestination = destinationsById.get(
            String(destinationId)
        );

        const visitedIds = new Set();

        while (
            currentDestination &&
            currentDestination.parent_id !== null
        ) {
            if (visitedIds.has(currentDestination.id)) {
                return null;
            }

            visitedIds.add(currentDestination.id);

            currentDestination = destinationsById.get(
                currentDestination.parent_id
            );

            if (currentDestination?.type === type) {
                return currentDestination;
            }
        }

        return null;
    }

    /**
     * Comprueba si un destino pertenece a alguno de los
     * destinos padres seleccionados.
     */
    function belongsToAny(destinationId, parentIds) {
        let currentDestination = destinationsById.get(
            String(destinationId)
        );

        const visitedIds = new Set();

        while (
            currentDestination &&
            currentDestination.parent_id !== null
        ) {
            if (visitedIds.has(currentDestination.id)) {
                return false;
            }

            visitedIds.add(currentDestination.id);

            if (parentIds.has(currentDestination.parent_id)) {
                return true;
            }

            currentDestination = destinationsById.get(
                currentDestination.parent_id
            );
        }

        return false;
    }

    function escapeHtml(value) {
        const element = document.createElement('div');
        element.textContent = value;

        return element.innerHTML;
    }

    function emptyMessage(message) {
        return `
            <div class="col-12">
                <p class="text-muted mb-0">
                    ${escapeHtml(message)}
                </p>
            </div>
        `;
    }

    function checkboxHtml(
        destination,
        prefix,
        name,
        cssClass,
        checked
    ) {
        return `
            <div class="col-6 col-md-3">
                <div class="form-check">
                    <input
                        type="checkbox"
                        class="form-check-input ${cssClass}"
                        id="${prefix}-${destination.id}"
                        name="${name}"
                        value="${destination.id}"
                        ${checked ? 'checked' : ''}
                    >

                    <label
                        class="form-check-label"
                        for="${prefix}-${destination.id}"
                    >
                        ${escapeHtml(destination.name)}
                    </label>
                </div>
            </div>
        `;
    }

    /**
     * Restaura los continentes y países basándose en las
     * ciudades seleccionadas anteriormente.
     */
    oldCityIds.forEach(cityId => {
        const country = findAncestorByType(cityId, 'pais');

        if (country) {
            selectedCountryIds.add(country.id);

            const continent = findAncestorByType(
                country.id,
                'continente'
            );

            if (continent) {
                selectedContinentIds.add(continent.id);
            }
        }
    });

    oldCountryIds.forEach(countryId => {
        const continent = findAncestorByType(
            countryId,
            'continente'
        );

        if (continent) {
            selectedContinentIds.add(continent.id);
        }
    });

    document
        .querySelectorAll('.js-visited-continent')
        .forEach(checkbox => {
            checkbox.checked = selectedContinentIds.has(
                checkbox.value
            );

            checkbox.addEventListener('change', function () {
                selectedContinentIds = new Set(
                    Array.from(
                        document.querySelectorAll(
                            '.js-visited-continent:checked'
                        )
                    ).map(input => input.value)
                );

                renderCountries();
            });
        });

    function renderCountries() {
        if (selectedContinentIds.size === 0) {
            selectedCountryIds.clear();
            selectedCityIds.clear();

            countriesContainer.innerHTML = emptyMessage(
                'Selecciona primero uno o más continentes.'
            );

            citiesContainer.innerHTML = emptyMessage(
                'Selecciona primero uno o más países.'
            );

            renderFirstAndLastDestinations();

            return;
        }

        const countries = normalizedDestinations
            .filter(destination => {
                return destination.type === 'pais' &&
                    belongsToAny(
                        destination.id,
                        selectedContinentIds
                    );
            })
            .sort((first, second) => {
                return first.name.localeCompare(
                    second.name,
                    'es'
                );
            });

        const availableCountryIds = new Set(
            countries.map(country => country.id)
        );

        selectedCountryIds = new Set(
            Array.from(selectedCountryIds).filter(countryId => {
                return availableCountryIds.has(countryId);
            })
        );

        if (countries.length === 0) {
            countriesContainer.innerHTML = emptyMessage(
                'No existen países registrados para los continentes seleccionados.'
            );

            selectedCityIds.clear();
            renderCities();

            return;
        }

        countriesContainer.innerHTML = countries
            .map(country => {
                return checkboxHtml(
                    country,
                    'visited-country',
                    'visited_country_ids[]',
                    'js-visited-country',
                    selectedCountryIds.has(country.id)
                );
            })
            .join('');

        document
            .querySelectorAll('.js-visited-country')
            .forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    selectedCountryIds = new Set(
                        Array.from(
                            document.querySelectorAll(
                                '.js-visited-country:checked'
                            )
                        ).map(input => input.value)
                    );

                    renderCities();
                });
            });

        renderCities();
    }

    function renderCities() {
        if (selectedCountryIds.size === 0) {
            selectedCityIds.clear();

            citiesContainer.innerHTML = emptyMessage(
                'Selecciona primero uno o más países.'
            );

            renderFirstAndLastDestinations();

            return;
        }

        /*
         * No se revisa únicamente parent_id.
         * belongsToAny() permite que exista:
         *
         * país → región → estado → ciudad
         */
        const cities = normalizedDestinations
            .filter(destination => {
                return destination.type === 'ciudad' &&
                    belongsToAny(
                        destination.id,
                        selectedCountryIds
                    );
            })
            .sort((first, second) => {
                return first.name.localeCompare(
                    second.name,
                    'es'
                );
            });

        const availableCityIds = new Set(
            cities.map(city => city.id)
        );

        selectedCityIds = new Set(
            Array.from(selectedCityIds).filter(cityId => {
                return availableCityIds.has(cityId);
            })
        );

        if (cities.length === 0) {
            citiesContainer.innerHTML = emptyMessage(
                'No existen ciudades registradas para los países seleccionados.'
            );

            renderFirstAndLastDestinations();

            return;
        }

        citiesContainer.innerHTML = cities
            .map(city => {
                return checkboxHtml(
                    city,
                    'visited-city',
                    'visited_destination_ids[]',
                    'js-visited-city',
                    selectedCityIds.has(city.id)
                );
            })
            .join('');

        document
            .querySelectorAll('.js-visited-city')
            .forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    selectedCityIds = new Set(
                        Array.from(
                            document.querySelectorAll(
                                '.js-visited-city:checked'
                            )
                        ).map(input => input.value)
                    );

                    renderFirstAndLastDestinations();
                });
            });

        renderFirstAndLastDestinations();
    }

    function renderFirstAndLastDestinations() {
        const selectedCities = normalizedDestinations
            .filter(destination => {
                return destination.type === 'ciudad' &&
                    selectedCityIds.has(destination.id);
            })
            .sort((first, second) => {
                return first.name.localeCompare(
                    second.name,
                    'es'
                );
            });

        const currentFirstDestination =
            firstDestinationSelect.value ||
            (firstRender ? oldFirstDestination : '');

        const currentLastDestination =
            lastDestinationSelect.value ||
            (firstRender ? oldLastDestination : '');

        fillDestinationSelect(
            firstDestinationSelect,
            selectedCities,
            currentFirstDestination
        );

        fillDestinationSelect(
            lastDestinationSelect,
            selectedCities,
            currentLastDestination
        );

        /*
         * Si solamente se seleccionó una ciudad,
         * automáticamente será el primer y último destino.
         */
        if (selectedCities.length === 1) {
            firstDestinationSelect.value =
                selectedCities[0].id;

            lastDestinationSelect.value =
                selectedCities[0].id;
        }

        firstRender = false;
    }

    function fillDestinationSelect(
        select,
        cities,
        selectedValue
    ) {
        select.innerHTML = '';

        const initialOption = document.createElement('option');
        initialOption.value = '';

        if (cities.length === 0) {
            initialOption.textContent =
                'Selecciona primero las ciudades visitadas';

            select.disabled = true;
        } else {
            initialOption.textContent =
                '--- Seleccionar ---';

            select.disabled = false;
        }

        select.appendChild(initialOption);

        cities.forEach(city => {
            const option = document.createElement('option');

            option.value = city.id;
            option.textContent = city.name;

            if (city.id === String(selectedValue)) {
                option.selected = true;
            }

            select.appendChild(option);
        });
    }

    /*
     * Carga inicial.
     */
    renderCountries();
});
</script>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const departureDestinations = @json($destinations);

    const continentSelect = document.getElementById(
        'origin_continent_id'
    );

    const countrySelect = document.getElementById(
        'origin_country_id'
    );

    const citySelect = document.getElementById(
        'origin_city_id'
    );

    let oldContinentId = String(
        @json(old('origin_continent_id', ''))
    );

    let oldCountryId = String(
        @json(old('origin_country_id', ''))
    );

    const oldCityId = String(
        @json(old('origin_city_id', ''))
    );

    /*
     * Convertimos todos los identificadores a string porque
     * los valores de un select siempre son cadenas de texto.
     */
    const normalizedDepartureDestinations =
        departureDestinations.map(destination => ({
            ...destination,
            id: String(destination.id),

            parent_id: destination.parent_id === null
                ? null
                : String(destination.parent_id),
        }));

    const departureDestinationsById = new Map(
        normalizedDepartureDestinations.map(destination => [
            destination.id,
            destination,
        ])
    );

    /**
     * Revisa si un destino pertenece a un destino padre.
     *
     * Funciona aunque la estructura sea:
     * país → región → estado → ciudad
     */
    function belongsToDepartureParent(
        destinationId,
        parentId
    ) {
        let currentDestination =
            departureDestinationsById.get(
                String(destinationId)
            );

        const checkedIds = new Set();

        while (
            currentDestination &&
            currentDestination.parent_id !== null
        ) {
            if (checkedIds.has(currentDestination.id)) {
                return false;
            }

            checkedIds.add(currentDestination.id);

            if (
                currentDestination.parent_id ===
                String(parentId)
            ) {
                return true;
            }

            currentDestination =
                departureDestinationsById.get(
                    currentDestination.parent_id
                );
        }

        return false;
    }

    /**
     * Busca el país o continente al que pertenece una ciudad.
     */
    function findDepartureAncestor(destinationId, type) {
        let currentDestination =
            departureDestinationsById.get(
                String(destinationId)
            );

        const checkedIds = new Set();

        while (
            currentDestination &&
            currentDestination.parent_id !== null
        ) {
            if (checkedIds.has(currentDestination.id)) {
                return null;
            }

            checkedIds.add(currentDestination.id);

            currentDestination =
                departureDestinationsById.get(
                    currentDestination.parent_id
                );

            if (currentDestination?.type === type) {
                return currentDestination;
            }
        }

        return null;
    }

    function fillDepartureSelect(
        select,
        destinations,
        placeholder,
        selectedId = ''
    ) {
        select.innerHTML = '';

        const initialOption =
            document.createElement('option');

        initialOption.value = '';
        initialOption.textContent = placeholder;

        select.appendChild(initialOption);

        destinations.forEach(destination => {
            const option = document.createElement('option');

            option.value = destination.id;
            option.textContent = destination.name;

            if (
                destination.id === String(selectedId)
            ) {
                option.selected = true;
            }

            select.appendChild(option);
        });

        select.disabled = destinations.length === 0;
    }

    function loadDepartureCountries(
        selectedCountryId = ''
    ) {
        const continentId = continentSelect.value;

        if (!continentId) {
            fillDepartureSelect(
                countrySelect,
                [],
                'Selecciona primero un continente'
            );

            fillDepartureSelect(
                citySelect,
                [],
                'Selecciona primero un país'
            );

            return;
        }

        const countries =
            normalizedDepartureDestinations
                .filter(destination => {
                    return destination.type === 'pais' &&
                        belongsToDepartureParent(
                            destination.id,
                            continentId
                        );
                })
                .sort((first, second) => {
                    return first.name.localeCompare(
                        second.name,
                        'es'
                    );
                });

        fillDepartureSelect(
            countrySelect,
            countries,
            '--- Seleccionar país ---',
            selectedCountryId
        );

        if (countrySelect.value) {
            loadDepartureCities(oldCityId);
        } else {
            fillDepartureSelect(
                citySelect,
                [],
                'Selecciona primero un país'
            );
        }
    }

    function loadDepartureCities(
        selectedCityId = ''
    ) {
        const countryId = countrySelect.value;

        if (!countryId) {
            fillDepartureSelect(
                citySelect,
                [],
                'Selecciona primero un país'
            );

            return;
        }

        const cities =
            normalizedDepartureDestinations
                .filter(destination => {
                    return destination.type === 'ciudad' &&
                        belongsToDepartureParent(
                            destination.id,
                            countryId
                        );
                })
                .sort((first, second) => {
                    return first.name.localeCompare(
                        second.name,
                        'es'
                    );
                });

        fillDepartureSelect(
            citySelect,
            cities,
            '--- Seleccionar ciudad ---',
            selectedCityId
        );
    }

    /*
     * Si Laravel devolvió origin_city_id, buscamos
     * automáticamente su país y su continente.
     */
    if (oldCityId) {
        const oldCountry = findDepartureAncestor(
            oldCityId,
            'pais'
        );

        if (oldCountry) {
            oldCountryId = oldCountry.id;

            const oldContinent = findDepartureAncestor(
                oldCountry.id,
                'continente'
            );

            if (oldContinent) {
                oldContinentId = oldContinent.id;
            }
        }
    }

    if (oldCountryId && !oldContinentId) {
        const oldContinent = findDepartureAncestor(
            oldCountryId,
            'continente'
        );

        if (oldContinent) {
            oldContinentId = oldContinent.id;
        }
    }

    /*
     * Eventos.
     */
    continentSelect.addEventListener(
        'change',
        function () {
            oldCountryId = '';
            loadDepartureCountries();
        }
    );

    countrySelect.addEventListener(
        'change',
        function () {
            loadDepartureCities();
        }
    );

    /*
     * Carga inicial y restauración después de errores.
     */
    if (oldContinentId) {
        continentSelect.value = oldContinentId;

        loadDepartureCountries(oldCountryId);

        if (oldCountryId) {
            countrySelect.value = oldCountryId;
            loadDepartureCities(oldCityId);
        }
    }
});
</script>
@endpush

@endsection