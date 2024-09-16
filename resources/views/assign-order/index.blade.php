@extends('layouts.layout')

@section('content')
@include('assign-order.components.top')
<div class="container">
    <div class="row">
        <div class="col-md-6 d-flex flex-column">
            <div class="mb-4">
                @include('assign-order.components.incoming_orders')
            </div>
            <div class="mt-auto">
                @include('assign-order.components.guest_orders')
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                @foreach ($terminals as $terminalNumber => $drivers)
                    <div class="col-md-12 mb-3">
                        @include('assign-order.components.terminal', ['terminalNumber' => $terminalNumber, 'drivers' => $drivers])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
