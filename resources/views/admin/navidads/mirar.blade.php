@extends('layouts.app')

@section('contenido')
    <div class="row">

        <div class="col-md-6">
            @if ($actividades->count())
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
            @if ($actividades->count())
                <div class="card">
                    <div class="card-body">
                        <canvas id="pieChart2"></canvas>
                    </div>
                </div>
            @else

                <div class="card-body">
                    <strong>No hay registros</strong>
                </div>

            @endif

        </div>


        <div class="col-12">
            @if ($actividades->count())
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
            {{-- Numero Total de Alumnos: {{$estudiantesNumero}} --}}

            <div class="card">
                <div class="card-body table-responsive">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>INSTITUCION</th>
                                <th>CANT.BENEFI</th>
                                <th>CANT.VOLUN</th>
                                <th>CANT.REGA</th>
                                <th>CANT.HORAS</th>
                                <th>CANT.HORAS EJE.</th>
                                <th>AREA</th>
                                <th>FECHA INICIAL</th>
                                <th>FECHA FINAL</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($actividades as $navidad)


                                <tr>
                                    <td>{{ $navidad->institucion }}</td>
                                    <td>{{ $navidad->cant_ben }}</td>
                                    <td>{{ $navidad->cant_vol }}</td>
                                    <td>{{ $navidad->cant_rega }}</td>
                                    <td>{{ $navidad->cant_hor }}</td>
                                    <td>{{ $navidad->cant_horeje }}</td>
                                    <td>{{ $navidad->area }}</td>
                                    <td>{{ $navidad->fech_inicio }}</td>
                                    <td>{{ $navidad->fech_fin }}</td>
                                    <td>
                                        <form action="{{ route('admin.navidads.destroy', $navidad) }}" method="POST"
                                            class="formulario-eliminar">
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

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    {{-- <script src="assets/js/main.js"></script> --}}
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
                    data: [<?= $horastotales ?>, <?= $voluntotales ?>],
                    backgroundColor: [
                        "yellow",
                        "blue",
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
                    "Cantidad de Horas",
                    "Cantidad de Voluntarios"
                ]
            },
            options: {


                startAngle: 0,
                endAngle: 180,
                responsive: true,


            }
        });
        var ctx2 = document.getElementById("pieChart2");
        ctx2.height = 130;
        var myChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {

                datasets: [{
                    data: [<?= $benetotales ?>, <?= $horasejetotales ?>],
                    backgroundColor: [
                        "green",
                        "blue",
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
                    "Cantidad de Beneficiados",
                    "Cantidad de Horas Ejecutadas"
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
                labels: <?= $institucionestotales ?>,
                datasets: [{
                        label: "Horas ejecutadas",
                        data: <?= $actividadMega ?>,
                        borderColor: "rgba(0, 194, 146,0.1)",
                        borderWidth: "0",
                        backgroundColor: ["red", "blue", "orange", "green", "skyblue", "pink", "red", "blue"]
                    },
                    {
                        label: "Horas programadas",
                        data: <?= $actividadMega2 ?>,
                        borderColor: "rgba(0, 194, 146,0.1)",
                        borderWidth: "0",
                        backgroundColor: "#ccc"
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
        $('.formulario-eliminar').submit(function(e) {
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
