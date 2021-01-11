<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Alias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alias', 'Alias:') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number', 'Numero de Compañía:') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>

<!-- File Tone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tone', 'File Tone:') !!}
    {!! Form::file('tone') !!}
</div>
<div class="clearfix"></div>

<!-- Restriction Field -->
@if(isset($station))
<div class="form-group col-sm-6" id="div_restrictions">
    {!! Form::label('Limitar pareja de grupo de máquinas:') !!}
    <button type="button" class="btn btn-success btn-xs" id="btn_add_restriction"><i class="fa fa-plus"></i> Agregar</button>
    
    @foreach ($station->restrictions as $rest)
        <div class="row form-group">
            <div class="col-sm-3">
                <select class="form-control input-sm" name="category1[]">
                    <option value="">Seleccione Categoría</option>
                    @foreach ($station->categories as $item)
                        <option value="{{$item->id}}" {{$item->id == $rest->idcategory1 ? 'selected' : ''}}>{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-3">
                <select class="form-control input-sm" name="category2[]">
                    <option value="">Seleccione Categoría</option>
                    @foreach ($station->categories as $item)
                        <option value="{{$item->id}}" {{$item->id == $rest->idcategory2 ? 'selected' : ''}}>{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-2">
                <input class="form-control input-sm" min="0" type="number" name="minutes[]" placeholder="Minutos" value="{{$rest->minutes}}">
            </div>
            <button type="button" class="btn btn-xs btn-danger" title="Eliminar" onclick="$(this).parent().remove()"><i class="fa fa-close"></i></button>
        </div>
    @endforeach

    <div class="row form-group">
        <div class="col-sm-3">
            <select class="form-control input-sm" name="category1[]">
                <option value="">Seleccione Categoría</option>
                @foreach ($station->categories as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-3">
            <select class="form-control input-sm" name="category2[]">
                <option value="">Seleccione Categoría</option>
                @foreach ($station->categories as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <input class="form-control input-sm" min="0" type="number" name="minutes[]" placeholder="Minutos">
        </div>
        <button type="button" class="btn btn-xs btn-danger" title="Eliminar" onclick="$(this).parent().remove()"><i class="fa fa-close"></i></button>
    </div>
</div>
@endif

<!-- Position Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('position', 'Position:') !!}
    {!! Form::text('position', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Idfire Department Field -->
<div class="form-group col-sm-8">
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title"><span class="glyphicon glyphicon-fire"></span> Posición</h3>
        </div>
        <div class="box-body">
            <div id="mapid" style="width: 100%;height: 600px;"></div> 
            <div id="popup" class="ol-popup">
                {{-- <a href="#" id="popup-closer" class="ol-popup-closer"></a> --}}
                <div id="popup-content">
                    <p>¿Confirmar cambio de posición?</p>
                </div>
                <input type="text" id="popup-input-position-lon" class="form-control" style="display: none;">
                <input type="text" id="popup-input-position-lat" class="form-control" style="display: none;">
                <button id="btn_change_position" class="btn btn-primary btn-sm btn-confirm">Confirmar</button>
                <button id="btn_cancel_position" type="button" class="btn btn-danger btn-sm">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12" id="footer_form">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary btn-confirm']) !!}
    <a href="%7b%21%21%20route(%27stations.html" class="btn btn-default">Cancelar</a>
</div>
