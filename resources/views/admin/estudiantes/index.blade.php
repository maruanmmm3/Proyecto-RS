@extends('layouts.app')

@section('contenido')
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
      {{--   <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-user"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">3</span></div>
                                    <div class="stat-heading">Especialidades</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-user"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">57</span></div>
                                    <div class="stat-heading">Estudiantes</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-user"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">18.6</span></div>
                                    <div class="stat-heading">Promedios</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="fa fa-book"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">VI</div>
                                    <div class="stat-heading">Ciclo</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">

            <div class="col-md-6">

                <div class="card">
                    <div class="card-body text-center">
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NOMBRE</th>
                                    <th>APELLIDO</th>
                                    <th>IDSENATI</th>
                                    <th>NOTA</th>
                                    <th>CURSO</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>NOMBRE</td>
                                    <td>APELLIDO</td>
                                    <td>1234234</td>
                                    <td>20</td>
                                    <td>FUNDAMENTOS DE IA</td>
                                    <td><i class="fa fa-trash" data-toggle="modal" data-target="#modalEliminar"></i></td>
                                    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" aria-hidden="true">
                                        <div class="modal-dialog " role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="modalEliminarLabel"></h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body text-center">
                                              Estas seguro de eliminar esta nota
                                            <div class="w-100 d-flex justify-content-between my-4">
                                                <form action="{{route('admin.estudiantes.destroy', $producto)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-success ml-4"> <i class="fa fa-check"></i></button>
                                                </form>
                                                <button type="button" class="btn btn-danger mr-4" data-dismiss="modal"><i class="fa fa-close"></i></button>
                                            </div>
                                            
                                            </div>
                                            
                                          </div>
                                        </div>
                                      </div>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>
        <!-- /#add-category -->
    </div>
    <!-- .animated -->
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!--Local Stuff-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
    

    <script>
        var ctx = document.getElementById("pieChart");
        ctx.height = 130;
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {

                datasets: [{
                    data: [45, 20],
                    backgroundColor: [
                        "yellow",
                        "skyblue",
                        "rgba(0, 194, 146,0.5)",
                        "rgba(0,0,0,0.07)"
                    ],
                    hoverBackgroundColor: [
                        "rgba(0, 194, 146,0.9)",
                        "rgba(0, 194, 146,0.7)",
                        "rgba(0, 194, 146,0.5)",
                        "rgba(0,0,0,0.07)"
                    ]

                }
                ],
                labels: [
                    "Aprobados",
                    "Desaprobados"
                ]
            },
            options: {


                startAngle: 0,
                endAngle: 180,
                responsive: true,


            }
        });

        var ctx = document.getElementById("barChart");
        ctx.height = 130;
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Nombre 1", "Nombre 2", "Nombre 3", "Nombre 4", "Nombre 5", "Nombre 6", "Nombre 7", "Nombre 8"],
                datasets: [
                    {
                        label: "Estudiantes",
                        data: [65, 60, 55, 50, 45, 40, 35, 30],
                        borderColor: "rgba(0, 194, 146,0.1)",
                        borderWidth: "0",
                        backgroundColor: ["red", "blue", "orange", "green", "skyblue", "pink", "red", "blue"]
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    </script>
@endsection