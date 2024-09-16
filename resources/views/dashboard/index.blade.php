@extends('layouts.layout')

@section('content')
@include('assign-order.components.top')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-3">
            @include('dashboard.components.card', ['title' => 'Registered Drivers', 'value' => 126, 'icon' => 'fas fa-users'])
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            @include('dashboard.components.card', ['title' => 'Total Groups', 'value' => 4, 'icon' => 'fas fa-layer-group'])
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            @include('dashboard.components.card', ['title' => 'Terminal 1', 'value' => 56, 'icon' => 'fas fa-terminal'])
        </div>
        <div class="col-lg-3 col-md-6 mb-3">
            @include('dashboard.components.card', ['title' => 'Terminal 2', 'value' => 85, 'icon' => 'fas fa-terminal'])
        </div>
    </div>

    <!-- Graph Section -->
    <div class="row">
        <div class="col-lg-6 mb-5">
            @include('dashboard.components.total_trip_graph', ['title' => 'Total Trips', 'id' => 'totalTripsGraph'])
        </div>
        <div class="col-lg-6 mb-5">
            @include('dashboard.components.income_graph', ['title' => 'Income', 'id' => 'incomeGraph'])
        </div>
    </div>

    <!-- Driver List -->
    <div class="row">
        <div class="col-lg-12">
            @include('dashboard.components.all_drivers', ['title' => 'All Drivers', 'drivers' => $drivers])
        </div>
    </div>
</div>

@endsection
