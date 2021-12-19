@extends('layouts.app')

@section('contenido')
<div class="card">
    <div class="card-body">
        @if ($navidads->count())

        <div class="row">
            @foreach ($navidads as $navidad)
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="text-center color-gray">
                        {{$navidad->nombre}}
                    </div>
                    <div class="card-body">
                        <img src="{{asset('images/gif.gif')}}" alt="">
                    </div>
                    <div class="row">

                        <div class="d-flex justify-content-center mt-2 ml-5">
                            <a type="submit" href="{{route('admin.navidads.show', $navidad)}}" class="btn btn-info text-white">Visualizar</a>
                        </div>

                        <div class="d-flex justify-content-center mt-2 ml-3">
                            <a class="btn btn-success" href="{{ route('admin.navidads.edit', $navidad) }}">Editar</a>
                        </div>

                        <div class="d-flex justify-content-center mt-2 ml-3">
                                <form action="{{ route('admin.navidads.destroy', $navidad) }}" method="POST"
                                    class="formulario-eliminar">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                        </div>
                    </div>                                    
                </div>
            </div>
            @endforeach
        </div>

        @else
        <div class="card-body mt-3">
        <h2>No hay registros</h2>
        </div>
        @endif

    </div>
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
