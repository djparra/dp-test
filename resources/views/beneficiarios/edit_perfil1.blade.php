
@extends('beneficiarios.template_edit')

@section('profile')


       <div>
         <!-- Custom Tabs -->
         <section>
           <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
               <li class="active"><a href="#tab_1" data-toggle="tab">Datos Generales</a></li>
               <li><a href="#tab_3" data-toggle="tab">Socioeconómico</a></li>
               <li><a href="#tab_2" data-toggle="tab">Salud</a></li>
               <li><a href="#tab_3" data-toggle="tab">Educación</a></li>
               <li><a href="#tab_3" data-toggle="tab">Laboral</a></li>
               <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
             </ul>
             <div class="tab-content">

               <div class="tab-pane active" id="tab_1">
                 <!-- form start -->
                  <form  class="form-horizontal">
                    <div class="box-body">

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
                        <label class="col-sm-2 control-label">F. Nacimiento</label>
                        <div class="input-group date" >
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

                        <label for="txt_piso" class="col-sm-2 control-label">Depto</label>
                        <div class="col-sm-2"><input type="text" id="txt_piso" class="form-control" placeholder=""></div>

                      </div>

                      <div class="row form-group">

                        <label for="txt_localidad" class="col-sm-2 control-label">Localidad</label>
                        <div class="col-sm-3"><input type="text" id="txt_localidad" class="form-control" placeholder=""></div>

                        <label for="txt_cp" class="col-sm-1 control-label">CP</label>
                        <div class="col-sm-2"><input type="text" id="txt_cp" class="form-control" placeholder=""></div>

                        <label for="txt_provincia" class="col-sm-2 control-label">Provincia</label>
                        <div class="col-sm-2"><input type="text" id="txt_provincia" class="form-control" placeholder=""></div>

                      </div>


                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <label id="cancelar" class="btn btn-default">Cancelar</label>
                      <label id="guardar" class="btn btn-info pull-right">Guardar</label>
                    </div>
                  </form>
               </div>
               <!-- /.tab-pane -->
               <div class="tab-pane" id="tab_2">
                 The European languages are members of the same family. Their separate existence is a myth.
                 For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                 in their grammar, their pronunciation and their most common words. Everyone realizes why a
                 new common language would be desirable: one could refuse to pay expensive translators. To
                 achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                 words. If several languages coalesce, the grammar of the resulting language is more simple
                 and regular than that of the individual languages.
               </div>
               <!-- /.tab-pane -->
               <div class="tab-pane" id="tab_3">
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                 when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                 It has survived not only five centuries, but also the leap into electronic typesetting,
                 remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                 sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                 like Aldus PageMaker including versions of Lorem Ipsum.
               </div>
               <!-- /.tab-pane -->
             </div>
             <!-- /.tab-content -->
           </div>
           <!-- nav-tabs-custom -->
         </section>

       </div>


@endsection

@section('scripts')
<!--<script src=" {{ asset('plugins/datatables/jquery.dataTables.min.js') }} "></script>-->

<script type="text/javascript">

  $(document).ready(function() {
    var $bene;

    $('#perfil_nombre').text("Ulises Dengue");
    $('#perfil_estado').text("Activo").addClass("bg-green");
    $('#perfil_centro').text("Centro TZDK1");
    $('#perfil_edad').text("70 años");


    $('#detalle_1').addClass("active");
//console.log({{$data}});
    // Al cargar la página, trae todas las instituciones para el Select
    $.ajax({
        url : "{{ url('api/beneficiarios/3') }}",
        type: 'get',
        success: function(data, textStatus, jqXHR)
        {
          $bene = $.parseJSON(data);

          var dateAr = $bene[0]["dp_f_nacimiento"].split('-');
          var newDate = dateAr[1] + '/' + dateAr[2] + '/' + dateAr[0].slice(-2);

          $('#txt_nombre').val($bene[0]["dp_nombre"]);
          $('#txt_apellido').val($bene[0]["dp_apellido"]);
          $('#txt_apellido_casada').val($bene[0]["dp_ape_casada"]);
          $('#cb_tipo_documento').val($bene[0]["dp_tipo_documento"]);
          $('#txt_nro_documento').val($bene[0]["dp_nro_documento"]);
          $('#cb_sexo').val($bene[0]["dp_sexo"]);
          $('#f_nacimiento').val(newDate);
          $('#cb_nacionalidad').val($bene[0]["dp_nacionalidad"]);
          $('#cb_estado_civil').val($bene[0]["dp_estado_civil"]);
          $('#txt_calle').val($bene[0]["dp_calle"]);
          $('#txt_numero').val($bene[0]["dp_numero"]);
          $('#txt_piso').val($bene[0]["dp_piso"]);
          $('#txt_localidad').val($bene[0]["dp_localidad"]);
          $('#txt_cp').val($bene[0]["dp_cp"]);
          $('#txt_provincia').val($bene[0]["dp_provincia"]);



        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            console.log("ERROR");
        }
    });



  });
</script>

@endsection
