@extends('layouts.app')

@section('contenido')

<div class="row">
    @if ($voluntarios->count())
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body text-center d-flex align-items-center justify-content-center" style="height: 310px;">

                <div class="row">
                    <div class="col-12">
                        <h1 class="fw-bold">{{$horas}}</h1>
                    </div>
                    <div class="col-12 mt-4">
                        <h1>Meta Horas</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @else
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body text-center d-flex align-items-center justify-content-center" style="height: 310px;">

                <div class="row">
                    <div class="col-12">
                        <h1 class="fw-bold"></h1>
                    </div>
                    <div class="col-12 mt-4">
                        <h1>No hay Data</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
        <a href="{{ route('admin.voluntarios.create') }}" class="btn btn-danger">Crear Voluntariado</a>
            </div>
        </div>
    </div>
</div>

    

    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach ($voluntarios as $voluntario)

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="text-center color-gray">
                                {{ $voluntario->nombre }}
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('images/voluntariado.jpg') }}" alt="">
                            </div>


                        <div class="row">

                            <div class="d-flex justify-content-center mt-2 ml-5">
                                <a class="btn btn-primary" href="{{ route('admin.voluntarios.show', $voluntario)}}"
                                class="btn btn-info text-white">Visualizar</a>
                            </div>

                            <div class="d-flex justify-content-center mt-2 ml-3">
                                <a class="btn btn-success" href="{{ route('admin.voluntarios.edit', $voluntario) }}">Editar</a>
                            </div>
                            
                            <div class="d-flex justify-content-center mt-2 ml-3">
                                 <form action="{{ route('admin.voluntarios.destroy', $voluntario) }}" method="POST"
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
        </div>
    </div>


    <h2>Voluntarios</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Voluntario</th>
                  <th>Proyecto</th>
                  <th>Horas</th>
                  <th>fecha</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($voluntarios as $voluntario)
                <tr>
                  <td>{{$voluntario->id}}</td>
                  <td>{{$voluntario->encargado}}</td>
                  <td>{{$voluntario->nombre}}</td>
                  <td>{{$voluntario->hora}}</td>
                  <td>{{$voluntario->fecha}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </main>
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
