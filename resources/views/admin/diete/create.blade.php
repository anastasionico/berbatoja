@extends('admin.layout.app')

@section('content')
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
              <h1>Aggiungi Dieta</h1>

              <form action="/admin/diete/" method="post">
                  @method('POST')
                  @csrf()

                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">nome</label>
                    <div class="col-sm-10">
                        <input type="text" name='name' class="form-control" required>
                      </div>
                  </div>

                  <button type="submit" class="btn btn-primary">Aggiungi</button>

              </form>
          </div>
        </div>
      </section>
    </section>
@endsection
