@extends('layouts.app')

@section('contenido')

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('images/sembrando.jpg')}}" alt="">
                    </div>
                    <a href="{{route('admin.sembrandos.create')}}"> <i class="fa fa-plus-circle mt-2" style="font-size:2.4em"
                    aria-hidden="true"></i></a>
                    <div class="col-md-4 mt-5">
                        <h3>Crear un proyecto</h3>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    @foreach ($sembrandos as $sembrando)
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('images/sembrando.jpg')}}" alt="">
                    </div>
                        <div class="col-md-6 my-auto">

                        <a href="{{route('admin.sembrandos.crear', $sembrando)}}" ><button  value="Sembrando" class="btn btn-success" >
                                Crear Datos
                        </button></a>
                        <h6 class="mt-3">
                            {{$sembrando->nombre}}
                        </h6>
                     {{-- <h6class="mt-1">$sembrando->date </h6>  --}}
                            <div class="form-group">
                                <div class="row">
                                    <form action="{{route('admin.sembrandos.destroy', $sembrando)}}" class="formulario-eliminar" method="POST">
                                        @csrf
                                        @method('delete')
                                            <div class="col-md-2">
                                                <button type="submit" >
                                                    <i class="fa fa-trash mt-2" style="font-size:1.4em"  aria-hidden="true"></i>
                                                </button>
                                            </div>  
                                    </form> 
                                    <div class="col-md-2">
                                            <div class="col-md-2">
                                                <a href="{{route('admin.sembrandos.show', $sembrando)}}">
                                                    <i class="fa fa-eye mt-2" style="font-size:1.4em"  aria-hidden="true"></i>
                                               </a>
                                            </div>
                                    </div>  
                                </div>
                            </div>    
                        </div>
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

@endsection
