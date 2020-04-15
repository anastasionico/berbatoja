@extends('admin.layout.app')

@section('content')
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
              <h1>Ristorante</h1>
              <h3>{{ $ristorante->description }}</h3>
              <p><b>titolo</b> {{ $ristorante->seo_title }}</p>
              <p><b>descrizione</b> {{ $ristorante->seo_description }}</p>
              <p><b>keywords</b> {{ $ristorante->seo_keywords }}</p>

              a

          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
@endsection
