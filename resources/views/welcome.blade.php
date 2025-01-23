@extends('layouts.app')

@section('content')
    <div class="container mx-auto text-center py-12">
        <h1 class="text-5xl font-bold text-indigo-700 mb-4">Benvingut a Laravel Iris ASIX</h1>
        <p class="text-xl text-gray-600 mb-6">Projecte CRUD de llibres i Sonic the Hedgehog.</p>
    </div>
@endsection


@push('styles')
    <style>
        /* Estils per als enllaços de navegació */
        .nav-link {
            display: inline-flex;
            align-items: center;
            padding: 8px 16px;
            font-size: 1rem;
            font-weight: 500;
            text-decoration: none;
            color: #4b5563; /* Text gris fosc */
            border: 1px solid transparent;
            border-radius: 4px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Efecte al passar el ratolí */
        .nav-link:hover {
            background-color: #e5e7eb; /* Fons gris suau */
            color: #1f2937; /* Text més fosc */
            border-color: #d1d5db; /* Línia de contorn gris clar */
        }

        /* Efecte en la selecció (quan el botó està activat) */
        .nav-link:active {
            background-color: #d1d5db; /* Fons gris clar */
            color: #1f2937; /* Text fosc */
            transform: scale(0.98); /* Efecte de contracció */
        }
    </style>
@endpush

