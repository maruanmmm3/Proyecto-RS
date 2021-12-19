@extends('layouts.app')

@section('contenido')
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-user"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $estudiantesTotal }}</span>
                                    </div>
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
                            <div class="stat-icon dib flat-color-2">
                                <i class="fa fa-tree"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $sem }}</span>
                                    </div>
                                    <div class="stat-heading">Sembrados</div>
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
                                <i class="fa fa-dropbox"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $rega }}</span>
                                    </div>
                                    <div class="stat-heading">Regalos</div>
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
                                <i class="pe-7s-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $bene }}</span>
                                    </div>
                                    <div class="stat-heading">Beneficiados</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <strong class="text-center">Datos Generales</strong>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="card-body">
                            <canvas id="myChart" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <strong class="text-center">Tecnical School</strong>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="card-body">
                            <canvas id="myChart2" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <strong class="text-center">Tecnical School Estudiantes</strong>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="card-body">
                            <canvas id="myChart3" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <strong class="text-center">Datos de Navidad</strong>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="card-body">
                            <canvas id="myChart4" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <strong class="text-center">Voluntariados Participantes</strong>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="card-body">
                            <canvas id="myChart5" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <strong class="text-center">Voluntariados</strong>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="card-body">
                            <canvas id="myChart6" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <strong class="text-center">Voluntariados Presupuestos</strong>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="card-body">
                            <canvas id="myChart7" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    {{-- Lo nuevo de pamela --}}
    <div class=" text-center container-fluid bg-center">
        <h3>Datos del Technical School</h3>
    </div>

   
    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <strong class="text-center">Egresados por Promoción</strong>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="card-body">
                           <canvas id="myChart8" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    

   
        <div class="col-md-6">
            <div class="card">
                <strong class="text-center">Retirados por Promoción</strong>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="card-body">
                           <canvas id="myChart9" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   

    
        <div class="col-md-6">
            <div class="card">
                <strong class="text-center">Estudiantes Mujeres</strong>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="card-body">
                           <canvas id="myChart10" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    </div>
   



    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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

        /*  var ctx = document.getElementById("barChart");
            ctx.height = 130;
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Estudiantes", "Sembrando", "Regalos", "Beneficiados"],
                    datasets: [
                        {
                            label: "Datos",
                            data: [{{ $estudiantesTotal }},{{ $sem }},{{ $rega }},{{ $bene }}],
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

            var ctx = document.getElementById("pieChart");
            ctx.height = 130;
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {

                    datasets: [{
                        data: [<?= $carreratotal ?>,<?= $promociontotal ?>],
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
                        "Carreras",
                        "Promociones"
                    ]
                },
                options: {
                    startAngle: 0,
                    endAngle: 180,
                    responsive: true,
                }
            });
     */

        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Estudiantes", "Sembrando", "Regalos", "Beneficiados"],
                datasets: [{
                    label: ["Datos Generales"],
                    data: [{{ $estudiantesTotal }}, {{ $sem }}, {{ $rega }},
                        {{ $bene }}
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });


        const ctx2 = document.getElementById('myChart2').getContext('2d');
        const myChart2 = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ["Carreras",
                        "Promociones"],
                datasets: [{
                    label: "Datos",
                    data: [<?= $carreratotal ?>,<?= $promociontotal ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctx3 = document.getElementById('myChart3').getContext('2d');
        const myChart3 = new Chart(ctx3, {
            type: 'pie',
            data: {
                labels: ["Mujeres",
                        "Hombres"],
                datasets: [{
                    label: "Datos",
                    data: [<?= $estudiantesMujer ?>, <?= $estudiantesHombre ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctx4 = document.getElementById('myChart4').getContext('2d');
        const myChart4 = new Chart(ctx4, {
            type: 'polarArea',
            data: {
                labels: ["Horas",
                        "Voluntarios",
                        "Regalos",
                    "Horas Ejecutadas"],
                datasets: [{
                    label: "Datos",
                    data: [<?= $horastotales ?>, <?= $voluntotales ?>, <?= $regatotales ?>, <?= $horasejetotales ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctx5 = document.getElementById('myChart5').getContext('2d');
        const myChart5 = new Chart(ctx5, {
            type: 'pie',
            data: {
                labels: ["Mujeres",
                        "Hombres",
                        "Cantidad Total"],
                datasets: [{
                    label: "Datos",
                    data: [<?= $participantesMujer ?>, <?= $participantesHombre ?>, <?= $participantesTotal ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctx6 = document.getElementById('myChart6').getContext('2d');
        const myChart6 = new Chart(ctx6, {
            type: 'polarArea',
            data: {
                labels: ["Voluntarios","Horas"
                        
                    ],
                datasets: [{
                    label: "Datos",
                    data: [<?= $voluntariosTotal ?>,<?= $horasvolun ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctx7 = document.getElementById('myChart7').getContext('2d');
        const myChart7 = new Chart(ctx7, {
            type: 'pie',
            data: {
                labels: ["Presupuesto Estimado","Ejecucion Real"
                        
                    ],
                datasets: [{
                    label: "Datos",
                    data: [<?= $presupuestoesti ?>,<?= $ejecucionreal ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctx8 = document.getElementById('myChart8').getContext('2d');
        const myChart8 = new Chart(ctx8, {
            type: 'pie',
            data: {
                labels: ["Egresados","Ingresados"
                        
                    ],
                datasets: [{
                    label: "Datos",
                    data: [<?= $egresados ?>,<?= $ingresados ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctx9 = document.getElementById('myChart9').getContext('2d');
        const myChart9 = new Chart(ctx9, {
            type: 'pie',
            data: {
                labels: ["Retirados","Ingresados Retirados"
                        
                    ],
                datasets: [{
                    label: "Datos",
                    data: [<?= $retiradosretirados ?>,<?= $ingresadosretirados ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctx10 = document.getElementById('myChart10').getContext('2d');
        const myChart10 = new Chart(ctx10, {
            type: 'pie',
            data: {
                labels: ["Cantidad de Mujeres","Mujeres Forjadas en SiderPeru"
                        
                    ],
                datasets: [{
                    label: "Datos",
                    data: [<?= $cantidadmujeres ?>,<?= $cantidadmujeresforjadas ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    </script>

@endsection
