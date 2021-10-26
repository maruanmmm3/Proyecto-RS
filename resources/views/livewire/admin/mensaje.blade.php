<div>
    <div class="card">

        {{-- <div class="card-header">
            <a class="btn btn-success" href="{{route('users.export')}}">Exportar EXCEL</a>
          </div> --}}


        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo del ususario">
        </div>

        @if ($contactos->count())
            <div class="cart-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Mensaje</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($contactos as $mesaje)
                            <tr>
                                <td>{{ $mesaje->id }}</td>
                                <td>{{ $mesaje->name }}</td>
                                <td>{{ $mesaje->email }}</td>
                                <td>{{ $mesaje->phone }}</td>
                                <td>{{ $mesaje->message }}</td>
                                <td width="10px">
                                    <form action="{{route('admin.mensajes.destroy', $mesaje)}}" method="POST" {{-- onsubmit="return confirm('Seguro?') --}} class="formulario-eliminar">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form> 
                                   {{--  <a class="btn btn-danger" wire:click="$emit('deleteContacto',{{$contacto->id}})">
                                        Eliminar
                                    </a> --}}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $contactos->links() }}
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


</div>





