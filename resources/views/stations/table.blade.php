<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover" id="stations-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Numero de Compañía</th>
                <th>Alias</th>
                <th style="width: 10%">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($stations as $station)
            <tr>
                <td>{!! $station->name !!}</td>
                <td>{!! $station->number !!}</td>
                <td>{!! $station->alias !!}</td>
                <td>
                    <div class='btn-group'>
                        <a href="%7b%21%21%20route(%27stations-3.html" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="%7b%21%21%20route(%27stations-4.html" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                        @if(count($station->vehicles)==0)
                        <button type="button" data-target="#modal-delete-{{$station->id}}" data-toggle="modal" class="btn btn-xs btn-danger" title="Eliminar"><i class="fa fa-close"></i></button>
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@foreach($stations as $station)
@if(count($station->vehicles)==0)
<div class="modal modal-danger fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$station->id}}">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                    <h4 class="modal-title">Eliminar Cuartel</h4>
                </div>
                <div class="modal-body">
                    <p>Confirme si desea eliminar Cuartel <b>{{$station->name}}</b></p>
                </div>
                <div class="modal-footer">
                {!! Form::open(['route' => ['stations.destroy', $station->id], 'method' => 'delete', 'id' => 'form'.$station->id]) !!}
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
                {!! Form::close() !!}
            </div>
        </div>		
    </div>
</div>
@endif
@endforeach