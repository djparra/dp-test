@extends('template.main')

@section('link_css')
<!--<link rel="stylesheet" href=" {{ asset('css/dataTables.responsive.min.css')}} ">-->
<link rel="stylesheet" href=" {{ asset('css/jquery.dataTables.css')}} ">

@endsection


@section('contenido')

<section class="content">

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
          <div class="box-header">
            <h3 class="box-title">Prestaciones</h3>
            <div class="box-tools pull-right">
              <button id="nueva_prestacion" type="button" class="btn btn-xs btn-primary pull-right" style="width:40px;">
                <i class="fa fa-fw fa-plus"></i>
              </button>
            </div>
          </div>
          <!-- /.box-header -->

          <div class="box-body">
            <table id="tabla_prestaciones" class="display cell-border" cellspacing="0" width="100%">
              <thead>
                <tr>
                <th class="dt-head-center">Nombre</th>
                <th class="dt-head-center">Código</th>
                <th class="dt-head-center">Area</th>
                <th class="dt-head-center">Programa</th>
                <th class="dt-head-center">Alcance</th>
                <th class="dt-head-center">Tipo Prestación</th>
                </tr>
              </thead>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>

</section>

@endsection

@section('scripts')
<script src=" {{ asset('plugins/datatables/jquery.dataTables.min.js') }} "></script>

<script type="text/javascript">

  $(document).ready(function() {

    // Click en nueva_institucion, llama a formulario de alta
    $(function(){
        $('#nueva_institucion').click(function(){
             window.location = "{{ url('/institucion') }}";
        });
    });
    //Activa el tree view de la derecha con esta opcion seleccionada
    $('#tree_prestaciones').addClass("active");
    $('#tree_prestaciones_monetarias').addClass("active");

    var table = $('#tabla_prestaciones').DataTable({
      "ajax": {"url":"/api/prestaciones","dataSrc": ""},
      "searching":   false,
      "paging":   false,
      "ordering": false,
      "info":     false,
      "columns": [
            { "data": "d_institucion" },
            { "data": "c_codigo_inst" },
            { "data": "f_crea", "render": function (data) {
                var date = new Date(data);
                var month = date.getMonth() + 1;
                return date.getDate() + "/" + (month.length > 1 ? month : "0" + month) + "/" + date.getFullYear();
            }},
            { "data": "id_estado" }
        ]

    });

  });
</script>

@endsection
