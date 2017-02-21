@extends('template.main')

@section('link_css')
  <link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css')}}">
@endsection

@section('contenido')

<section class="content">
</br>
  <div class="row">

    <div class="col-md-12">
      <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Nuevo Beneficiario</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
          <div class="box-body">

            <p class="text-light-blue">Datos generales</p>

            <div class="row form-group">

              <label for="txt_nombre" class="col-sm-2 control-label">Nombre</label>
              <div class="col-sm-3"><input type="text" id="txt_nombre" class="form-control" placeholder=""></div>

              <label for="txt_apellido" class="col-sm-1 control-label">Apellido</label>
              <div class="col-sm-2"><input type="text" id="txt_apellido" class="form-control" placeholder=""></div>

              <label for="txt_apellido_casada" class="col-sm-2 control-label">Apellido Casada</label>
              <div class="col-sm-2"><input type="text" id="txt_apellido_casada" class="form-control" placeholder=""></div>

            </div>

            <div class="row form-group">
                <label class="col-sm-2" style="margin-bottom:0; margin-top:5px; text-align:right;">Tipo Documento</label>
                <div class="col-sm-2">
                  <select class="form-control" id="cb_tipo_documento">
                    <option value="DNI">DNI</option>
                    <option value="LE">LE</option>
                    <option value="LC">LC</option>
                    <option value="Pasaporte">Pasaporte</option>
                    <option value="CI">CI</option>
                    <option value="Otro">Otro</option>
                  </select>
              </div>

              <label for="txt_nro_documento" class="col-sm-2 control-label">Nro. Documento</label>
              <div class="col-sm-2"><input type="text" id="txt_nro_documento" class="form-control" placeholder=""></div>

              <label class="col-sm-2 control-label">Fecha Nacimiento</label>
              <div class="input-group date" style="padding: 0 15px; width:183px;">
                <input type="text" class="form-control col-sm-2" id="f_nacimiento">
              </div>

            </div>

            <div class="row form-group">

              <label class="col-sm-2" style="margin-bottom:0; margin-top:5px; text-align:right;">Género</label>
              <div class="col-sm-2">
                <select class="form-control" id="cb_sexo">
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
                </select>
              </div>

              <label class="col-sm-2" style="margin-bottom:0; margin-top:5px; text-align:right;">Nacionalidad</label>
              <div class="col-sm-2">
                <select class="form-control" id="cb_nacionalidad">
                  <option value="Argentina">Argentina</option>
                </select>
              </div>

              <label class="col-sm-2" style="margin-bottom:0; margin-top:5px; text-align:right;">Estado Civil</label>
              <div class="col-sm-2">
                <select class="form-control" id="cb_estado_civil">
                  <option value="Soltero">Soltero</option>
                  <option value="Casado">Casado</option>
                </select>
              </div>

            </div>

            </br>
            <p class="text-light-blue">Domicilio</p>

            <div class="row form-group">

              <label for="txt_calle" class="col-sm-2 control-label">Calle</label>
              <div class="col-sm-3"><input type="text" id="txt_calle" class="form-control" placeholder=""></div>

              <label for="txt_numero" class="col-sm-1 control-label">Número</label>
              <div class="col-sm-2"><input type="text" id="txt_numero" class="form-control" placeholder=""></div>

              <label for="txt_piso" class="col-sm-2 control-label">Piso - Departamento</label>
              <div class="col-sm-2"><input type="text" id="txt_piso" class="form-control" placeholder=""></div>

            </div>

            <div class="row form-group">

              <label for="txt_localidad" class="col-sm-2 control-label">Localidad</label>
              <div class="col-sm-3"><input type="text" id="txt_localidad" class="form-control" placeholder=""></div>

              <label for="txt_cp" class="col-sm-1 control-label">C. Postal</label>
              <div class="col-sm-2"><input type="text" id="txt_cp" class="form-control" placeholder=""></div>

              <label for="txt_provincia" class="col-sm-2 control-label">Provincia</label>
              <div class="col-sm-2"><input type="text" id="txt_provincia" class="form-control" placeholder=""></div>

            </div>


          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" id="cancelar" class="btn btn-default">Cancelar</button>
            <button type="submit" id="guardar" class="btn btn-info pull-right">Guardar</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->
    </div>

    <button type="button" id="btnTrigger" style="display:none" data-toggle="modal" data-target="#myModal"></button>
    <div class="modal modal-primary" id="myModal" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header"><h4 class="modal-title">Nuevo Beneficiario</h4></div>
          <div class="modal-body"></div>
          <div class="modal-footer"><button type="button" class="btn btn-outline pull-right" data-dismiss="modal">Close</button></div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

  </div>
</section>
@endsection

@section('scripts')

<script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }} "></script>

<script type="text/javascript">

  $(document).ready(function() {

    //Date picker
    $('#f_nacimiento').datepicker({
      autoclose: true
    });

    $("#cancelar").click(function() {
      history.go(-1);
    });

    $("#guardar").click(function() {
      var myObj = {};
      myObj["id_centro"] = "1";
      myObj["id_titular"] = "";
      myObj["dp_nombre"] = $("#txt_nombre").val();
      myObj["dp_apellido"] = $("#txt_apellido").val();
      myObj["dp_ape_casada"] = $("#txt_apellido_casada").val();
      myObj["dp_tipo_documento"] = $("#cb_tipo_documento").val();
      myObj["dp_nro_documento"] = $("#txt_nro_documento").val();
      myObj["dp_cuit_cuil"] = "";
      myObj["dp_sexo"] = $("#cb_sexo").val();
      myObj["dp_f_nacimiento"] = $("#f_nacimiento").val();
      myObj["dp_estado_civil"] = $("#cb_estado_civil").val();
      myObj["dp_nacionalidad"] = $("#cb_nacionalidad").val();
      myObj["dp_calle"] = $("#txt_calle").val();
      myObj["dp_numero"] = $("#txt_numero").val();
      myObj["dp_piso"] = $("#txt_piso").val();
      myObj["dp_cp"] = $("#txt_cp").val();
      myObj["dp_localidad"] = $("#txt_localidad").val();
      myObj["dp_provincia"] = $("#txt_provincia").val();
      myObj["dp_pais"] = "Argentina";

      $.ajax({
          url : "{{ url('api/beneficiarios') }}",
          type: 'post',
          contentType: 'application/json',
          data : JSON.stringify(myObj),
          success: function(data, textStatus, jqXHR)
          {
              //data - response from server
              console.log(data);
              $('div.modal-body').text("El beneficiario " + $("#txt_nombre").val() + " " + $("#txt_apellido").val() + " se guardó correctamente");
              $('#btnTrigger').click();
          },
          error: function (jqXHR, textStatus, errorThrown)
          {
              console.log("ERROR");
          }
      });

      return false;

    });

    $("button.btn-outline").click(function() {
        history.go(-1);
    });
  });


</script>

@endsection
