@extends('beneficiarios.template_edit')



@section('profile')

<link rel="stylesheet" href=" {{ asset('css/dataTables.responsive.min.css')}} ">
<link rel="stylesheet" href=" {{ asset('css/jquery.dataTables.css')}} ">

        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Grupo Familiar</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example" class="display responsive nowrap cell-border" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Beneficiario</th>
                  <th>Edad</th>
                  <th>Parentezco</th>
                  <th>Estado</th>
                  <th>Observaciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Rubén Andrada</td>
                  <td>35 años</td>
                  <td>Hijo</td>
                  <td><span class="label label-success">Aprobado</span></td>
                  <td>Observaciones conviviente Rubén</td>
                </tr>
                <tr>
                  <td>Romina Andrada</td>
                  <td>38 años</td>
                  <td>Hijo</td>
                  <td><span class="label label-success">Aprobado</span></td>
                  <td>Observaciones conviviente Romina</td>
                </tr>
                <tr>
                  <td>Ricardo Andrada</td>
                  <td>40 años</td>
                  <td>Hijo</td>
                  <td><span class="label label-warning">En proceso</span></td>
                  <td>Observaciones conviviente Ricardo</td>
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
    $('#perfil_centro').html("<b>Centro:</b> Jabad");
    $('#perfil_tipo_bene').html("<b>Tipo beneficiario: </b> Titular");
    $('#perfil_edad').html("<b>Edad:</b> 70 años");
    $('#perfil_programas').html("<b>Progamas:</b> Programa Salud, Fondo Sur");

    $('#detalle_2').addClass("active");

    $('#example').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false
    });

  });
</script>

@endsection
