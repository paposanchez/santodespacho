
@extends('layouts.admin')
@section('title', 'Crear Cuerpo')

@section('content')
<div class="col-md-6">
<div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Editar Compañia</h3>
    </div>
<div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> revise los siguentes campos.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action="{{ action('StationController@store') }}" enctype="multipart/form-data">
        @csrf
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder="Ingresa Nombre" name="nombre" value="{{ $station->name }}">
  </div>
  <div class="form-group">
    <label for="fundacion">abreviacion</label>
    <input type="text" class="form-control" id="abreviacion" placeholder="Abreviacion"name="abreviacion" value="{{ $station->abreviacion }}">
  </div>
  <div class="form-group">
    <label for="fundacion">alias</label>
    <input type="text" class="form-control" id="alias" placeholder="Alias"name="alias" value="{{ $station->alias}}">
  </div>
  <div class="form-group">
    <label for="fundacion">Direccion</label>
    <input type="text" class="form-control" id="direccion" placeholder="direccion"name="direccion" value="{{ $station->address}}">
  </div>
  <div class="form-group">
    <label for="cuerpo">Cuerpo</label>
    <select class="form-control" id="cuerpo" name="cuerpo">
        <option>Selecciones Cuerpo</option>
        @foreach($firedepart as $category)
        <option value="{{ $category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
</div>
  <div class="card-footer">
    <button type="submit" class="btn btn-warning">Submit</button>
  </div>
</form>
</div>
</div>
</div>


@endsection
