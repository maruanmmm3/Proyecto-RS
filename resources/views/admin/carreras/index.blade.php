@extends('layouts.app')

@section('contenido')
<div class="row">
                   
    <div class="col-md-6">
   
        <div class="card">
            <div class="card-body text-center">
                <canvas id="pieChart"></canvas>
                <a href="{{route('admin.carreras.create')}}" class="fa fa-plus-circle mt-2"> <i class="fa fa-plus-circle mt-2" style="font-size:2.4em"
                    aria-hidden="true"></i></a>
            </div>
        </div>
        {{-- {{$promocion->id}} --}}
       {{--  @foreach ($promocion as $pro)
        {{$pro->id}}
        @endforeach --}}
    
    </div>
    @foreach ($carreras as $carrera)
        
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('images/carrera.png')}}" alt="">
                    </div>
                    <div class="col-md-6 my-auto">
                      
                            <button value="Ingenieria de software e inteligencia artificial" class="btn btn-danger" >
                            {{$carrera->nombre}}
                            </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>
<!--Local Stuff-->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

<script>
    var ctx = document.getElementById("pieChart");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            
            datasets: [{
                data: [45,20],
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
  
   

</script>
@endsection