@push('styles')
    <link rel="stylesheet" href="{{ asset('../../css/hotsite.css') }}">
@endpush
@push('scripts')
@endpush
@push('page-title')
    Hotsite - Jotacom
@endpush

@extends('layouts.master')

@section('content')
    <section class="banner">
        <img src="{{ url('img/full-begin.jpg') }}" alt="Foto Banner">
    </section>
    <section class="carousel">
        <img src="{{ url('img/carousel-1.jpg') }}" alt="Foto Carrossel">
    </section>
    <section class="description">
        <article class="desc-title">
            <div class="line"><hr></div>
                <img src="{{ url('img/desc-text.png') }}" alt="Foto Titulo da Descriçāo do hotsite">
                <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
            <div class="line"><hr></div>
        </article>
        <article class="desc-text">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. aenean non pharetra dui. fusce consectetur lacus non ligula pellentesque maximus. sed porttitor risus lacus, eu porta metus molestie nec.</p>
        </article>
    </section>
    <section class="contact">

    </section>
@endsection