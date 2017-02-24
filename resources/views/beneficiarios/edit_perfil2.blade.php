@extends('beneficiarios.template_edit')



@section('profile')

<link rel="stylesheet" href=" {{ asset('css/dataTables.responsive.min.css')}} ">
<link rel="stylesheet" href=" {{ asset('css/jquery.dataTables.css')}} ">
<link rel="stylesheet" href=" {{ asset('css/dataTables.bootstrap.css')}} ">

        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Grupo Familiar</h3>
            <span class="pull-right"><a href="#" class="text-muted dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-gear"></i></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user-plus"></i> Agregar conviviente</a></li>
                <li><a href="#"><i class="fa fa-home"></i> Modificar grupo familiar</a></li>
              </ul>
            </span>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example" class="display responsive nowrap cell-border" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Beneficiario</th>
                  <th>Edad</th>
                  <th>Parentesco</th>
                  <th>Estado</th>
                  <th>Observaciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Belisario Andrada</td>
                  <td>70 años</td>
                  <td>Titular</td>
                  <td class="bg-green">ACTIVO</td>
                  <td>Observaciones Belisario</td>
                </tr>
                <tr>
                  <td>María Andrada</td>
                  <td>60 años</td>
                  <td>Cónyuge</td>
                  <td class="bg-green">ACTIVO</td>
                  <td>Observaciones María</td>
                </tr>
                <tr>
                  <td>Rubén Andrada</td>
                  <td>35 años</td>
                  <td>Hijo</td>
                  <td class="bg-green">ACTIVO</td>
                  <td>Observaciones Rubén</td>
                </tr>
                <tr>
                  <td>Romina Andrada</td>
                  <td>35 años</td>
                  <td>Hijo</td>
                  <td class="bg-green">ACTIVO</td>
                  <td>Observaciones Romina</td>
                </tr>
              </tbody>
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

    $('#detalle_2').addClass("active");

    $('#example').DataTable( {
        "paging":   false,
        "ordering": true,
        "info":     false,
        "searching": false,
        "rowCallback": function( row, data, index ) {
            $('td:eq(3)', row).css("text-align", "center");
          }
    });

  });
</script>

@endsection
