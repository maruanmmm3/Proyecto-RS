@extends('layouts.app')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="container" style="position: relative;">
                    <img src="https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849822_960_720.jpg" style="height: 250px; width: 100%; object-fit: cover;" alt="">
                    <div 
                        class="d-flex justify-content-center mt-2">
                        <a type="submit" href="{{route('admin.proyectos.crear',$proyecto)}}" class="btn btn-danger">Importar Datos</a>
                    </div>
                </div>
            </div>
        </div>
    


    </div>


    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="container" style="position: relative;">
                    <img src="https://cdn.pixabay.com/photo/2020/03/06/08/00/laptop-4906312_960_720.jpg" style="height: 250px; width: 100%; object-fit: cover;" alt="">
                    <div 
                        class="d-flex justify-content-center mt-2">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="container" style="position: relative;">
                    <canvas id="pieChart"></canvas>
                    <div 
                        class="d-flex justify-content-center mt-2">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="container" style="position: relative;">
                    <h3 class="text-center">{{$proyecto->nombre}}</h3>
                    <div class="text-center mt-4">
                       <strong>{{$proyecto->proposito}}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2>Participantes</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Puesto</th>
                  <th>Sexo</th>
                  <th>Hora</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($actividaddos as $actividaddo)
                <tr>
                  <td>{{$actividaddo->id}}</td>
                  <td>{{$actividaddo->nombre}}</td>
                  <td>{{$actividaddo->apellido}}</td>
                  <td>{{$actividaddo->puesto}}</td>
                  <td>{{$actividaddo->sexo}}</td>
                  <td>{{$actividaddo->hora}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </main>
      </div>
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
                data: [<?= $actividadesM ?>,<?= $actividadesH ?>],
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