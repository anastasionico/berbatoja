@extends('admin.layout.app')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-9 main-chart">
                    <div class="col-lg-9">
                        <h1>Allergie</h1>
                        <a href="/admin/allergie/create" >
                            <button
                                type="button"
                                style="margin-bottom: 2rem"
                                class="btn btn-primary">
                                Aggiungi
                            </button>
                        </a>
                    </div>

                    @foreach($allergies as $allergy)
                        <div class="col-lg-4 col-md-4 col-sm-4 mb">
                            <div class="content-panel pn">
                                <div id="profile-02">
                                    <div class="user">
                                        <h4 style="color: #22242a">{{ $allergy->name }}</h4>
                                    </div>
                                </div>
                                <div class="centered">
                                    <a href="/admin/allergie/edit/{{ $allergy->id }}" class="btn btn-info d-inline-block">Aggiorna</a>
                                    <form
                                        method="POST"
                                        action="/admin/allergie/{{ $allergy->id }}"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger d-inline-block">Elimina</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /panel -->
                        </div>
                    @endforeach

                </div>
                <!-- /col-lg-3 -->
            </div>
            <!-- /row -->
        </section>
    </section>
@endsection

