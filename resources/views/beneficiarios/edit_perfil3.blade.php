@extends('beneficiarios.template_edit')


@section('profile')


<link rel="stylesheet" href=" {{ asset('css/dataTables.responsive.min.css')}} ">
<link rel="stylesheet" href=" {{ asset('css/jquery.dataTables.css')}} ">
<link rel="stylesheet" href=" {{ asset('css/dataTables.bootstrap.css')}} ">

        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Entrevistas</h3>
            <span class="pull-right"><a href="#" class="text-muted dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-gear"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-commenting-o"></i>Realizar Entrevista</a></li>
              </ul>
            </span>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example" class="display responsive nowrap cell-border" cellspacing="0" width="100%">
              <thead>
                <tr>
                <th>Fecha</th>
                <th>Tipo</th>
                <th>Evaluador</th>
                <th>Centro</th>
                <th>Observaciones</th>
                <th>Archivos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>12/10/2015</td>
                  <td class="bg-green">Evaluación</td>
                  <td>Jorge Martínez</td>
                  <td>Jabad</td>
                  <td>Observaciones de la primera entrevista</td>
                  <td><i class="fa fa-paperclip"></i></td>
                </tr>
                <tr>
                  <td>05/02/2016</td>
                  <td class="bg-yellow">Observación</td>
                  <td>Jorge Martínez</td>
                  <td>Jabad</td>
                  <td>Observaciones de la segunda entrevista</td>
                  <td><i class="fa fa-paperclip"></i></td>
                </tr>
                <tr>
                  <td>18/12/2016</td>
                  <td class="bg-blue">Intervención</td>
                  <td>Juan Rodríguez</td>
                  <td>Jabad</td>
                  <td>Observaciones de la tercera entrevista</td>
                  <td><i class="fa fa-paperclip"></i></td>
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

    var table =$('#example').DataTable( {
        "paging":   false,
        "ordering": true,
        "info":     false,
        "searching": false,
        "columnDefs": [ {
            targets: 4,
            render: function ( data, type, row ) {
                return data.substr( 0, 30 ) +'…';
            }
          }
         ],
        "rowCallback": function( row, data, index ) {
          $('td:eq(1)', row).css("text-align", "center");
          $('td:eq(5)', row).css("text-align", "center");
          }
    });

  });
</script>

@endsection
