
@extends('template.main')

@section('link_css')
<link rel="stylesheet" href=" {{ asset('bootstrap/css/simple-line-icons.css')}} ">
<link rel="stylesheet" href=" {{ asset('css/profile.min.css')}} ">

@endsection

@section('contenido')

<section class="content">

<h2 class="page-header">Beneficiario</h2>

     <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('dist/img/belisario.jpg') }}" alt="User profile picture">

              <h3 class="profile-username text-center" id="perfil_nombre"></h3>

              <p class="text-muted text-center" id="perfil_estado"></p>
              <h6 class="text-muted text-center" id="perfil_institucion"></h6>
              <h6 class="text-muted text-center" id="perfil_centro"></h6>
              <h6 class="text-muted text-center" id="perfil_tipo_bene"></h6>
              <h6 class="text-muted text-center" id="perfil_edad"></h6>
              <h6 class="text-muted text-center" id="perfil_programas"></h6>
<!--
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Centro</b> <a class="pull-right">Jabad La Plata</a>
                </li>
                <li class="list-group-item">
                  <b>Acuerdos vigentes</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Teléfono</b> <a class="pull-right">011-2224444</a>
                </li>
              </ul>
-->
              <div class="profile-usermenu">
                  <ul class="nav">
                    <li id="detalle_1">
                      <a href="http://104.131.91.149/beneficiario/{{$data}}/detalle/1">
                    		<i class="icon-user"></i> Perfil </a>
                    </li>
                    <li id="detalle_2">
                    	<a href="http://104.131.91.149/beneficiario/{{$data}}/detalle/2">
                    		<i class="icon-home"></i> Grupo Familiar </a>
                    </li>
                    <li id="detalle_3">
                    	<a href="http://104.131.91.149/beneficiario/{{$data}}/detalle/3">
                    		<i class="icon-bubbles"></i> Entrevistas </a>
                    </li>
                    <li id="detalle_4">
                    	<a href="http://104.131.91.149/beneficiario/{{$data}}/detalle/4">
                    		<i class="icon-note"></i> Acuerdos </a>
                    </li>
                    <li id="detalle_5">
                    	<a href="http://104.131.91.149/beneficiario/{{$data}}/detalle/5">
                    		<i class="icon-eye"></i> Medicamentos </a>
                    </li>
                    <li id="detalle_6">
                    	<a href="http://104.131.91.149/beneficiario/{{$data}}/detalle/6">
                    		<i class="icon-info"></i> Historia </a>
                    </li>
                  </ul>
              </div>

            <!--   <a href="#" class="btn btn-primary btn-block"><b>Ver Perfil</b></a>-->
            </div>
            <!-- /.box-body -->
          </div>
        </div>



       <div class="col-md-9">
         <!-- Custom Tabs -->
         <section>
                  @yield('profile')
         </section>

       </div>
</div>
</section>

@endsection


@section('scripts')


  <script type="text/javascript">
    console.log("TEMPLATE");

  </script>


@endsection
