<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema Ventas">
    <meta name="author" content="">
    <meta name="keyword" content="Sistema ventas Laravel Vue Js, Sistema compras Laravel Vue Js">
    <link rel="shortcut icon" href="vendors/img/favicon.png">
    <title>Sistema Ventas</title>
    <!-- Icons -->
    <link href="vendors/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/css/simple-line-icons.min.css" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="vendors/css/style.css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">

    <div id="app">

    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Sistema</a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Escritorio</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Configuraciones</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item d-md-down-none">
                <a class="nav-link" href="#" data-toggle="dropdown">
                    <i class="icon-bell"></i>
                    <span class="badge badge-pill badge-danger">5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Notificaciones</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-envelope-o"></i> Ingresos
                        <span class="badge badge-success">3</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-tasks"></i> Ventas
                        <span class="badge badge-danger">2</span>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="vendors/img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    <span class="d-md-down-none">admin </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Cuenta</strong>
                    </div>
                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Perfil</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Cerrar sesión</a>
                </div>
            </li>
        </ul>
    </header>

    <div class="app-body">
            @include('template.sidebar')

        <!-- Contenido Principal -->
            @yield('content')
        <!-- /Fin del contenido principal -->
    </div>

    </div> /* end of id app */
    

    <footer class="app-footer">
        <span><a href="#">Sistema Venta</a> &copy; 2017</span>
        <span class="ml-auto">Desarrollado por <a href="#">Sistema Venta</a></span>
    </footer>




    <!-- Bootstrap and necessary plugins -->
    <script src="vendors/js/jquery.min.js"></script>
    <script src="vendors/js/bootstrap.min.js"></script>

 
    <!-- Vue JS(below jquery works) -->
         <script src="js/app.js"></script>
    <!-- Vue JS -->

         


     <script src="vendors/js/popper.min.js"></script>
  
    <script src="vendors/js/pace.min.js"></script>
  <!-- GenesisUI main scripts -->
    <script src="vendors/js/template.js"></script>



  

          <!-- Plugins and scripts required by all views -->
    <script src="vendors/js/Chart.min.js"></script>



  
  
</body>

</html>