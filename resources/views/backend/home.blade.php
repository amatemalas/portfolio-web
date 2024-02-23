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

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
