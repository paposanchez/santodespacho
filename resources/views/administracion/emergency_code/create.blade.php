
@extends('layouts.admin')
@section('title', 'Crear Clave')

@section('content')
<div class="col-md-6">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Crear Clave</h3>
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
    <form method="POST" action="{{ action('EmergencyCodeController@store') }}" enctype="multipart/form-data">
        @csrf
<div class="form-group">
    <label for="nombre">Clave</label>
    <input type="text" class="form-control" id="code" placeholder="Ingresa Clave" name="code">
  </div>
  <div class="form-group">
    <label for="fundacion">Descripcion</label>
    <input type="text" class="form-control" id="description" placeholder="Descripcion"name="description">
  </div>
  <div class="form-group">
    <label for="fundacion">Voceo</label>
    <input type="text" class="form-control" id="voceo" placeholder="Voceo"name="voceo">
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</div>


@endsection
