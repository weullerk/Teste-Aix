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

                    <p class="card-title-desc">Importe novos cursos, caso queira analisar os cursos e selecionar os que serão importados marque na opção abaixo.
                    </p>

                    @if (isset($message))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form method="post" enctype="multipart/form-data" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="customFile" class="col-md-2 col-form-label">Arquivo</label>
                            <div class="col-md-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="arquivo">
                                    <label class="custom-file-label" for="customFile">Buscar arquivo</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="analisar" class="col-md-2 col-form-label">Analisar</label>
                            <div class="col-md-10">
                                <div class="custom-control custom-checkbox mt-2">
                                    <input type="checkbox" class="custom-control-input" id="analisar" name="analisar" value="analisar">
                                    <label class="custom-control-label" for="analisar">Analisar cursos do arquivo em outra tela?</label>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light">Importar cursos</button>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

@section('script')
    <!-- js script -->
    <script>
        function fileChange(e) {
            if (e.target.value) {
                let fileName = e.target.value.split("\\");
                $('.custom-file-label').text(fileName[fileName.length-1]);
            }  else {
                $('.custom-file-label').text("Buscar arquivo");
            }
        }

        $(document).ready(function() {
            $('#customFile').on('change', fileChange);
        });

    </script>
@endsection
