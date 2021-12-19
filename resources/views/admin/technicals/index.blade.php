@extends('layouts.app')

@section('contenido')
    <div class="row">
        <div class="col-md-6">

            @if (session('info'))
                <div class="alert alert-success">
                    <strong>{{ session('info') }}</strong>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="card-body">
                            <img src="{{asset('images/libro.png')}}" class="img-thumbnail">
                        </div>
                        <div class="col-md-12 mt-2">

                            Brindar formación profesional técnica de calidad para jóvenes de Chimbote
                            <br>
                            <a href="{{ route('admin.promocions.create') }}" class="fa fa-plus-circle mt-2"> <i
                                    class="fa fa-plus-circle mt-2" style="font-size:2.4em" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                        <img src="{{asset('images/compus.png')}}" class="img-thumbnail">
                </div>
            </div>
        </div>



        @foreach ($promocions as $promocion)

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img {{-- height="500" width="200" --}} src="{{ asset('images/logots.png') }}" {{-- src="{{asset($promocion->image->url)}}" --}}>
                            </div>
                            <div class="col-md-12 mt-3">

                                <h1 class="text-center mt-2 text-uppercase">{{ $promocion->nombre }}</h1>
                            </div>

                      

                            <div class="d-flex justify-content-center mt-2 ">
                                <a class="btn btn-primary"
                                    href="{{ route('admin.carreras.vista', $promocion) }}">Observar</a>
                            </div>
                            <div class="d-flex justify-content-center mt-2 ml-3">
                                <a class="btn btn-success" href="{{ route('admin.promocions.edit', $promocion) }}">Editar</a>
                            </div>

                            <div class="d-flex justify-content-center mt-2 ml-3">
                                <form action="{{ route('admin.promocions.destroy', $promocion) }}" method="POST"
                                    class="formulario-eliminar">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>

                        

                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    {{-- <script src="{{asset('assets/js/main.js')}}"></script> --}}
    <!--Local Stuff-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
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
    </script>

@endsection
