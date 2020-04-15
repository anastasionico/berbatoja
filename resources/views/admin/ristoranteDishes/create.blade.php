@extends('admin.layout.app')

@section('content')
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
              <h1>Aggiungi Piatto</h1>

              <form action="/admin/ristorante_piatti/" method="post" enctype="multipart/form-data">
                  @method('POST')
                  @csrf()

                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" name='name' class="form-control" required>
                    </div>

                    <label class="col-sm-2 col-sm-2 control-label">Immagine</label>
                    <div class="col-sm-10">
                        <input type="file" name='img' class="form-control" required>
                    </div>

                    <label class="col-sm-2 col-sm-2 control-label">Descrizione</label>
                    <div class="col-sm-10">
                        <textarea name="description"  class="form-control"></textarea>

                    </div>

                    <label class="col-sm-2 col-sm-2 control-label">Ingredienti</label>
                    <div class="col-sm-10">
                        <input type="text" name='ingredients' class="form-control" required>
                    </div>

                    <label class="col-sm-2 col-sm-2 control-label">Dieta</label>
                    <div class="col-sm-10">
                        <select name='diet_id' class="form-control my-5">
                            @foreach($diets as $diet)
                                <option value="{{ $diet->id }}">{{$diet->name}}</option>
                            @endforeach

                        </select>
                    </div>

                  </div>

                  <button type="submit" class="btn btn-primary">Aggiungi</button>

              </form>
          </div>
        </div>
      </section>
    </section>
@endsection
