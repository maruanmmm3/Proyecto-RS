@extends('layouts.app')

@section('contenido')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('images/sembrando.jpg') }}" alt="">
                        </div>
                        {{-- <a href="{{route('admin.beneficiados.create')}}" > <i class="fa fa-plus-circle mt-2" style="font-size:2.4em"
                    aria-hidden="true"></i></a> --}}
                        <div class="col-md-6 mt-3">
                            <h3>Comprometidos con la Comunidad</h3>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            @if ($beneficiados->count())
            <div class="card-body text-center">
                <canvas id="pieChart"></canvas>
            </div>
            @else
            <div class="card-body text-center">
               <strong>No hay Data</strong>
            </div>
            @endif

        </div>
        @foreach ($beneficiados as $beneficiado)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6 my-auto">
                                <h6 class="mt-3">
                                    Año del Evento: {{ $beneficiado->year }}
                                </h6>
                                <h6 class="mt-3">
                                    Cantidad de Beneficiados: {{ $beneficiado->arbol }}
                                </h6>
                                <h6 class="mt-3">
                                    Cantidad de Hombres: {{ $beneficiado->hombre }}
                                </h6>
                                <h6 class="mt-3">
                                    Cantidad de Mujeres: {{ $beneficiado->mujer }}
                                </h6>
                                <h6 class="mt-3">
                                    El Area: {{ $beneficiado->area }}
                                </h6>
                                {{-- <h6 class="mt-1">{{ $sembrando->date }}</h6> --}}

                                <form action="{{ route('admin.beneficiados.destroy', $beneficiado) }}" method="POST"
                                    class="formulario-eliminar">
                                    @csrf
                                    @method('delete')
                                    <button class="far fa-trash-alt">
                                        <i class="fa fa-trash mt-2" style="font-size:1.4em" aria-hidden="true"></i>
                                    </button>
                                </form>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        var ctx = document.getElementById("pieChart");
        ctx.height = 185;
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {

                datasets: [{
                    data: [<?= $arbolT ?>, <?= $hombreT ?>, <?= $mujerT ?>],
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
                    "Arbol",
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
