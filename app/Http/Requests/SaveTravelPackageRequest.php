<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveTravelPackageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'includes_flight' => $this->boolean('includes_flight'),
        ]);
    }

    public function rules(): array
    {
        $travelPackage = $this->route('travelPackage');

        $activeSupplier = Rule::exists('suppliers', 'id')
            ->where(fn ($query) => $query->where('is_active', true));

        $activeCity = Rule::exists('destinations', 'id')
            ->where(
                fn ($query) => $query
                    ->where('type', 'ciudad')
                    ->where('is_active', true)
            );

        $visitedDestinations = $this->input(
            'visited_destination_ids',
            []
        );

        return [
            'code' => [
                'required',
                'string',
                'max:50',
                Rule::unique('travel_packages', 'code')
                    ->ignore($travelPackage?->id),
            ],

            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'supplier_id' => [
                'required',
                'integer',
                $activeSupplier,
            ],

            'scope' => [
                'required',
                Rule::in(['nacional', 'internacional']),
            ],

            'travel_type' => [
                'required',
                Rule::in([
                    'circuito',
                    'crucero',
                    'vacacional',
                    'excursion',
                ]),
            ],

            'days' => [
                'required',
                'integer',
                'min:1',
                'max:365',
            ],

            'nights' => [
                'required',
                'integer',
                'min:0',
                'lte:days',
            ],

            'origin_city_id' => [
                'required',
                'integer',
                $activeCity,
            ],

            'visited_destination_ids' => [
                'required',
                'array',
                'min:1',
            ],

            'visited_destination_ids.*' => [
                'required',
                'integer',
                'distinct',
                $activeCity,
            ],

            'first_destination_id' => [
                'required',
                'integer',
                $activeCity,
                Rule::in($visitedDestinations),
            ],

            'last_destination_id' => [
                'required',
                'integer',
                $activeCity,
                Rule::in($visitedDestinations),
            ],

            'description' => [
                'required',
                'string',
                'max:20000',
            ],

            'price_from' => [
                'required',
                'numeric',
                'min:0',
            ],

            'taxes_from' => [
                'nullable',
                'numeric',
                'min:0',
            ],

            'currency' => [
                'required',
                Rule::in(['MXN', 'USD', 'EUR']),
            ],

            'room_type' => [
                'nullable',
                'string',
                'max:100',
            ],

            'includes_flight' => [
                'required',
                'boolean',
            ],

            'valid_from' => [
                'required',
                'date',
            ],

            'valid_until' => [
                'required',
                'date',
                'after_or_equal:valid_from',
            ],

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],

            'pdf' => [
                'nullable',
                'file',
                'mimes:pdf',
                'max:20480',
            ],

            'status' => [
                'required',
                Rule::in([
                    'draft',
                    'published',
                    'archived',
                ]),
            ],
        ];
    }

    public function attributes(): array
    {
        return [
            'code' => 'código',
            'name' => 'nombre',
            'supplier_id' => 'proveedor',
            'scope' => 'categoría',
            'travel_type' => 'tipo de viaje',
            'days' => 'días',
            'nights' => 'noches',
            'origin_city_id' => 'ciudad de salida',
            'visited_destination_ids' => 'destinos visitados',
            'first_destination_id' => 'primer destino',
            'last_destination_id' => 'último destino',
            'price_from' => 'precio',
            'taxes_from' => 'impuestos',
            'valid_from' => 'inicio de vigencia',
            'valid_until' => 'fin de vigencia',
        ];
    }

    public function messages(): array
    {
        return [
            'first_destination_id.in' =>
                'El primer destino debe formar parte de las ciudades visitadas.',

            'last_destination_id.in' =>
                'El último destino debe formar parte de las ciudades visitadas.',

            'valid_until.after_or_equal' =>
                'La fecha final debe ser igual o posterior a la fecha inicial.',
        ];
    }
}