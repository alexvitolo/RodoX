<?php

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Analytics GD - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- <href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> -->

  </head>

  <body id="page-top" class="sidebar-toggled">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="PagIni">Gestão Desempenho</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <img src="../RodoX/imag/rodobens-logo.png" class="logoMob" style="margin-left: 15px; margin-right: auto;">

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- <span class="badge badge-danger">9+</span> -->
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- <span class="badge badge-danger">7</span> -->
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav toggled">
        <li class="nav-item active">
          <a class="nav-link" href="PagIni">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Admin</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="index">Login</a>
            <a class="dropdown-item" href="register">Register</a>
            <a class="dropdown-item" href="forgot-password">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404">404 Page</a>
            <a class="dropdown-item" href="blank">Blank Page</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Grágicos</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables">
            <i class="fas fa-fw fa-table"></i>
            <span>Tabelas</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview Cognos BI</li>
          </ol>

          <!-- Area Chart -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Faturamento Vendas Novos Varejo - 2018 
                <button type="button" style="float:right" class="btn btn-info" data-toggle="collapse" data-target="#demo" onclick="buttonFullScreen(btfull)">Visualisar</button><br><br>
                <button onclick="makeFullScreen(demo)" style="float:right; display: none" class="btn btn-info" id="btfull">FullScreen</button>
            </div>
            <div class="card-body collapse embed-responsive embed-responsive-16by9" id="demo">
              <iframe  class="embed-responsive-item"  src="http://analytics.rodobens.net:9300/bi/?pathRef=.public_folders%2FVendas%2FNovos%2FJoao%2FFaturamento+de+Autom%C3%B3veis+Novos&amp;ui_appbar=false&amp;ui_navbar=false&amp;format=HTML&amp;Download=false&amp;prompt=true"></iframe>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>


           <!-- Area Chart -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Cortesia- 2018 
                <button type="button" style="float:right" class="btn btn-info" data-toggle="collapse" data-target="#demo2" onclick="buttonFullScreen(btfull2)" >Visualisar</button><br><br>
                <button onclick="makeFullScreen(demo2)" style="float:right; display: none" class="btn btn-info" id="btfull2">FullScreen</button>
            </div>
            <div class="card-body collapse embed-responsive embed-responsive-16by9" id="demo2">
              <iframe  class="embed-responsive-item" src="http://analytics.rodobens.net:9300/bi/?pathRef=.public_folders%2FDATALAKE%2FRelat%C3%B3rios%2FCortesia%2FCortesias+BNDV%2FRelat%C3%B3rio+Acompanhamento+de+Cortesias&amp;ui_appbar=false&amp;ui_navbar=false&amp;format=HTML&amp;Download=false"></iframe>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>


           <!-- Area Chart -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Cortesia Painel - 2018 
                <button type="button" style="float:right" class="btn btn-info" data-toggle="collapse" data-target="#demo3"  onclick="buttonFullScreen(btfull3)">Visualisar</button><br><br>
                <button onclick="makeFullScreen(demo3)" style="float:right; display: none" class="btn btn-info" id="btfull3">FullScreen</button>
            </div>
            <div class="card-body collapse embed-responsive embed-responsive-16by9" id="demo3">
              <iframe  class="embed-responsive-item" src="http://analytics.rodobens.net:9300/bi/?perspective=dashboard&amp;pathRef=.public_folders%2FDATALAKE%2FRelat%C3%B3rios%2FCortesia%2FPainel+Cortesias&amp;ui_appbar=false&amp;ui_navbar=false&amp;action=view&amp;mode=dashboard"></iframe>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Acessos Ferramenta</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Alex Todobens</td>
                      <td>Test</td>
                      <td>Rio Preto</td>
                      <td>33</td>
                      <td>2011/04/25</td>
                      <td>$320,80</td>
                    </tr>
                      <tr>
                      <td>Alex Todobens</td>
                      <td>Test</td>
                      <td>Rio Preto</td>
                      <td>33</td>
                      <td>2011/04/25</td>
                      <td>$320,80</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Rodobens - Gestão Desempenho 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja Realizar Logout?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione "Logout" abaixo se você estiver pronto para encerrar a sessão.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="index">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->

    <!-- Custom scripts for ifram full screen mode-->
    <script src="js/iframe-full-screen.js"></script>

  </body>

</html>
