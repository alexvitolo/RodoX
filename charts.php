<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Charts</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="PagIni">Gestão Desempenho</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

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
            <span class="badge badge-danger">9+</span>
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
            <span class="badge badge-danger">7</span>
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
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="PagIni">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <!--
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Admin</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="index.php">Login</a>
            <a class="dropdown-item" href="register.php">Register</a>
            <a class="dropdown-item" href="forgot-password.php">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.php">404 Page</a>
            <a class="dropdown-item" href="blank.php">Blank Page</a>
          </div>
        </li> -->
        
        <li class="nav-item">
          <a class="nav-link" href="charts.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Gráficos</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.php">
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
            <li class="breadcrumb-item active">Overview</li>
          </ol>


          <div class="card mb-3">
           <div class="card-header">
              <div class="card-header">
                <i class="fas fa-chart-bar"></i>
                Indicadores MAXIMOS</div>
              <div class="card-body">
                <div id="container-server1" style="width: 280px; height: 200px; float: left; margin: 20px"></div>
                          <div id="container-server2" style="width: 280px; height: 200px; float: left; margin: 20px"></div>
                          <div id="container-server3" style="width: 280px; height: 200px; float: left; margin: 20px"></div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>



           <div class="card mb-3">
             <div class="card-header">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Exemplo Gráfico Line Bar</div>
                <div class="card-body">
                  <canvas id="mixed-chart" width="100%" height="30"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>


          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Bar Chart Example</div>
            <div class="card-body">
               <div id="main" style="width: 100%;height:400px;"></div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>


          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Circle Chart Example</div>
            <div class="card-body">
               <div id="main2" style="width: 100%;height:400px;"></div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>


          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Area Chart Example</div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          <div class="row">
            <div class="col-lg-8">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-bar"></i>
                  Bar Chart Example</div>
                <div class="card-body">
                  <canvas id="myBarChart" width="100%" height="50"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-chart-pie"></i>
                  Pie Chart Example</div>
                <div class="card-body">
                  <canvas id="myPieChart" width="100%" height="100"></canvas>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
            </div>
          </div>

          <p class="small text-center text-muted my-5">
            <em> Fim Dash Graficos</em>
          </p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Rodobens 2018</span>
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
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione "Logout" abaixo se você estiver pronto para encerrar a sessão.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="Logout">Logout</a>
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

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="js/highcharts.js"></script>
    <script src="js/echarts.min.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>

    <script>
      
      new Chart(document.getElementById("mixed-chart"), {
        type: 'bar',
        data: {
          labels: ["1900", "1950", "1999", "2050"],
          datasets: [{
              label: "Europe",
              type: "line",
              borderColor: "#8e5ea2",
              data: [408,547,675,734],
              fill: false
            }, {
              label: "Africa",
              type: "line",
              borderColor: "#3e95cd",
              data: [133,221,783,2478],
              fill: false
            }, {
              label: "Europe",
              type: "bar",
              backgroundColor: "rgba(0,0,0,0.2)",
              data: [408,547,675,734],
            }, {
              label: "Africa",
              type: "bar",
              backgroundColor: "rgba(0,0,0,0.2)",
              backgroundColorHover: "#3e95cd",
              data: [133,221,783,2478]
            }
          ]
        },
        options: {
          title: {
            display: true,
            text: 'Population growth (millions): Europe & Africa'
          },
          legend: { display: false }
        }
    });



