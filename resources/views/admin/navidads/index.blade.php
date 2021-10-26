@extends('layouts.app')

@section('contenido')
<div class="card">
    <div class="card-body">
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
                    <div class="card-body">
                        <a type="submit" href="{{route('admin.navidads.show', $navidad)}}" class="btn btn-info text-white">Visualizar</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a type="submit" href="" class="btn btn-danger text-white">Eliminar</a>
                    </div>                                    
                </div>
            </div>
                
@endforeach

        </div>
    </div>
</div>

@endsection
