@extends('layouts.master')

@section('title') Importar Cursos @endsection

@section('css')
    <!-- Dropzone css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css')}}">
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Importar Cursos  @endslot
        @slot('li_1') Importar Cursos @endslot
        @slot('li_2') Upload @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Importar Cursos</h4>
                    <p class="card-title-desc">Importe novos cursos, caso queira analisar os cursos e selecionar os que serão importados marque na opção abaixo.
                    </p>

                    <div>
                        <form action="#" class="dropzone">

                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                </div>

                                <h4>Arraste os arquivos ou clique para carregar.</h4>
                            </div>
                        </form>
                    </div>

                    <div class="custom-control custom-checkbox mt-4">
                        <input type="checkbox" class="custom-control-input" id="analisar" name="analisar">
                        <label class="custom-control-label" for="analisar">Analisar cursos do arquivo em outra tela?</label>
                    </div>

                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary waves-effect waves-light">Importar cursos</button>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

@section('script')

    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js')}}"></script>

@endsection
