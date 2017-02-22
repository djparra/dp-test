
@extends('beneficiarios.template_edit')

@section('profile')


<!-- row -->
<div class="row">
  <div class="col-md-12">
    <!-- The time line -->
    <ul class="timeline">
      <!-- timeline time label -->
      <li class="time-label">
            <span class="bg-red">
              23 Feb. 2017
            </span>
      </li>
      <!-- /.timeline-label -->
      <!-- timeline item -->
      <li>
        <i class="fa fa-eye bg-blue"></i>

        <div class="timeline-item">
          <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

          <h3 class="timeline-header">Acuerdo de medicamentos</h3>

          <div class="timeline-body">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
            weebly ning heekya handango imeem plugg dopplr jibjab, movity
            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
            quora plaxo ideeli hulu weebly balihoo...
          </div>
          <div class="timeline-footer">
            <a class="btn btn-primary btn-xs">Leer mas</a>

          </div>
        </div>
      </li>
      <!-- END timeline item -->
      <!-- timeline item -->
      <li>
        <i class="fa fa-user-plus bg-aqua"></i>

        <div class="timeline-item">
          <span class="time"><i class="fa fa-clock-o"></i>2 años</span>

          <h3 class="timeline-header no-border">Incorpora familiares</h3>
        </div>
      </li>
      <!-- END timeline item -->
      <li>
        <i class="fa fa-comments bg-yellow"></i>

        <div class="timeline-item">
          <span class="time"><i class="fa fa-clock-o"></i> 1 año</span>

          <h3 class="timeline-header"><a href="#">Jorge Martinez</a> realiza entrevista </h3>

          <div class="timeline-body">
            Observaciones segunda entrevista......
          </div>
          <div class="timeline-footer">
            <a class="btn btn-warning btn-flat btn-xs">ver entrevista</a>
          </div>
        </div>
      </li>
      <li class="time-label">
            <span class="bg-green">
              05 Feb. 2016
            </span>
      </li>

      <!-- timeline item -->
      <li>
        <i class="fa fa-user bg-aqua"></i>

        <div class="timeline-item">
          <span class="time"><i class="fa fa-clock-o"></i>2 años</span>

          <h3 class="timeline-header no-border">Estado: Activo</h3>
        </div>
      </li>
      <!-- END timeline item -->
      <!-- timeline item -->
      <li>
        <i class="fa fa-comments bg-yellow"></i>

        <div class="timeline-item">
          <span class="time"><i class="fa fa-clock-o"></i> 2 años</span>

          <h3 class="timeline-header"><a href="#">Jorge Martinez</a> realiza la entrevista inicial </h3>

          <div class="timeline-body">
            Observaciones iniciales......
          </div>
          <div class="timeline-footer">
            <a class="btn btn-warning btn-flat btn-xs">ver entrevista</a>
          </div>
        </div>
      </li>
      <!-- END timeline item -->
      <!-- timeline time label -->
      <li class="time-label">
            <span class="bg-green">
              12 Oct. 2015
            </span>
      </li>
      <!-- /.timeline-label -->

      <li>
        <i class="fa fa-clock-o bg-gray"></i>
      </li>
    </ul>
  </div>
  <!-- /.col -->
</div>


@endsection

@section('scripts')
<!--<script src=" {{ asset('plugins/datatables/jquery.dataTables.min.js') }} "></script>-->

<script type="text/javascript">

  $(document).ready(function() {
    var $bene;

    $('#perfil_nombre').text("Belisario Andrada");
    $('#perfil_estado').text("Activo").addClass("bg-green");
    $('#perfil_centro').html("<b>Centro:</b> Jabad");
    $('#perfil_tipo_bene').html("<b>Tipo beneficiario: </b> Titular");
    $('#perfil_edad').html("<b>Edad:</b> 70 años");
    $('#perfil_programas').html("<b>Progamas:</b> Programa Salud, Fondo Sur");


    $('#detalle_6').addClass("active");



  });
</script>

@endsection
