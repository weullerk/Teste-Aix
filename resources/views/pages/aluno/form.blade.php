@extends('layouts.master')

@section('title') Alunos @endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') @if (isset($aluno)) Editar @else Cadastrar @endif Aluno  @endslot
        @slot('li_1') Alunos @endslot
        @slot('li_2') @if (isset($aluno)) Editar @else Cadastrar @endif @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    @if (isset($message))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="form-control" class="col-md-2 col-form-label">Nome</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $aluno->nome ?? '' }}" name="nome" id="nome">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="matricula" class="col-md-2 col-form-label">Matrícula</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $aluno->matricula ?? '' }}" name="matricula" id="matricula">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="situacao">Situação</label>
                            <div class="col-md-10">
                                <select name="situacao" id="situacao" class="custom-select">
                                    <option>Selecionar</option>
                                    <option {{ isset($aluno) && $aluno->situacao == 1 ? 'selected' : '' }} value="1">Ativo</option>
                                    <option {{ isset($aluno) && $aluno->situacao == 2 ? 'selected' : '' }} value="2">Inativo</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cep" class="col-md-2 col-form-label">CEP</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $aluno->cep ?? '' }}" name="cep" id="cep">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="logradouro" class="col-md-2 col-form-label">Logradouro</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $aluno->logradouro ?? '' }}" name="logradouro" id="logradouro">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numero" class="col-md-2 col-form-label">Número</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $aluno->numero ?? '' }}" name="numero" id="numero">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="complemento" class="col-md-2 col-form-label">Complemento</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $aluno->complemento ?? '' }}" name="complemento" id="complemento">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bairro" class="col-md-2 col-form-label">Bairro</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $aluno->bairro ?? '' }}" name="bairro" id="bairro">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cidade" class="col-md-2 col-form-label">Cidade</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $aluno->cidade ?? '' }}" name="cidade" id="cidade">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="curso">Curso</label>
                            <div class="col-md-10">
                                <select name="curso" id="curso" class="custom-select">
                                    <option selected>Selecionar</option>
                                    @foreach($cursos as $curso)
                                        <option value="{{ $curso->id }}" {{ isset($aluno) && $aluno->curso_id == $curso->id ? 'selected' : '' }}>{{ $curso->curso }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cidade" class="col-md-2 col-form-label">Turma</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $aluno->turma ?? '' }}" name="turma" id="turma">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_matricula" class="col-md-2 col-form-label">Data da matrícula</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" value="{{ $aluno->data_matricula ?? '' }}" name="data_matricula" id="data_matricula">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="customFile" class="col-md-2 col-form-label">Foto do Aluno</label>
                            <div class="col-md-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="foto">
                                    <label class="custom-file-label" for="customFile">Buscar foto</label>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light mt-4">@if (isset($aluno)) Editar @else Cadastrar @endif</button>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->


@endsection

@section('script')
    <!-- js script -->
    <script>
        function fileChange(e) {
            if (e.target.value) {
                let fileName = e.target.value.split("\\");
                $('.custom-file-label').text(fileName[fileName.length-1]);
            }  else {
                $('.custom-file-label').text("Buscar foto");
            }
        }

        function buscaCep(e) {
            let cep = e.target.value.replace(/[^\d]+/gi, "");
            console.log(cep.length);
            if (cep.length == 8) {
                $.getJSON("{{ config('app.cep_service') }}" + cep, function (result) {

                    $('#bairro').val(result.bairro);
                    $('#logradouro').val(result.logradouro);
                    $('#cidade').val(result.cidade);
                    $('#estado').val(result.estado);
                });
            }
        }

        $(document).ready(function() {
            $('#customFile').on('change', fileChange);
            $('#cep').on('change', buscaCep);
        });

    </script>
@endsection
