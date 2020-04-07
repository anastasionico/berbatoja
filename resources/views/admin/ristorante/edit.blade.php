@extends('admin.layout.app')

@section('content')
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
              <h1>Aggiorna dati ristorante</h1>

              <form action="/admin/ristorante/{{ $ristorante->id }}" method="post">
                  @method('PATCH')
                  @csrf()

                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Descrizione</label>
                    <div class="col-sm-10">
                        <textarea name="description" rows="2" cols="50">
                            {{ $ristorante->description }}
                        </textarea>
                      </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Seo Titolo</label>
                    <div class="col-sm-10">
                        <input type="text" name='seo_title' value="{{ $ristorante->seo_title }}" class="form-control">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Seo Descrizione</label>
                      <div class="col-sm-10">
                        <input type="text" name='seo_description' value="{{ $ristorante->seo_description }}" class="form-control">
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Seo Keywords</label>
                      <div class="col-sm-10">
                        <input type="text" name='seo_keywords' value="{{ $ristorante->seo_keywords }}" class="form-control">
                      </div>
                  </div>

                  <button type="submit" class="btn btn-primary">Update</button>

              </form>
          </div>
        </div>
      </section>
    </section>
@endsection
