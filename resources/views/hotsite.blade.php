@push('styles')
    <link rel="stylesheet" href="{{ url('css/hotsite.css') }}">
@endpush
@push('scripts')
    <script defer src="{{ url('js/selectHandler.js') }}"></script>
    <script defer src="{{ url('js/phoneMask.js') }}"></script>
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
                <img src="{{ url('img/text.png') }}" alt="Foto Titulo da Descriçāo do hotsite">
                <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</span>
            <div class="line"><hr></div>
        </article>
        <article class="desc-text">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. aenean non pharetra dui. fusce consectetur lacus non ligula pellentesque maximus. sed porttitor risus lacus, eu porta metus molestie nec.</p>
        </article>
    </section>
    <section id="contact" class="contact">
        <div class="form">
            @if (isset($message))
                <h3>{{ $message }}</h3>
            @else
                <h3>realize o teste de cadastro</h3>
                <form action="/#contact" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nome" placeholder="nome" value="{{ old('nome') }}">
                        @error('nome')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="telefone" type="tel" name="telefone" placeholder="telefone" maxlength="15" value="{{ old('telefone') }}">
                        @error('telefone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-inline d-flex justify-content-between mb-3">
                        <select id="estado" name="estado">
                            <option disabled selected>estado</option>
                        </select>
                        <select id="cidade" name="cidade">
                            <option disabled selected>cidade</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <span class="d-block">horário para contato:</span>
                        <div class="contact-time">
                            <input id="manha" type="radio" name="horario_contato" value="Manhā">
                            <label for="manha" class="mr-3">manhā</label>
                            <input id="tarde" type="radio" name="horario_contato" value="Tarde">
                            <label for="tarde" class="mr-3">tarde</label>
                            <input id="noite" type="radio" name="horario_contato" value="Noite">
                            <label for="noite">noite</label>
                        </div>
                    </div>
                    <button type="submit">enviar</button>
                </form>
            @endif
        </div>
    </section>
@endsection