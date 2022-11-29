@extends('layouts.default')

@section('title', 'Inicio | Adrián Matemalas')

@section('content')
    <div class="bg-secondary rounded p-5" data-aos="fade-left" data-aos-delay="500">
        @include('bio.index')

        @include('portfolio.index')

        @include('references.index')
    </div>
@endsection