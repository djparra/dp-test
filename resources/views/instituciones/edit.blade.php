@extends('template.main')
@section('contenido')

<section class="content">

  <div class="row">

    <div class="col-md-offset-1 col-md-10">
      <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Nueva Institución</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
          <div class="box-body">

            <div class="row form-group">
              <label for="txt_nombre" class="col-sm-1 control-label">Nombre</label>
              <div class="col-sm-8">
                <input type="text" id="txt_nombre" class="form-control" placeholder="nombre">
              </div>
              <label for="txt_codigo" class="col-sm-1 control-label">Código</label>
              <div class="col-sm-2">
                <input type="text" id="txt_codigo" class="form-control" placeholder="código">
              </div>
            </div>

            <div class="row form-group">
              <label for="txt_direccion" class="col-sm-1 control-label">Dirección</label>
              <div class="col-sm-11">
                <input type="text" id="txt_direccion" class="form-control" placeholder="dirección">
              </div>
            </div>

            <div class="row form-group">
              <label for="txt_telefono" class="col-sm-1 control-label">Telefono</label>
              <div class="col-sm-2">
                <input type="text" id="txt_telefono" class="form-control" placeholder="telefono">{{ $institucion["nombre"] }}
              </div>
              <label for="txt_email" class="col-sm-1 control-label">email</label>
              <div class="col-sm-2">
                <input type="text" id="txt_email" class="form-control" placeholder="email">
              </div>
              <label for="txt_contacto" class="col-sm-1 control-label">Contacto</label>
              <div class="col-sm-5">
                <input type="text" id="txt_contacto" class="form-control" placeholder="contacto">
              </div>
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
          <div class="modal-header"><h4 class="modal-title">Nueva Institución</h4></div>
          <div class="modal-body"></div>
          <div class="modal-footer"><button type="button" class="btn btn-outline pull-right" data-dismiss="modal">Close</button></div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>


</section>
@endsection

@section('scripts')

<script type="text/javascript">

  $(document).ready(function() {

    $("#cancelar").click(function() {
      history.go(-1);
    });

    $("#guardar").click(function() {
      var myObj = {};
      myObj["nombre"] = $("#txt_nombre").val();
      myObj["codigo"] = $("#txt_codigo").val();
      myObj["direccion"] = $("#txt_direccion").val();
      myObj["telefono"] = $("#txt_telefono").val();
      myObj["email"] = $("#txt_email").val();
      myObj["contacto"] = $("#txt_contacto").val();

//console.log(JSON.stringify(myObj));
      $.ajax({
          url : "{{ url('api/instituciones') }}",
          type: 'post',
          contentType: 'application/json',
          data : JSON.stringify(myObj),
          success: function(data, textStatus, jqXHR)
          {
              //data - response from server
              $('div.modal-body').text("La institución " + $("#txt_nombre").val() + " se guardó correctamente");
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
