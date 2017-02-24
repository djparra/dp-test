
@extends('beneficiarios.template_edit')

@section('profile')


<link rel="stylesheet" href=" {{ asset('css/dataTables.responsive.min.css')}} ">
<link rel="stylesheet" href=" {{ asset('css/jquery.dataTables.css')}} ">
<link rel="stylesheet" href=" {{ asset('css/dataTables.bootstrap.css')}} ">

           <div class="box box-primary" style="min-height:540px;">
              <div class="box-header with-border">
                <h3 class="box-title">Perfil</h3>
                <span class="pull-right"><a href="#" class="text-muted dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-gear"></i></a>
                  <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-pencil-square-o"></i> Realizar entrevista</a></li>
                      <li><a href="#"><i class="fa fa-check"></i> Modificar estado</a></li>
                      <li><a href="#"><i class="fa fa-user-plus"></i> Agregar conviviente</a></li>
                      <li><a href="#"><i class="fa fa-star-o"></i> Asignar programa</a></li>
                      <li><a href="#"><i class="fa fa-address-card-o"></i> Realizar acuerdo</a></li>
                      <li><a href="#"><i class="fa fa-briefcase"></i> Registrar entrega</a></li>
                      <li><a href="#"><i class="fa fa-ambulance"></i> Pedir medicamentos</a></li>
                      <li><a href="#"><i class="fa fa-exchange"></i> Transfererir de centro</a></li>
                  </ul>
                </span>
              </div>
              <div class="box-body">

           <div class="nav-tabs-custom">
             <ul class="nav nav-tabs">
               <li class="active"><a href="#tab_1" data-toggle="tab">Datos Generales</a></li>
               <li><a href="#tab_2" data-toggle="tab">Socioeconómico</a></li>
               <li><a href="#tab_3" data-toggle="tab">Salud</a></li>
               <li><a href="#tab_4" data-toggle="tab">Educación</a></li>
               <li><a href="#tab_5" data-toggle="tab">Laboral</a></li>

             </ul>

             <div class="tab-content">

               <div class="tab-pane active" id="tab_1">
                 <!-- form start -->
                  <form  class="form-horizontal">
                    <div class="box-body">

                      <div class="row form-group">
                        <label for="txt_nombre" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-2"><input type="text" id="txt_nombre" class="form-control" placeholder=""></div>
                        <label for="txt_apellido" class="col-sm-2 control-label">Apellido</label>
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
                        <div class="col-sm-2"><input type="text" id="f_nacimiento" class="form-control" placeholder=""></div>
                      </div>

                      <div class="row form-group">
                        <label class="col-sm-2" style="margin-bottom:0; margin-top:5px; text-align:right;">Género</label>
                        <div class="col-sm-2"><input type="text" id="cb_sexo" class="form-control" placeholder=""></div>
<!--                        <div class="col-sm-2">
                          <select class="form-control" id="cb_sexo">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                          </select>
                        </div>
-->
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
                      <label id="guardar" class="btn btn-primary pull-right">Guardar</label>
                    </div>
                  </form>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?               </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna                 aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.                 Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="tab-pane" id="tab_4">
                  Non eram nescius, Brute, cum, quae summis ingeniis exquisitaque doctrina philosophi Graeco sermone tractavissent, ea Latinis litteris mandaremus, fore ut hic noster labor in varias reprehensiones incurreret. nam quibusdam, et iis quidem non admodum indoctis, totum hoc displicet philosophari. quidam autem non tam id reprehendunt, si remissius agatur, sed tantum studium tamque multam operam ponendam in eo non arbitrantur. erunt etiam, et ii quidem eruditi Graecis litteris, contemnentes Latinas, qui se dicant in Graecis legendis operam malle consumere. postremo aliquos futuros suspicor, qui me ad alias litteras vocent, genus hoc scribendi, etsi sit elegans, personae tamen et dignitatis esse negent.
                </div>
                <div class="tab-pane" id="tab_5">
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti                  atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique                  sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum                  facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil                  impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.                  Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates                  repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente                  delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat
                </div>

               <!-- /.tab-pane -->
             </div>
             <!-- /.tab-content -->
           </div>
           <!-- nav-tabs-custom -->
         </div>
       </div>


       <div class="row">
         <!-- left column -->
         <div class="col-md-6">
           <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Domicilio</h3>
              </div>
              <div class="box-body">
                <div class="map-container">
                  <img class="img-responsive" src="{{ asset('dist/img/mapa.jpg') }}" alt="Photo">
              </div>
                </div>
            </div>
         </div>

         <!-- right column -->
         <div class="col-md-6">
           <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Contactos</h3>
                <span class="pull-right">
                  <a href="#" class="text-muted dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i></a>
                  <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-user-plus"></i> Agregar contacto</a></li>
                  </ul>
                </span>
              </div>
              <div class="box-body">

                  <table id="tbl_contactos" class="display responsive nowrap cell-border" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Relación</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr><td>Joaquín Gutierrez</td><td>011-43422244</td><td>Vecino</td></tr>
                      <tr><td>Josefina Andrada</td><td>011-6636633</td><td>Hermana</td></tr>
                      <tr><td>Darío Martineitz</td><td>011-77663677</td><td>Amigo</td></tr>
                      <tr><td>Enrique Porta</td><td>011-9990000</td><td>Primo</td></tr>
                    </tbody>
                  </table>

              </div>
          </div>
        </div>



@endsection

@section('scripts')
<script src=" {{ asset('plugins/datatables/jquery.dataTables.min.js') }} "></script>
<script src=" {{ asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }} "></script>



<script type="text/javascript">

  $(document).ready(function() {
    var $bene;

    $('#perfil_nombre').text("Belisario Andrada");
    $('#perfil_estado').text("Activo").addClass("bg-green");
    $('#perfil_institucion').html("<b>Institución:</b> TZEDAKÁ");
    $('#perfil_centro').html("<b>Centro:</b> Jabad");
    $('#perfil_tipo_bene').html("<b>Tipo beneficiario: </b> Titular");
    $('#perfil_edad').html("<b>Edad:</b> 70 años");
    $('#perfil_programas').html("<b>Progamas:</b> Programa Salud, Fondo Sur");


    $('#detalle_1').addClass("active");

    $('#txt_nombre').val("Belisario");
    $('#txt_apellido').val("Andrada");
    $('#txt_apellido_casada').val("");
    $('#cb_tipo_documento').val("DNI");
    $('#txt_nro_documento').val("10111000");
    $('#cb_sexo').val("Masculino");
    $('#f_nacimiento').val("12/08/1950");
    $('#cb_nacionalidad').val("Argentina");
    $('#cb_estado_civil').val("Casado");
    $('#txt_calle').val("Paraguay");
    $('#txt_numero').val("3700");
    $('#txt_piso').val("1 A");
    $('#txt_localidad').val("CABA");
    $('#txt_cp').val("1022");
    $('#txt_provincia').val("CABA");


//console.log({{$data}});
    // Al cargar la página, trae todas las instituciones para el Select
    /*
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
*/
       $('#tbl_contactos').DataTable( {
          "paging":   false,
          "ordering": true,
          "info":     false,
          "searching": false,
          "order": [ 1, 'desc' ]
      });



  });
</script>

@endsection
