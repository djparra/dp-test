@extends('beneficiarios.template_edit')


@section('profile')


<link rel="stylesheet" href=" {{ asset('css/dataTables.responsive.min.css')}} ">
<link rel="stylesheet" href=" {{ asset('css/jquery.dataTables.css')}} ">
<link rel="stylesheet" href=" {{ asset('css/dataTables.bootstrap.css')}} ">

        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Medicamentos</h3>
            <span class="pull-right"><a href="#" class="text-muted dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-gear"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-ambulance"></i>Pedir Medicamentos</a></li>
                <li><a href="#"><i class="fa fa-thumbs-o-up"></i>Autorizar Pedido</a></li>
                <li><a href="#"><i class="fa fa-hand-stop-o"></i>Cancelar Pedido</a></li>
                <li><a href="#"><i class="fa fa-question"></i>Verificar Pedido</a></li>
                <li><a href="#"><i class="fa fa-gift"></i>Entregar Medicamentos</a></li>
              </ul>
            </span>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example" class="display responsive nowrap cell-border" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th></th>
                  <th>Nro Pedido</th>
                  <th>Fecha</th>
                  <th>Recepción estimada</th>
                  <th>Estado</th>
                  <th>Tipo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td>1974</td>
                  <td>09/01/2017</td>
                  <td>12/01/2017</td>
                  <td class="bg-green">Aprobado</td>
                  <td>Normal</td>
                </tr>
                <tr>
                  <td></td>
                  <td>1541</td>
                  <td>09/01/2017</td>
                  <td>10/01/2017</td>
                  <td class="bg-green">Aprobado</td>
                  <td>Urgente</td>
                </tr>
                <tr>
                  <td></td>
                  <td>1330</td>
                  <td>09/01/2017</td>
                  <td>12/01/2017</td>
                  <td class="bg-green">Aprobado</td>
                  <td>Normal</td>
                </tr>
                <tr>
                  <td></td>
                  <td>1200</td>
                  <td>10/01/2016</td>
                  <td>12/01/2016</td>
                  <td class="bg-red">Rechazado</td>
                  <td>Normal</td>
                </tr>
                <tr>
                  <td></td>
                  <td>1000</td>
                  <td>09/11/2016</td>
                  <td>14/11/2016</td>
                  <td class="bg-green">Aprobado</td>
                  <td>Normal</td>
                </tr>
              </tbody>
          </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->



@endsection

@section('scripts')

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

    $('#detalle_3').addClass("active");

    function format ( d ) {

      if(d.nro_pedido=="1974"){
        return '<div class="row"><div class="col-md-offset-1 col-md-10"><div class="box-body">'+
          ' <table class="display responsive cell-border" cellspacing="0" width="100%">'+
            ' <thead> <tr> <th>Medicamento</th> <th>Monodroga</th> <th>Cantidad</th> </tr> </thead>'+
            ' <tbody>'+
          	' <tr>  <td>Ibutenk 400</td> <td>Ibuprofeno</td> <td>1</td> </tr>'+
          	' <tr> <td>Paracetamol</td> <td>Paracetamol</td> <td>1</td> </tr>'+
            ' </tbody>'+
          ' </table></div></div></div>';
      }
      else if(d.nro_pedido=="1541"){
        return '<div class="row"><div class="col-md-offset-1 col-md-10"><div class="box-body">'+
          ' <table class="display responsive cell-border" cellspacing="0" width="100%">'+
            ' <thead> <tr> <th>Medicamento</th> <th>Monodroga</th> <th>Cantidad</th> </tr> </thead>'+
            ' <tbody>'+
          	' <tr>  <td>Reliveran</td> <td>Metoclopramida</td> <td>1</td> </tr>'+
          	' <tr> <td>Paracetamol</td> <td>Paracetamol</td> <td>1</td> </tr>'+
            ' </tbody>'+
          ' </table></div></div></div>';
      }
      else if(d.nro_pedido=="1330"){
        return '<div class="row"><div class="col-md-offset-1 col-md-10"><div class="box-body">'+
          ' <table class="display responsive cell-border" cellspacing="0" width="100%">'+
            ' <thead> <tr> <th>Medicamento</th> <th>Monodroga</th> <th>Cantidad</th> </tr> </thead>'+
            ' <tbody>'+
          	' <tr>  <td>Ibutenk 400</td> <td>Ibuprofeno</td> <td>1</td> </tr>'+
          	' <tr> <td>Reliveran</td> <td>Metoclopramida</td> <td>1</td> </tr>'+
            ' </tbody>'+
          ' </table></div></div></div>';
      }
      else if(d.nro_pedido=="1200"){
        return '<div class="row"><div class="col-md-offset-1 col-md-10"><div class="box-body">'+
          ' <table class="display responsive cell-border" cellspacing="0" width="100%">'+
            ' <thead> <tr> <th>Medicamento</th> <th>Monodroga</th> <th>Cantidad</th> </tr> </thead>'+
            ' <tbody>'+
          	' <tr>  <td>Aspirina</td> <td>A. acetilsalicílico</td> <td>4</td> </tr>'+
            ' </tbody>'+
          ' </table></div></div></div>';
      }
      else if(d.nro_pedido=="1000"){
        return '<div class="row"><div class="col-md-offset-1 col-md-10"><div class="box-body">'+
          ' <table class="display responsive cell-border" cellspacing="0" width="100%">'+
            ' <thead> <tr> <th>Medicamento</th> <th>Monodroga</th> <th>Cantidad</th> </tr> </thead>'+
            ' <tbody>'+
          	' <tr>  <td>Reliveran</td> <td>Metoclopramida</td> <td>1</td> </tr>'+
          	' <tr> <td>Paracetamol</td> <td>Paracetamol</td> <td>1</td> </tr>'+
            ' </tbody>'+
          ' </table></div></div></div>';
      }

      return "";

    }

    var dt = $('#example').DataTable( {
        "paging":   false,
        "ordering": true,
        "info":     false,
        "searching": false,
        "order": [ 1, 'desc' ],
        "columns": [
            {
                "class":          "details-control",
                "orderable":      false,
                "data":           null,
                "defaultContent": ""
            },
            { "data": "nro_pedido" },
            { "data": "fecha" },
            { "data": "recepcion" },
            { "data": "estado" },
            { "data": "tipo" }
        ],

        "rowCallback": function( row, data, index ) {
            $('td:eq(0)', row).css("text-align", "center");
            $('td:eq(1)', row).css("text-align", "center");
            $('td:eq(2)', row).css("text-align", "center");
            $('td:eq(3)', row).css("text-align", "center");
            $('td:eq(4)', row).css("text-align", "center");
            $('td:eq(5)', row).css("text-align", "center");
          }
    });
    // Array to track the ids of the details displayed rows
    var detailRows = [];

    $('#example tbody').on( 'click', 'tr td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = dt.row( tr );
        var idx = $.inArray( tr.attr('nro_pedido'), detailRows );

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
                detailRows.push( tr.attr('nro_pedido') );
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
