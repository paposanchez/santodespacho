@extends('layouts.admin')
@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="%7b%7b%20URL__asset(%27css/dataTables.bootstrap.min.html">
@endpush

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Cuarteles</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="#"><i class="fa fa-plus"></i> Agregar Nuevo</a>
        </h1>
    </section>
    <section class="content">
        <div class="clearfix"></div>



        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('stations.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </section>
@endsection

@push('scripts')
    <!-- DataTables -->
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset(js/dataTables.bootstrap.min.js"></script>

    <script>
        $('#li_stations').addClass('active');
        $(function () {
            $('#stations-table').DataTable({
            'pageLength': 25,
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : false,
            'autoWidth'   : false,
            'order'       : [],
            'language': {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
            })
        });
    </script>
@endpush
