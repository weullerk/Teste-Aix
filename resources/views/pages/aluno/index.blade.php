@extends('layouts.master')

@section('title') Alunos @endsection

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}">
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Alunos @endslot
        @slot('li_1') Alunos @endslot
        @slot('li_2') Lista de Cursos @endslot
    @endcomponent


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Alunos
                        <a href="{{ config('app.url') }}/alunos/cadastrar"><button type="button" class="btn-sm btn btn-primary waves-effect waves-light">Adicionar</button></a>
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
                        @foreach($alunos as $aluno)

                            <tr>
                                <td>{{ $aluno->matricula }}</td>
                                <td>
                                    <div class="avatar-xs">
                                        @if ($aluno->foto != null)
                                            <img class="rounded-circle avatar-xs" src="data:{{$aluno->foto_formato}};base64,{!! base64_encode(decrypt($aluno->foto)) !!}" alt="">
                                        @else
                                            <span class="avatar-title rounded-circle">
                                                {{ $aluno->nome[0] }}
                                            </span>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{ $aluno->nome }}</a></h5>
                                </td>
                                <td>{{ $aluno->situacao }}</td>
                                <td>
                                    <div>
                                        {{ $aluno->curso->curso }}
                                    </div>
                                </td>
                                <td>
                                    {{ $aluno->turma }}
                                </td>
                                <td>
                                    <ul class="list-inline font-size-20 contact-links mb-0">
                                        <li class="list-inline-item px-2">
                                            <a href="{{ config('app.url') }}/alunos/editar/{{ $aluno->id }}" data-toggle="tooltip" data-placement="top" title="Editar"><i class="bx bx-pencil"></i></a>
                                        </li>
                                        <li class="list-inline-item px-2">
                                            <a href="{{ config('app.url') }}/alunos/deletar/{{ $aluno->id }}" data-toggle="tooltip" data-placement="top" title="Deletar"><i class="bx bx-trash"></i></a>
                                        </li>
                                    </ul>
                                </td>
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
