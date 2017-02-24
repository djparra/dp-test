@extends('template.main')

@section('title')
SIC
@endsection

@section('contenido')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Novedades
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
    <li class="active">Novedades</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>150</h3>
          <p>Nuevos Beneficiarios</p>
        </div>
        <div class="icon">
          <i class="ion ion-ios-people"></i>
        </div>
        <a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>44</h3>
          <p>Nuevos Acuerdos</p>
        </div>
        <div class="icon">
          <i class="ion ion-chatboxes"></i>
        </div>
        <a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>1495</h3>
          <p>Medicamentos entregados en el mes</p>
        </div>
        <div class="icon">
          <i class="ion ion-medkit"></i>
        </div>
        <a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>1</h3>
          <p>Nuevo centro en Montserrat</p>
        </div>
        <div class="icon">
          <i class="ion ion-home"></i>
        </div>
        <a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
  </div><!-- /.row -->

</section>

@endsection
