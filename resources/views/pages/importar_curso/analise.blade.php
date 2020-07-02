@extends('layouts.master')

@section('title') Cursos @endsection

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}">
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Importar Cursos @endslot
        @slot('li_1') Importar Cursos @endslot
        @slot('li_2') Análise @endslot
    @endcomponent


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cursos</h4>
                    <p class="card-title-desc">Desmarque os cursos que não deseja incluir.</p>
                    <form action="#">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="thead-light">
                            <tr>
                                <th style="width: 70px;">#</th>
                                <th>Curso</th>
                                <th style="width: 70px;">Importar</th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="analisar" name="analisar[]">
                                        <label class="custom-control-label" for="analisar"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="analisar" name="analisar[]">
                                        <label class="custom-control-label" for="analisar"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="analisar" name="analisar[]">
                                        <label class="custom-control-label" for="analisar"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="analisar" name="analisar[]">
                                        <label class="custom-control-label" for="analisar"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="analisar" name="analisar[]">
                                        <label class="custom-control-label" for="analisar"></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="analisar" name="analisar[]">
                                        <label class="custom-control-label" for="analisar"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>


                            <button type="button" class="btn btn-success btn-lg btn-block waves-effect waves-light mb-1 mt-4">Importar</button>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

@section('script')

    <!-- Plugins js -->
    <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>

    <!-- Init js-->
    <script src="{{ URL::asset('assets/js/pages/datatables.init.js')}}"></script>

@endsection
