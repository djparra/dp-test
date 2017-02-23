
@extends('beneficiarios.template_edit')

@section('profile')




        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Acuerdos</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-block btn-primary btn-sm">Nuevo acuerdo</button>
            </div>

          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>Nro</th>
                <th>Tipo Prestación</th>
                <th>Prestación</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Cantidad Entregas</th>
              </tr>
              <tr>
                <td>183</td>
                <td>Monetaria</td>
                <td>Apoyo escolar</td>
                <td>02/01/2017</td>
                <td><span class="label label-warning">Pendiente</span></td>
                <td>2</td>
              </tr>
              <tr>
                <td>219</td>
                <td>Monetaria</td>
                <td>Viáticos</td>
                <td>12/10/2016</td>
                <td><span class="label label-success">En progreso</span></td>
                <td>2</td>
              </tr>
              <tr>
                <td>175</td>
                <td>Monetaria</td>
                <td>Expensas</td>
                <td>22/01/2016</td>
                <td><span class="label label-info">Finalizado</span></td>
                <td>3</td>
              </tr>
              <tr>
                <td>657</td>
                <td>Servicio c/entrega</td>
                <td>Psicólogo</td>
                <td>15/12/2015</td>
                <td><span class="label label-success">Aprobado</span></td>
                <td>2</td>
              </tr>
              <tr>
                <td>175</td>
                <td>Servicio c/entrega</td>
                <td>Coro</td>
                <td>15/12/2015</td>
                <td><span class="label label-danger">Anulado</span></td>
                <td>3</td>
              </tr>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->



@endsection

@section('scripts')
<!--<script src=" {{ asset('plugins/datatables/jquery.dataTables.min.js') }} "></script>-->

<script type="text/javascript">

  $(document).ready(function() {

    $('#perfil_nombre').text("Ulises Dengue");
    $('#perfil_estado').text("Activo").addClass("bg-green");
    $('#perfil_institucion').html("<b>Institución:</b> TZEDAKÁ");
    $('#perfil_centro').html("<b>Centro:</b> Jabad");
    $('#perfil_tipo_bene').html("<b>Tipo beneficiario: </b> Titular");
    $('#perfil_edad').html("<b>Edad:</b> 70 años");
    $('#perfil_programas').html("<b>Progamas:</b> Programa Salud, Fondo Sur");

    $('#detalle_4').addClass("active");

    console.log({{$data}});
  });
</script>

@endsection
