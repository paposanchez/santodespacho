@extends('layouts.admin')
@section('title', 'Crear Cuerpo')

@section('content')
<div class="col-md-6">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Crear Cuerpo</h3>
    </div>
<div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action="{{ action('FireDepartamentController@store') }}" enctype="multipart/form-data">
        @csrf
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="txtnombre" placeholder="Ingresa Nombre" name="txtnombre">
  </div>
  <div class="form-group">
    <label for="fundacion">Fecha Fundación</label>
    <input type="date" class="form-control" id="datefundacion" placeholder="Fecha Fundacion"name="datefundacion">
  </div>
  <div class="form-group">
    <label for="logo">logo</label>
    <input type="file" class="form-control" id="txtlogo" placeholder="Ingrese Logo" name="txtlogo">
  </div>

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</div>


@endsection
