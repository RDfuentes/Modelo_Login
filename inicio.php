<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>BIENVENIDO</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">

    <!-- On of Sideba -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="inicio.php">
        <div>RDfuentes</div>
        <div class="sidebar-brand-text mx-3" class="sidebar-brand-icon rotate-n-15" >SESIONES</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <div class="sidebar-heading">
        Agregar Usuarios
      </div>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Usuarios</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="nuevo_usuario.php"><button class="btn btn-success btn-block" >Nuevo Usuario</button></a> 
          </div>
        </div>
      </li>

    
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">


        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><button class="btn btn-success">Activo</button></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a href="index.php" class="dropdown-item"><button class="btn btn-danger btn-block">Salir</button></a>
              </div>
            </li>
          </ul>

        </nav>
        <!-- End of Topbar -->

<!-- ---------------------------------------------------  CONTENIDO DE CADA MODULO  -------------------------------------------- -->


        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
              <div class="card">
                <div class="header">

                  <div class="content">
                    <form  class="text-center border border-light p-5" action="#"   method="POST">
                      
                      <h3 style="color: red">RDFUENTES - BIENVENIDO</h3>
                      <p style="color: black">AHORA PUEDEN AGREGAR NUEVOS USUARIOS</p>

                    </form>
                  </div>

              </div>
            </div>
          </div>
        </div>

<!-- ---------------------------------------------------  FINAL DEL CONTENIDO DE CADA MODULO  ---------------------------------- -->      
        <!-- Begin Page Content -->
        <div class="container-fluid"></div>

        </div>
      </div>
    </div>
 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="assets/js/sb-admin-2.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="assets/js/demo/chart-area-demo.js"></script>
  <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
