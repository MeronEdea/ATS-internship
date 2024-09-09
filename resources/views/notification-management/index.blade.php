@extends('layouts.layout')

@section('content')
    @include('notification-management.components.top')
    <div class="container mt-8">
        <div class="row h-100">
            <div class="col-md-7 d-flex flex-column">
                @include('notification-management.components.upload_image')
            </div>
            <div class="col-md-5 d-flex flex-column">
                @include('notification-management.components.notification_history')
            </div>
        </div>
    </div>
@endsection