// ---------------------- GRAFICOS JS INDICADORES MAX ---------------------------------------//


    var gaugeOptions = {
        chart: {
            type: 'solidgauge'
        },
        title: null,
        pane: {
            center: ['50%', '85%'],
            size: '140%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                innerRadius: '60%',
                outerRadius: '100%',
                shape: 'arc'
            }
        },
        tooltip: {
            enabled: false
        },
        // the value axis
        yAxis: {
            stops: [
                [0.1, '#00ff33'], // green
                [0.5, '#DDDF0D'], // yellow
                [0.7, '#DF5353'], // red 
                [0.9, '#050303'] // black
            ],
            lineWidth: 0,
            minorTickInterval: null,
            tickAmount: 2,
            title: {
                y: -70
            },
            labels: {
                y: 16
            }
        },
        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: 5,
                    borderWidth: 0,
                    useHTML: true
                }
            }
        }
    };



   var chartServer1 = Highcharts.chart('container-server1', Highcharts.merge(gaugeOptions, {
      yAxis: {
          min: 0,
          max: 500,
          title: {
              text: 'KPI- MAX 1 '
          }
      },
      credits: {
          enabled: false
      },
      series: [{
          name: 'Email',
          data: [102],
          dataLabels: {
              format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                  ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                     '<span style="font-size:12px;color:silver"> Prop.</span></div>'
          },
          tooltip: {
              valueSuffix: 'Prop.'
          }
      }]
  }));

  // The Server2 gauge

  var chartServer2 = Highcharts.chart('container-server2', Highcharts.merge(gaugeOptions, {
      yAxis: {
          min: 0,
          max: 500,
          title: {
              text: 'KPI MAX - 2'
          }
      },
      credits: {
          enabled: false
      },
      series: [{
          name: 'Email',
          data: [345],
          dataLabels: {
              format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                  ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                     '<span style="font-size:12px;color:silver"> Unidades</span></div>'
          },
          tooltip: {
              valueSuffix: ' Unidades'
          }
      }]
  }));


  // The Server3 gauge

  var chartServer3 = Highcharts.chart('container-server3', Highcharts.merge(gaugeOptions, {
      yAxis: {
          min: 0,
          max: 500,
          title: {
              text: 'KPI MAX - 3'
          }
      },
      credits: {
          enabled: false
      },
      series: [{
          name: 'Email',
          data: [499],
          dataLabels: {
              format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                  ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                     '<span style="font-size:12px;color:silver"> R$$</span></div>'
          },
          tooltip: {
              valueSuffix: ' R$$'
          }
      }]
  }));





// ---------------------------------------- ECHART EXAMPLE --------------------------------------//

      var myChart = echarts.init(document.getElementById('main'));

        // specify chart configuration item and data
        var option = {
            title: {
                text: 'ECharts entry example'
            },
            tooltip: {},
            legend: {
                data:['Sales']
            },
            xAxis: {
                data: ["shirt","cardign","chiffon shirt","pants","heels","socks"]
            },
            yAxis: {},
            series: [{
                name: 'Sales',
                type: 'bar',
                data: [5, 20, 36, 10, 10, 20]
            }]
        };

        // use configuration item and data specified to show chart
        myChart.setOption(option);




    var myChart = echarts.init(document.getElementById('main2'));

    // specify chart configuration item and data
    var option2 ={
              backgroundColor: '#2c343c',

              title: {
                  text: 'Gráfico Exemplo Con.',
                  left: 'center',
                  top: 20,
                  textStyle: {
                      color: '#ccc'
                  }
              },

              tooltip : {
                  trigger: 'item',
                  formatter: "{a} <br/>{b} : {c} ({d}%)"
              },

              visualMap: {
                  show: false,
                  min: 80,
                  max: 600,
                  inRange: {
                      colorLightness: [0, 1]
                  }
              },
              series : [
                  {
                      name:'RODOBENS',
                      type:'pie',
                      radius : '55%',
                      center: ['50%', '50%'],
                      data:[
                          {value:335, name:'CON1'},
                          {value:310, name:'CON2'},
                          {value:274, name:'CON3'},
                          {value:235, name:'CON4'},
                          {value:400, name:'CON5'}
                      ].sort(function (a, b) { return a.value - b.value; }),
                      roseType: 'radius',
                      label: {
                          normal: {
                              textStyle: {
                                  color: 'rgba(255, 255, 255, 0.3)'
                              }
                          }
                      },
                      labelLine: {
                          normal: {
                              lineStyle: {
                                  color: 'rgba(255, 255, 255, 0.3)'
                              },
                              smooth: 0.2,
                              length: 10,
                              length2: 20
                          }
                      },
                      itemStyle: {
                          normal: {
                              color: '#c23531',
                              shadowBlur: 200,
                              shadowColor: 'rgba(0, 0, 0, 0.5)'
                          }
                      },

                      animationType: 'scale',
                      animationEasing: 'elasticOut',
                      animationDelay: function (idx) {
                          return Math.random() * 200;
                      }
                  }
              ]
          };

        // use configuration item and data specified to show chart
        myChart.setOption(option2);



    </script>

  </body>

</html>
