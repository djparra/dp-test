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
            <h3 class="box-title">Beneficiarios</h3>
            <div class="box-tools pull-right">
              <button id="nuevo_beneficiario" type="button" class="btn btn-xs btn-primary pull-right" style="width:40px;">
                <i class="fa fa-fw fa-plus"></i>
              </button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="tabla_beneficiarios" class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Sexo</th>
                <th>Domicilio</th>
                <th>Centro</th>
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
        $('#nuevo_beneficiario').click(function(){
             window.location = "{{ url('/beneficiario') }}";
        });
    });

    //Activa el tree view de la derecha con esta opcion seleccionada
    $('#tree_beneficiarios').addClass("active");

    $('#tabla_beneficiarios').DataTable({
      "ajax": {"url":"/api/beneficiarios","dataSrc": ""}, //"datos.txt",
      "searching":   false,
      "paging":   false,
      "ordering": false,
      "info":     false,
      "columns": [
            { "data": "dp_nombre" },
            { "data": "dp_apellido" },
            { "data": "dp_nro_documento" },
            { "data": "dp_sexo" },
            { "data": "domicilio" },
            { "data": "centro" }
        ]
    });

    $('#tabla_beneficiarios tbody').on('click', 'tr', function (e) {
      var $data = $('#tabla_beneficiarios').dataTable().fnGetData(this);

      e.preventDefault();

        //console.log(this);
        //console.log( $('td:eq(0)', this).html() );
        //console.log($data['id']);
      //window.location.replace("beneficiario/" + $data['id']);
        //window.location="{{ URL::to('beneficiario/'.'1') }}";
window.location.href = "beneficiario/" + $data['id'];
    });


  });
/*
$(document).ready(function()
   {
     myFunction();
   });
   function myFunction()
   {
      alert("I am an alert box!")
   }
   */

</script>

@endsection
