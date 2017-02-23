
@extends('beneficiarios.template_edit')

@section('profile')

<link rel="stylesheet" href=" {{ asset('css/dataTables.responsive.min.css')}} ">
<link rel="stylesheet" href=" {{ asset('css/jquery.dataTables.css')}} ">

        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Acuerdos</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-block btn-primary">Nuevo acuerdo</button>
            </div>

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="tbl_acuerdos" class="display responsive nowrap cell-border" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th></th>
                  <th>Tipo Prestación</th>
                  <th>Prestación</th>
                  <th>Fecha</th>
                  <th>Estado</th>
                  <th>Cantidad Entregas</th>
                </tr>
              </thead>

            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->



@endsection

@section('scripts')
<!--<script src=" {{ asset('plugins/datatables/jquery.dataTables.min.js') }} "></script>-->
<script src=" {{ asset('plugins/datatables/jquery.dataTables.min.js') }} "></script>
<script src=" {{ asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }} "></script>

<script type="text/javascript">

  $(document).ready(function() {

    $('#perfil_nombre').text("Belisario Andrada");
    $('#perfil_estado').text("Activo").addClass("bg-green");
    $('#perfil_institucion').html("<b>Institución:</b> TZEDAKÁ");
    $('#perfil_centro').html("<b>Centro:</b> Jabad");
    $('#perfil_tipo_bene').html("<b>Tipo beneficiario: </b> Titular");
    $('#perfil_edad').html("<b>Edad:</b> 70 años");
    $('#perfil_programas').html("<b>Progamas:</b> Programa Salud, Fondo Sur");

    $('#detalle_4').addClass("active");

    function format ( d ) {

      if(d.id=="1"){
        return '<div class="row">'+
          '<div class="col-md-12"><b>Entregas</b></div></div>' +
          '<div class="row">'+
          '<div class="col-md-3">Fecha Entrega</div>'+
          '<div class="col-md-3">Importe</div>'+
          '<div class="col-md-3">Estado</div></div>'+
          '<div class="row">'+
          '<div class="col-md-3">02/03/2017</div>'+
          '<div class="col-md-3">$200</div>'+
          '<div class="col-md-3">Pendiente</div></div>';
      }
      else if(d.id=="2"){
        return '<div class="row">'+
          '<div class="col-md-12"><b>Entregas</b></div></div>' +
          '<div class="row">'+
          '<div class="col-md-3">Fecha Entrega</div>'+
          '<div class="col-md-3">Importe</div>'+
          '<div class="col-md-3">Estado</div></div>'+
          '<div class="row">'+
          '<div class="col-md-3">12/11/2016</div>'+
          '<div class="col-md-3">$750</div>'+
          '<div class="col-md-3">Realizada</div></div>'+
          '<div class="row">'+
          '<div class="col-md-3">12/04/2017</div>'+
          '<div class="col-md-3">$750</div>'+
          '<div class="col-md-3">Pendiente de entrega</div></div>';
      }
      else if(d.id=="3"){
        return '<div class="row">'+
          '<div class="col-md-12"><b>Entregas</b></div></div>' +
          '<div class="row">'+
          '<div class="col-md-3">Fecha Entrega</div>'+
          '<div class="col-md-3">Importe</div>'+
          '<div class="col-md-3">Estado</div></div>'+
          '<div class="row">'+
          '<div class="col-md-3">22/02/2016</div>'+
          '<div class="col-md-3">$750</div>'+
          '<div class="col-md-3">Realizada</div></div>'+
          '<div class="row">'+
          '<div class="col-md-3">22/03/2017</div>'+
          '<div class="col-md-3">$750</div>'+
          '<div class="col-md-3">Realizada</div></div>';
      }
      else if(d.id=="4"){
        return '<div class="row">'+
          '<div class="col-md-12"><b>Entregas</b></div></div>' +
          '<div class="row">'+
          '<div class="col-md-3">Fecha Entrega</div>'+
          '<div class="col-md-3">Importe</div>'+
          '<div class="col-md-3">Estado</div></div>'+
          '<div class="row">'+
          '<div class="col-md-3">20/12/2015</div>'+
          '<div class="col-md-3">---</div>'+
          '<div class="col-md-3">Realizada</div>';
      }
      else if(d.id=="5"){
        return '<div class="row">'+
          '<div class="col-md-12"><b>Entregas</b></div></div>' +
          '<div class="row">'+
          '<div class="col-md-3">Fecha Entrega</div>'+
          '<div class="col-md-3">Importe</div>'+
          '<div class="col-md-3">Estado</div></div>'+
          '<div class="row">'+
          '<div class="col-md-3">15/12/2015</div>'+
          '<div class="col-md-3">---</div>'+
          '<div class="col-md-3">Anulada</div>';
      }

      return "";

    }

    var dt = $('#tbl_acuerdos').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false,
        "ajax": "http://104.131.91.149/data.txt",
        "columns": [
            {
                "class":          "details-control",
                "orderable":      false,
                "data":           null,
                "defaultContent": ""
            },
            { "data": "tipo_prestacion" },
            { "data": "prestacion" },
            { "data": "fecha" },
            { "data": "estado" },
            { "data": "cantidad_entregas" }
        ],
        "order": [[1, 'asc']],
        "rowCallback": function( row, data, index ) {
            $('td:eq(4)', row).css("text-align", "center");
            $('td:eq(5)', row).css("text-align", "center");
            if ( data.estado == "Aprobado" ) {
              $('td:eq(4)', row).addClass("bg-green");
            }
            else if ( data.estado == "En progreso" ) {
              $('td:eq(4)', row).addClass("bg-blue");
            }
            else if ( data.estado == "Pendiente" ) {
              $('td:eq(4)', row).addClass("bg-yellow");
            }
            else if ( data.estado == "Finalizado" ) {
              $('td:eq(4)', row).addClass("bg-green");
            }
            else if ( data.estado == "Anulado" ) {
              $('td:eq(4)', row).addClass("bg-red");
            }
          }

    } );

    // Array to track the ids of the details displayed rows
    var detailRows = [];

    $('#tbl_acuerdos tbody').on( 'click', 'tr td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );

        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();

            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            row.child( format( row.data() ) ).show();

            // Add to the 'open' array
            if ( idx === -1 ) {
                detailRows.push( tr.attr('id') );
            }
        }
    } );

    // On each draw, loop over the `detailRows` array and show any child rows
    dt.on( 'draw', function () {
        $.each( detailRows, function ( i, id ) {
            $('#'+id+' td.details-control').trigger( 'click' );
        } );
    } );


  });
</script>

@endsection
