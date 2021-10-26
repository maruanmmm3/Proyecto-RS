@extends('layouts.app')

@section('contenido')
<div class="row">
    <div class="col-lg-4 col-md-4">
        <div class="card">
            <div class="card-body text-center">

                <canvas id="pieChart"></canvas>

            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        Lugar: {{$voluntario->lugar}}
                    </div>
                   {{--  <div class="col-6">
                        <div class="list">
                            <div class="list-option">
                                <strong> Primera sesion</strong>
                            </div>
                            <div class="list-option">
                                <strong> Segunda sesion</strong>
                            </div>
                            <div class="list-option">
                                <strong> Tercera sesion</strong>
                            </div>
                        </div>
                    </div> --}}
                </div>
               
                <table class="table">
                    <thead>
                        <tr>
                            <td>Encargado</td>
                            <td>Nombre de Voluntarido</td>
                            <td>Fecha</td>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$voluntario->encargado}}</td>
                            <td>{{$voluntario->nombre}}</td>
                            <td>{{$voluntario->fecha}}</td>
                           
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <a href="{{route('admin.voluntarios.crear',$voluntario)}}" class="btn-sm btn-primary">Cargar datos Asistencias</a>
                </div>
                <div class="d-flex justify-content-start">
                    Asistencia Edades
                </div>
                <canvas id="barChart"></canvas>
            </div>
        </div>
    </div>

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
    ctx.height = 160;
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            
            datasets: [{
                data: [<?= $participantesHombre ?>,<?= $participantesMujer ?>],
                backgroundColor: [
                    "black",
                    "red",
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
                "Hombre",
                "Mujer"
            ]
        },
        options: {
            
                
        startAngle: 0,
        endAngle: 180,
            responsive: true,
           

        }
    });
  
        var ctx = document.getElementById("barChart");
        ctx.height = 90;
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?= $participantestotal?>,
                datasets: [
                    {
                        label: "Asistencias Edades",
                        data: <?= $participantestotal2 ?>,
                        borderColor: "rgba(0, 194, 146,0.5)",
                        borderWidth: "0",
                        backgroundColor: "rgba(0, 200, 255,1)"
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