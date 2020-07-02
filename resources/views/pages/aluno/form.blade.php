@extends('layouts.master')

@section('title') Alunos @endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Alunos  @endslot
        @slot('li_1') Alunos @endslot
        @slot('li_2') Cadastrar @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Cadastrar Aluno</h4>

                    <form action="#">

                        <div class="form-group row">
                            <label for="form-control" class="col-md-2 col-form-label">Nome</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" name="nome" id="nome">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="matricula" class="col-md-2 col-form-label">Matrícula</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" name="matricula" id="matricula">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="situacao">Situação</label>
                            <div class="col-md-10">
                                <select name="situacao" id="situacao" class="custom-select">
                                    <option selected>Selecionar</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cep" class="col-md-2 col-form-label">CEP</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" name="cep" id="cep">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="logradouro" class="col-md-2 col-form-label">Logradouro</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" name="logradouro" id="logradouro">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="numero" class="col-md-2 col-form-label">Número</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" name="numero" id="numero">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="complemento" class="col-md-2 col-form-label">Complemento</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" name="complemento" id="complemento">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bairro" class="col-md-2 col-form-label">Bairro</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" name="bairro" id="bairro">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cidade" class="col-md-2 col-form-label">Cidade</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" name="cidade" id="cidade">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="curso">Curso</label>
                            <div class="col-md-10">
                                <select name="curso" id="curso" class="custom-select">
                                    <option selected>Selecionar</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cidade" class="col-md-2 col-form-label">Turma</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" name="turma" id="turma">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="data_matricula" class="col-md-2 col-form-label">Data da matrícula</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" value="2019-08-19" name="data_matricula" id="data_matricula">
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary waves-effect waves-light mt-4">Cadastrar</button>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->


@endsection
