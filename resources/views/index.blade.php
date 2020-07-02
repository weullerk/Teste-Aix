    @extends('layouts.master')

@section('title') Dashboard @endsection

@section('content')


   @component('common-components.breadcrumb')
         @slot('title') Dashboard  @endslot
         @slot('li_1') Seja bem vindo ao Dashboard @endslot
     @endcomponent


                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card overflow-hidden">
                                    <div class="bg-soft-primary">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-primary">Seja bem vindo!</h5>
                                                    <p>Aix Dashboard</p>
                                                </div>
                                            </div>
                                            <div class="col-5 align-self-end">
                                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="pt-4">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5 class="font-size-15">125</h5>
                                                            <p class="text-muted mb-0">Cursos</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5 class="font-size-15">245</h5>
                                                            <p class="text-muted mb-0">Alunos</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Cursos importados</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="text-muted">Esse mês</p>
                                                <h3>34,252</h3>
                                                <p class="text-muted"><span class="text-success mr-2"> 12% <i class="mdi mdi-arrow-up"></i> </span> de novas importações</p>

                                                <div class="mt-4">
                                                    <a href="" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div id="radialBar-chart" class="apex-charts"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row">


                                </div>
                                <!-- end row -->

                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Week</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Month</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#">Year</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4 class="card-title mb-4">Alunos matriculados</h4>

                                        <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Top Curso</h4>

                                        <div class="text-center">
                                            <div class="mb-4">
                                                <i class="bx bx-map-pin text-primary display-4"></i>
                                            </div>
                                            <h3>456 Alunos</h3>
                                            <p>Sistemas de Informação</p>
                                        </div>

                                        <div class="table-responsive mt-4">
                                            <table class="table table-centered">
                                                <tbody>
                                                <tr>
                                                    <td style="width: 140px">
                                                        <p class="mb-0">Sistemas de Informação</p>
                                                    </td>
                                                    <td style="width: 120px">
                                                        <h5 class="mb-0">456</h5></td>
                                                    <td>
                                                        <div class="progress bg-transparent progress-sm">
                                                            <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0">Administração</p>
                                                    </td>
                                                    <td>
                                                        <h5 class="mb-0">410</h5>
                                                    </td>
                                                    <td>
                                                        <div class="progress bg-transparent progress-sm">
                                                            <div class="progress-bar bg-success rounded" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="mb-0">Engenharia Eletrica</p>
                                                    </td>
                                                    <td>
                                                        <h5 class="mb-0">345</h5>
                                                    </td>
                                                    <td>
                                                        <div class="progress bg-transparent progress-sm">
                                                            <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Ultimos cursos</h4>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Matricula</th>
                                                    <th>Nome</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold"># 5</a> </td>
                                                    <td>Carla Santos</td>
                                                </tr>

                                                <tr>
                                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold"># 4</a> </td>
                                                    <td>Barbara Nascimento</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold"># 3</a> </td>
                                                    <td>Anderson Souza</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold"># 2</a> </td>
                                                    <td>Angelica Lima</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold"># 1</a> </td>
                                                    <td>Luciano Andrade</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Ultimos cursos</h4>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Matricula</th>
                                                    <th>Nome</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold"># 5</a></td>
                                                    <td>Educação Física</td>
                                                </tr>

                                                <tr>
                                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold"># 4</a></td>
                                                    <td>Sistemas de Administração</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold"># 3</a></td>
                                                    <td>Engenharia Eletrica</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold"># 2</a></td>
                                                    <td>Engenharia Cívil</td>
                                                </tr>
                                                <tr>
                                                    <td><a href="javascript: void(0);" class="text-body font-weight-bold"># 1</a></td>
                                                    <td>Ciência da Computação</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

@endsection

@section('script')
        <!-- plugin js -->
        <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Calendar init -->
        <script src="{{ URL::asset('assets/js/pages/dashboard.init.js')}}"></script>
@endsection
