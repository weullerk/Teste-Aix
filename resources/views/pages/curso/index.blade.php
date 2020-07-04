@extends('layouts.master')

@section('title') Alunos @endsection

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}">
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Cursos @endslot
        @slot('li_1') Cursos @endslot
        @slot('li_2') Lista de Cursos @endslot
    @endcomponent


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cursos
                        <a href="{{ config('app.url') }}/cursos/cadastrar"><button type="button" class="btn-sm btn btn-primary waves-effect waves-light">Adicionar</button></a>
                    </h4>
                    <p class="card-title-desc">Todos os cursos registrados e suas informações relevantes se encontram na tabela abaixo.</p>

                    <table id="datatable" class="table table-centered table-nowrap table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="thead-light">
                        <tr>
                            <th style="width: 70px;">#</th>
                            <th>Nome</th>
                            <th>Situação</th>
                            <th style="width: 20%;">Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cursos as $curso)
                            <tr>
                                <td>{{ $curso->matricula }}</td>
                                <td>{{ $curso->curso }}</td>
                                <td>{{ $curso->situacao }}</td>
                                <td>
                                    <ul class="list-inline font-size-20 contact-links mb-0">
                                        <li class="list-inline-item px-2">
                                            <a href="{{ config('app.url') }}/cursos/editar/{{ $curso->id }}" data-toggle="tooltip" data-placement="top" title="Editar"><i class="bx bx-pencil"></i></a>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <a href="{{ config('app.url') }}/cursos/deletar/{{ $curso->id }}" data-toggle="tooltip" data-placement="top" title="Deletar"><i class="bx bx-trash"></i></a>
                                        </li>
                                    </ul>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

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
