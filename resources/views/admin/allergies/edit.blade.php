@extends('admin.layout.app')

@section('content')
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
              <h1>Aggiorna Allergia</h1>

              <form action="/admin/allergie/{{ $allergy->id }}" method="post">
                  @method('PUT')
                  @csrf()

                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">name</label>
                    <div class="col-sm-10">
                        <input type="text" name='name' class="form-control" value="{{ $allergy->name }}" required>
                      </div>
                  </div>

                  <button type="submit" class="btn btn-primary">Aggiorna</button>

              </form>
          </div>
        </div>
      </section>
    </section>
@endsection
