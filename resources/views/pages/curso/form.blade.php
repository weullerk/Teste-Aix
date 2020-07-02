@extends('layouts.master')

@section('title') Curso @endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Curso  @endslot
        @slot('li_1') Curso @endslot
        @slot('li_2') Cadastrar @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Cadastrar Curso</h4>

                    <form action="#">

                        <div class="form-group row">
                            <label for="form-control" class="col-md-2 col-form-label">Curso</label>
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

                        <button type="button" class="btn btn-primary waves-effect waves-light mt-4">Cadastrar</button>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->


@endsection
