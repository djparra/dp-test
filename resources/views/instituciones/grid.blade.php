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
            <h3 class="box-title">Instituciones</h3>
            <div class="box-tools pull-right">
              <button id="nueva_institucion" type="button" class="btn btn-xs btn-primary pull-right" style="width:40px;">
                <i class="fa fa-fw fa-plus"></i>
              </button>
            </div>
          </div>
          <!-- /.box-header -->

          <div class="box-body">
            <table id="tabla_instituciones" class="display cell-border" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th class="dt-head-center">id</th>
                  <th class="dt-head-center">Nombre</th>
                  <th class="dt-head-center">Codigo</th>
                  <th class="dt-head-center">Dirección</th>
                  <th class="dt-head-center">Fecha de Alta</th>
                  <th class="dt-head-center">Teléfono</th>
                  <th class="dt-head-center">Contacto</th>
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
    //Activa el tree view de la izquierda con esta opcion seleccionada
    $('#tree_mantenimiento').addClass("active");
    $('#tree_mantenimiento_instituciones').addClass("active");

    var table = $('#tabla_instituciones').DataTable({
      "ajax": {"url":"/api/instituciones","dataSrc": ""},
      "searching":   false,
      "paging":   false,
      "ordering": false,
      "info":     false,
      "columns": [
            { "data": "id", "visible":false, "sercheable":false },
            { "data": "nombre" },
            { "data": "codigo" },
            { "data": "direccion" },
            { "data": "f_crea", "render": function (data) {
                var date = new Date(data);
                var month = date.getMonth() + 1;
                return date.getDate() + "/" + (month.length > 1 ? month : "0" + month) + "/" + date.getFullYear();
            }},
            { "data": "telefono" },
            { "data": "contacto" }
        ]

    });

    $('#tabla_instituciones tbody').on('click', 'tr', function () {
        var data = $('#tabla_instituciones').dataTable().fnGetData(this);
        console.log(data['id']);


      });

  });
</script>

@endsection
