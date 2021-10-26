@extends('layouts.app')

@section('contenido')
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <!-- Widgets  -->
            {{-- <div class="row">
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
                   @if ($estudiantes->count())
                    <div class="card">
                        <div class="card-body text-center">
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                   @else

                    <div class="card-body">
                        <strong>No hay registros</strong>
                    </div>
        
                   @endif
                </div>

                <div class="col-md-6">
                    @if ($estudiantes->count())
                    <div class="card">
                        <div class="card-body">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                    @else

                    <div class="card-body">
                        <strong>No hay registros</strong>
                    </div>
        
                   @endif
                </div>

                <div class="col-12">
                    Numero Total de Alumnos: {{$estudiantesNumero}}
                    <div class="d-flex justify-content-center mt-2 ml-5">
                        <a class="btn btn-success" href="{{ route('admin.estudiantes.crear', $carrera) }}">Importar</a>
                    </div>

                    <div class="card">
                        <div class="card-body table-responsive">
                         
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>NOMBRE</th>
                                        <th>APELLIDO</th>
                                        <th>IDSENATI</th>
                                        <th>EDAD</th>
                                        <th>SEXO</th>
                                        <th>NOTA</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudiantes as $estudiante)


                                        <tr>
                                            <td>{{ $estudiante->nombre }}</td>
                                            <td>{{ $estudiante->apellido }}</td>
                                            <td>{{ $estudiante->id_senati }}</td>
                                            <td>{{ $estudiante->edad }}</td>
                                            <td>{{ $estudiante->sexo }}</td>
                                            <td>{{ $estudiante->nota }}</td>
                                            <td>
                                                <form action="{{route('admin.estudiantes.destroy', $estudiante)}}" method="POST" class="formulario-eliminar">
                                                    @csrf
                                                    @method('delete')
                                                    
                                                   

                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </td>
                                           
                                        </tr>
                                    @endforeach
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
    {{-- <script src="{{asset('assets/js/main.js')}}"></script> --}}
    <!--Local Stuff-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var ctx = document.getElementById("pieChart");
        ctx.height = 130;
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {

                datasets: [{
                    data: [<?= $estudiantesMujer ?>, <?= $estudiantesHombre ?>],
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

                }],
                labels: [
                    "Mujeres",
                    "Hombres"
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
                labels: <?= $estudiantemega ?>
                ,
                datasets: [{
                    label: "Estudiantes",
                    data: <?= $estudiantenotas ?>,
                    borderColor: "rgba(0, 194, 146,0.1)",
                    borderWidth: "0",
                    backgroundColor: ["red", "blue", "orange", "green", "skyblue", "pink", "red", "blue"]
                }]
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

    @if (session('eliminar') == 'ok')
        <script>
             Swal.fire(
                    'Eliminado!',
                    'Tu archivo ha sido eliminado.',
                    'success'
                )
        </script>
    @endif

    <script>
        $('.formulario-eliminar').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
               /*  Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                ) */
                this.submit();
            }
        }) 
        });

   
    </script>
@endsection
