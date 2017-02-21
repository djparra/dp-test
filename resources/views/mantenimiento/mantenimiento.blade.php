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
                <th class="dt-head-center">Nombre</th>
                <th class="dt-head-center">Codigo</th>
                <th class="dt-head-center">Fecha de Alta</th>
                <th class="dt-head-center">Estado</th>
                </tr>
              </thead>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
          <div class="box-header">
            <h3 class="box-title">Centros</h3>
            <div class="box-tools pull-right">
              <button id="nuevo_centro" type="button" class="btn btn-xs btn-primary pull-right" style="width:40px;">
                <i class="fa fa-fw fa-plus"></i>
              </button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="tabla_beneficiarios" class="table table-bordered">
              <thead>
                <tr>
                <th>Nombre</th>
                <th>Domicilio</th>
                <th>Institución</th>
                <th>Fecha de Alta</th>
                <th>Estado</th>
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

    var table = $('#tabla_instituciones').DataTable({
      "ajax": {"url":"/api/instituciones","dataSrc": ""},
      "searching":   false,
      "paging":   false,
      "ordering": false,
      "info":     false,

        /*
      "initComplete":function () {
                          var api = this.api();
                          api.$('td').click( function () {
                              console.log(this.innerHTML );
                          });


                          api.$('td').on( 'mouseenter',  function () {
                            var rowIdx = table.cell(this).index().row;
console.log(rowIdx);
                            $( table.cells().nodes() ).removeClass( 'highlight' );
                            $( table.row( rowIdx ).nodes() ).addClass( 'highlight' );
                          });


                      },*/
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
/*
    $('#tabla_instituciones tbody').on( 'mouseenter', 'td', function () {
        var colIdx = table.cell(this).index().column;

        $( table.cells().nodes() ).removeClass( 'highlight' );
        $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
    } );
*/

  });

  </script>

  @endsection
