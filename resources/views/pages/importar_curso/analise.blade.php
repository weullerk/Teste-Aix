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

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="thead-light">
                            <tr>
                                <th style="width: 70px;">#</th>
                                <th>Curso</th>
                                <th style="width: 70px;">Importar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cursos_temporarios as $curso)
                                <tr>
                                    <td>{{ $curso->matricula }}</td>
                                    <td>{{ $curso->curso }}</td>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="analisar{{ $curso->id }}" name="analisar[]" value="{{ $curso->id }}" {{ $curso->situacao == 1 ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="analisar{{ $curso->id }}"></label>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <button type="submit" @if (count($cursos_temporarios) == 0) disabled @endif class="btn btn-primary btn-lg btn-block waves-effect waves-light mb-1 mt-4">Importar</button>
{{--                        <button type="submit" class="btn btn-primary waves-effect waves-light">Importar</button>--}}
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
