
@extends('beneficiarios.template_edit')

@section('profile')




        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Acuerdos</h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>Nro</th>
                <th>Prestación</th>
                <th>Acuerdo</th>
                <th>Estado</th>
                <th>Observaciones</th>
              </tr>
              <tr>
                <td>183</td>
                <td>Monetaria A</td>
                <td>11-7-2014</td>
                <td><span class="label label-success">Aprobado</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
              </tr>
              <tr>
                <td>219</td>
                <td>Monetaria B</td>
                <td>11-7-2014</td>
                <td><span class="label label-warning">Pendiente</span></td>
                <td>Blablablablabl blablabla bla.</td>
              </tr>
              <tr>
                <td>657</td>
                <td>Monetaria C</td>
                <td>11-7-2014</td>
                <td><span class="label label-primary">Aprobado</span></td>
                <td>Blablablablabl blablabla blaBlablablablabl blablabla bla.</td>
              </tr>
              <tr>
                <td>175</td>
                <td>Monetaria A</td>
                <td>11-7-2014</td>
                <td><span class="label label-danger">Rechazado</span></td>
                <td>Blablablablabl blablabla bla.</td>
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
    $('#perfil_centro').html("<b>Centro:</b> Jabad");
    $('#perfil_tipo_bene').html("<b>Tipo beneficiario: </b> Titular");
    $('#perfil_edad').html("<b>Edad:</b> 70 años");
    $('#perfil_programas').html("<b>Progamas:</b> Programa Salud, Fondo Sur");

    $('#detalle_4').addClass("active");

    console.log({{$data}});
  });
</script>

@endsection
