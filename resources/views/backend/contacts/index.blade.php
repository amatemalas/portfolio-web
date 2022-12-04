@extends('layouts.backend')

@section('title', 'Contactos | Área privada')

@section('content')
    <div class="container mt-5">
        <div>
            <div class="card">
            <div class="card-header"><h2 class="my-3">Bandeja de entrada</h2></div>
            <div class="card-body my-4">
                <div class="table-responsive">
                    <table class="table table-striped" id="js-datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Fecha recibido</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->created_at }}</td>
                                <td>
                                    {{-- <a href="{{ route('contacts.show',['contact' => $contact->id]) }}" class="btn btn-icon waves-effect waves-light">
                                        <span class="fa fa-eye"></span>
                                    </a> --}}
        
                                    <form action="{{route('contacts.destroy', ['contact' => $contact->id])}}"
                                          class="d-inline" data-element="el usuario">
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-icon waves-effect waves-light js-submit-deleterow">
                                            <span class="fa fa-trash"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                    {{-- @if($contacts->lastPage() > 1)
                        <ul class="pagination">
                            @if($contacts->previousPageUrl())
                                <li class="page-item disabled">
                                    <a class="page-link" href="{{ $contacts->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Anterior</a>
                                </li>
                            @endif
                            @for($i=1; $i <= $contacts->lastPage(); $i++)
                                <li class="page-item {{ $i == $contacts->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $contacts->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if($contacts->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $contacts->nextPageUrl() }}">Siguiente</a>
                                </li>
                            @endif
                        </ul>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @push('scripts')
    <script>
        $('.pagination a').click(function (e) {
            e.preventDefault();
            const url = new URL($(this).attr('href'));
            $.ajax({
                url: "{{ route('contacts.paginate') }}/" + url.searchParams.get('page'),
                type : 'get',
                success: function(response) {
                    $('body').html(response);
                },
            });
        });
    </script>
@endpush --}}
