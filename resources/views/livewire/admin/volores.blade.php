<div>
    <div class="card">

        <div class="card-header">
            <a class="btn btn-success" href="{{route('admin.valors.create')}}">Crear Valor de la Empresa</a>
        </div> 

        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del equipo">
        </div>

        @if ($valors->count())
            <div class="cart-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Texto</th>           
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($valors as $valor)
                            <tr>
                                <td>{{ $valor->id }}</td>
                                <td>{{ $valor->texto }}</td>

                                <td width="10px">
                                    <form action="{{route('admin.valors.destroy', $valor)}}" method="POST" class="formulario-eliminar">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form> 
                                    <a href="{{route('admin.valors.edit', $valor)}}"  class="btn btn-primary">
                                        Editar
                                    </a> 
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $valors->links() }}
            </div>
        @else

            <div class="card-body">
                <strong>No hay registros</strong>
            </div>

        @endif

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>

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
    $('.formulario-eliminar').submit(function(e){
        e.preventDefault();

        Swal.fire({
        title: '??Est??s seguro?',
        text: "??No podr??s revertir esto!",
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
</div>
