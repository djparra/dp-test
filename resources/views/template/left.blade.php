<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MENU PRINCIPAL</li>
      <li class="treeview" id="tree_beneficiarios">
          <a href="/beneficiarios">
          <i class="fa fa-dashboard"></i> <span>Beneficiarios</span>
        </a>
      </li>
      <li class="treeview" id="tree_prestaciones">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Prestaciones</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li id="tree_prestaciones_monetarias"><a href="/prestaciones/monetarias"><i class="fa fa-circle-o"></i> Monetarias</a></li>
          <li id="tree_prestaciones_con_entrega"><a href="/prestaciones/sce"><i class="fa fa-circle-o"></i> Servicios c/entrega</a></li>
          <li id="tree_prestaciones_sin_entrega"><a href="/prestaciones/sse"><i class="fa fa-circle-o"></i> Servicios s/entrega</a></li>
        </ul>
      </li>
      <li class="treeview" id="tree_acuerdos">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Acuerdos</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li id="tree_acuerdos_vigentes"><a href="/acuerdos/vigentes"><i class="fa fa-circle-o"></i> Vigentes</a></li>
          <li id="tree_acuerdos_finalizados"><a href="/acuerdos/finalizados"><i class="fa fa-circle-o"></i> Finalizados</a></li>
          <li id="tree_acuerdos_todos"><a href="/acuerdos/todos"><i class="fa fa-circle-o"></i> Todos</a></li>
        </ul>
      </li>
      <li class="treeview" id="tree_entregas">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>Entregas</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li tree_entregas_pendientes><a href="/entregas/pendientes"><i class="fa fa-circle-o"></i> Pendientes</a></li>
          <li tree_entregas_realizadas><a href="/entregas/realizadas"><i class="fa fa-circle-o"></i> Realizadas</a></li>
          <li tree_entregas_todas><a href="/entregas/todas"><i class="fa fa-circle-o"></i> Todas</a></li>
        </ul>
      </li>

      <li class="treeview" id="tree_mantenimiento">
        <a href="#">
          <i class="fa fa-table"></i> <span>Mantenimiento</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li id="tree_mantenimiento_instituciones"><a href="/instituciones"><i class="fa fa-circle-o"></i> Instituciones</a></li>
          <li id="tree_mantenimiento_centros"><a href="/centros"><i class="fa fa-circle-o"></i> Centros</a></li>
        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
