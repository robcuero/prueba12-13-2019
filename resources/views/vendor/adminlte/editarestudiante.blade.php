@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


<div class="container-fluid spark-screen">
		<div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Editar</h3>
            </div>
             <form role="form" action="{{url('updateestudiante',[$tipo->id])}}" method="post">
             	<input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label>nombre</label>
                  <input type="text" value="{{$tipo->nombre}}" class="form-control" placeholder="Ingrese el nombre" name="nombre">
                </div>
 <label>apellido</label>
                  <input type="text"  value="{{$tipo->apellido}}" class="form-control" placeholder="Ingrese el apellido" name="apellido">
<label>cedula</label>
                  <input type="text"  value="{{$tipo->cedula}}" class="form-control" placeholder="Ingrese cedula" name="cedula">
                  <label>cedula</label>
                  <input type="text"  value="{{$tipo->sexo}}" class="form-control" placeholder="Ingrese cedula" name="sexo">


  <div class="form-group">
                      <label>semstre</label>
                      <select name="idSemestre">
                      @foreach($datos as $item)
                            <option  value="{{$item->id}}">{{$item->semestre}} {{$item->paralelo}}</option>
                      @endforeach
                    </select>
                  </div>   



                </div>
 

                   <div class="box-footer">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
                </form>
              </div>
          
                </div>
 
           






@endsection