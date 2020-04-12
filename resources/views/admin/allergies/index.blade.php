@extends('admin.layout.app')

@section('content')
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
              <h1>Allergie</h1>
              <a href="/admin/allergie/create">
                  <button type="button" class="btn btn-primary">Aggiungi</button>
              </a>


              @foreach($allergies as $allergy)
                <p>{{ $allergy->name }}</p>
              @endforeach

          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
@endsection

