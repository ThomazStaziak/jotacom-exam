@push('styles')
@endpush
@push('scripts')
@endpush
@push('page-title')
    Hotsite - Jotacom
@endpush

@extends('layouts.master')

@section('content')
    <div class="banner">
        <img src="{{ url('img/full-begin.jpg') }}" alt="">
    </div>
    <div class="carousel">
        <img src="{{ url('img/carousel-1.jpg') }}" alt="">
    </div>
@endsection