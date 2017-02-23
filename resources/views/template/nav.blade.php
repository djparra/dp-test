<header class="main-header">
  <!-- Logo -->
  <a href="/" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini">SIC</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">SIC</span>
  </a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">

      <!-- Notifications: style can be found in dropdown.less -->
      <li class="dropdown notifications-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i>
          <span class="label label-warning">2</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">Notificaciones</li>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
              <li>
                <a href="#">
                  <i class="fa fa-user text-aqua"></i> Nuevo beneficiario en centro 1
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-smile-o text-red"></i> Nueva prestación en centro 2
                </a>
              </li>
            </ul>
          </li>
          <li class="footer"><a href="#">Ver todas</a></li>
        </ul>
      </li>

      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src=" {{ asset('dist/img/avatar5.png') }} " class="user-image" alt="Usuario">
          <span class="hidden-xs">Usuario A</span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="" class="img-circle" alt="User Image">
            <p>
              Usuario A - Centro Jabad
              <small>usuario desde Nov. 2012</small>
            </p>
          </li>
          <!-- Menu Body -->
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Perfil</a>
            </div>
            <div class="pull-right">
              <a href="#" class="btn btn-default btn-flat">Salir</a>
            </div>
          </li>
        </ul>
      </li>

    </ul>
  </div>
</nav>
</header>
