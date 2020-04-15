@extends('admin.layout.app')

@section('content')
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
              <h1>Piatti</h1>
              <a href="/admin/ristorante_piatti/create" >
                  <button
                      type="button"
                      style="margin-bottom: 2rem"
                      class="btn btn-primary">
                      Aggiungi
                  </button>
              </a>

          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
@endsection
