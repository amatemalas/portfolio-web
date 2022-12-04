@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2 class="my-3">{{ __('Dashboard') }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-3">
                            <a href="#" class="btn btn-primary w-100 py-5">
                                <div class="d-inline-block">
                                    <i class="fa-solid fa-lg fa-user"></i> Biografía
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="btn btn-primary w-100 py-5">
                                <div class="d-inline-block">
                                    <i class="fa-solid fa-lg fa-paperclip"></i> Portfolio
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="btn btn-primary w-100 py-5">
                                <div class="d-inline-block">
                                    <i class="fa-solid fa-lg fa-code"></i> Competencias
                                </div>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="{{ route('contacts.index') }}" class="btn btn-primary w-100 py-5">
                                <div class="d-inline-block">
                                    <i class="fa-solid fa-lg fa-paper-plane"></i> Contactos
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
