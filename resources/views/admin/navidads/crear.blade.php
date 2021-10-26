@extends('layouts.app')

@section('contenido')
<div class="card">
    <div class="card-body">
        <div class="row">
{{-- Importamos actividades --}}
           <h1>Agregar datos de Actividad</h1>
           <form action="{{ route('admin.navidads.import',$navidad) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">

            <input type="text" value="{{$navidad->id}}">

                <button class="btn btn-danger">
                    Importar Excel
                </button>
                {{-- <button   class="btn btn-info w-25"> <i class="fa fa-eye"></i>  VER CALIFICACION</button>  --}}
            </div>
        </form>
        <h4>Numero de Indetificación de navidad {{$navidad->id}}</h4>
        </div>
    </div>
</div>

<!-- /#add-category -->
</div>
<!-- .animated -->
</div>
<!-- /.content -->
<div class="clearfix"></div>
<!-- Footer -->
<footer class="site-footer">
<div class="footer-inner bg-white">
<div class="row">
    <div class="col-sm-6">
        Copyright &copy; 2021
    </div>
    <div class="col-sm-6 text-right">
        Designed by <a href="#">ts</a>
    </div>
</div>
</div>
</footer>
<!-- /.site-footer -->
</div>
<!-- /#right-panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>
@endsection