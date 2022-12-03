<form class="c-form">
    @csrf
    @method('POST')
    <h4>Solicitud de contacto</h4>
    <hr>
    <div id="fields" class="row">
      <div class="col-12 col-md-6 mb-3">
        <input type="text" class="form-control c-form__input" id="name" aria-describedby="name" placeholder="Nombre">
      </div>
      <div class="col-12 col-md-6 mb-3">
        <input type="text" class="form-control c-form__input" id="phone" aria-describedby="phone" placeholder="Teléfono">
      </div>
      <div class="col-12 mb-3">
        <input type="text" class="form-control c-form__input" id="email" aria-describedby="email" placeholder="Email">
      </div>
    </div>
    <div id="success" class="alert alert-success alert-dismissible d-none"></div>
    <div id="error" class="alert alert-danger alert-dismissible d-none"></div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@push('scripts')
    <script>
      $('.c-form').submit(function (e) {
        e.preventDefault();
        const data = new FormData(e.target);
        $.ajax({
          method: 'post',
          url: '{{ route("contacts.store") }}',
          headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
          },
          data: {
            name: data.get('name'),
            phone: data.get('phone'),
            email: data.get('email'),
          },
          success: function (response) {
            if (response.status === 'ok') {
              $('#success').removeClass('d-none');
              $('#success').html('<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' + response.message);
              return;
            }

            const errors = response.errors;
            for (const key in errors) {
              $('#' + key).addClass('is-invalid');
            }
            $('#error').removeClass('d-none');
            $('#error').html('<button type="button" class="btn-close" data-bs-dismiss="alert"></button>' + response.message);
          },
        });
      });
    </script>
@endpush