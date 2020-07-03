@extends('layouts.master')

@section('title') Curso @endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') @if (isset($curso)) Editar @else Cadastrar @endif @endslot Curso  @endslot
        @slot('li_1') Curso @endslot
        @slot('li_2') @if (isset($curso)) Editar @else Cadastrar @endif @endslot
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
                    <form method="post" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="form-control" class="col-md-2 col-form-label">Curso</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $curso->curso ?? '' }}" name="curso" id="curso">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="matricula" class="col-md-2 col-form-label">Matrícula</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="{{ $curso->matricula ?? '' }}" name="matricula" id="matricula">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="situacao">Situação</label>
                            <div class="col-md-10">
                                <select name="situacao" id="situacao" class="custom-select">
                                    <option>Selecionar</option>
                                    <option {{ isset($curso) && $curso->situacao == 1 ? 'selected' : '' }} value="1">Ativo</option>
                                    <option {{ isset($curso) && $curso->situacao == 2 ? 'selected' : '' }} value="2">Inativo</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light mt-4">@if (isset($curso)) Editar @else Cadastrar @endif</button>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

@endsection

