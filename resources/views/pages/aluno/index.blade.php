@extends('layouts.master')

@section('title') Cursos @endsection

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
                    <h4 class="card-title">Alunos
                        <button type="button" class="btn-sm btn btn-primary waves-effect waves-light">Adicionar</button>
                    </h4>
                    <p class="card-title-desc">Todos os alunos registrados e suas informações relevantes se encontram na tabela abaixo.</p>

                    <table id="datatable"  class="table table-centered table-nowrap table-hover">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" style="width: 70px;">#</th>
                            <th scope="col" style="width: 70px;">Foto</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Situação</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Turma</th>
                            <th scope="col">Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="avatar-xs">
                                    <span class="avatar-title rounded-circle">
                                        D
                                    </span>
                                </div>
                            </td>
                            <td>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">David McHenry</a></h5>
                            </td>
                            <td>Ativo</td>
                            <td>
                                <div>
                                    Engenharia Elétrica
                                </div>
                            </td>
                            <td>
                                A
                            </td>
                            <td>
                                <ul class="list-inline font-size-20 contact-links mb-0">
                                    <li class="list-inline-item px-2">
                                        <a href="" data-toggle="tooltip" data-placement="top" title="Editar"><i class="bx bx-message-square-dots"></i></a>
                                    </li>
                                    <li class="list-inline-item px-2">
                                        <a href="" data-toggle="tooltip" data-placement="top" title="Inativar"><i class="bx bx-user-circle"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <div>
                                    <img class="rounded-circle avatar-xs" src="assets/images/users/avatar-2.jpg" alt="">
                                </div>
                            </td>
                            <td>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Frank Kirk</a></h5>
                            </td>
                            <td>Inativo</td>
                            <td>
                                <div>
                                    Administração
                                </div>
                            </td>
                            <td>
                                B
                            </td>
                            <td>
                                <ul class="list-inline font-size-20 contact-links mb-0">
                                    <li class="list-inline-item px-2">
                                        <a href="" data-toggle="tooltip" data-placement="top" title="Editar"><i class="bx bx-message-square-dots"></i></a>
                                    </li>
                                    <li class="list-inline-item px-2">
                                        <a href="" data-toggle="tooltip" data-placement="top" title="Inativar"><i class="bx bx-user-circle"></i></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
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
