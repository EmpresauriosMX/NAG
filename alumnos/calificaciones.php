<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | ChartJS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
  <div class="wrapper">
  
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <a href="Index_alumnos.php" class="navbar-brand">
          <img src="../img/naglogo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
          <span class="brand-text font-weight-light">New Academic Generation</span>
        </a>
  
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Opciones de menu -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a  class="nav-link">|</a>
            </li>
            <li class="nav-item">
              <a href="asignaturas.php" class="nav-link">Asignaturas</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link">|</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Calificaciones</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link">|</a>
            </li>
            <li class="nav-item">
              <a href="Horario.php" class="nav-link">Horarios</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link">|</a>
            </li>
            <li class="nav-item">
              <a href="cambiar_contra.php" class="nav-link">Perfil</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link">|</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
              </a>
            </li>
            <!--Opciones de perfil-->
            <!--<li class="nav-item dropdown"> -->
              <!--<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Perfil</a>-->
              <!--<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">-->
                <!--<li><a href="#" class="dropdown-item">Editar perfil </a></li>-->
                <!--<li class="dropdown-divider"></li>-->
                <!--<li><a href="#" class="dropdown-item">Cambiar contrase??a</a></li>-->
              <!--</ul>-->
           <!-- </li>-->
            <!--fin opciones perfil-->
            
            
            <!--Imagen de usuario y nombre usuario-->
            <li class="nav-item">
            <a href="#">
              <img src="../dist/img/user1-128x128.jpg"  class="brand-image img-circle" style="opacity: .8">
              <span class="brand-text">Alumno: Daniel</span>
            </a>
            </li>
            <!--Fin imagen usuario-->
  
          </ul>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
      </div>
    </nav>

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-12">
          <div class="col-sm-2">
            <h1>Calificaciones</h1>
          </div>
          <div class="col-sm-4">
            <!--Botones desplegables de cuatri y parcial-->
            <div class="btn-group">
              <button type="button" class="btn btn-default">Cuatrimestre</button>
              <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="#">1</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">2</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">4</a>
              </div>
            </div> 
      
            <div class="btn-group">
                <button type="button" class="btn btn-default">Parcial</button>
                <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="#">1</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">2</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">3</a>
                </div>
            </div>

            <div class="btn-group">
              <button type="button" class="btn btn-default">Materia</button>
              <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="#">1</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">2</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">3</a>
              </div>
          </div>
            <!--Fin botones desplegables-->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Avances. Cuatrimeste _ parcial _</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <h5>Promedio: </h5> 
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Materia</th>
                      <th>Docente</th>
                      <th style="width: 100px">Calificaci??n</th>
                      <th>Progreso</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Interfaces</td>
                      <td>Lorenzo Balam Chay</td>
                      <td align="center">84</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 84%"></div>
                        </div>
                      </td>
                    </tr>
      
                    <tr>
                      <td>2.</td>
                      <td>Simulacion</td>
                      <td>Carlos Cabello</td>
                      <td align="center">92</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-success" style="width: 92%"></div>
                        </div>
                      </td>
                    </tr>
      
                    <tr>
                      <td>3.</td>
                      <td>Sistemas distribuidos</td>
                      <td>Guadalupe</td>
                      <td align="center">98</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar" style="width: 10%"></div>
                        </div>
                      </td>
                    </tr>
      
                    <tr>
                      <td>4.</td>
                      <td>Taller de Base de Datos</td>
                      <td>Miguel Garrido</td>
                      <td align="center">80</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-success" style="width: 80%"></div>
                        </div>
                      </td>
                    </tr>
      
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
          </div>
          <div class="col-6">
            <!-- jQuery Knob -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Calificaciones materia _ 
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgColor="#3c8dbc">

                    <div class="knob-label">materia</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="70" data-width="90" data-height="90" data-fgColor="#f56954">

                    <div class="knob-label">materia</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="-80" data-min="-150" data-max="150" data-width="90"
                           data-height="90" data-fgColor="#00a65a">

                    <div class="knob-label">Materia</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgColor="#00c0ef">

                    <div class="knob-label">materia</div>
                  </div>
                  <!-- ./col -->
                  
                </div>
                <!-- /.row -->
                <!--TAMA??O MEDIO-->
                <!--div class="row">
                  <div class="col-6 text-center">
                    <input type="text" class="knob" value="90" data-width="90" data-height="90" data-fgColor="#932ab6">

                    <div class="knob-label">Bandwidth</div>
                  </div>
                  
                  <div class="col-6 text-center">
                    <input type="text" class="knob" value="50" data-width="90" data-height="90" data-fgColor="#39CCCC">

                    <div class="knob-label">CPU</div>
                  </div>
                  
                </div-->
                <!-- /.row -->
                <!--TAMA??O MEDIO-->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  PROMEDIOS CUATRIMESTRALES 
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgColor="#3c8dbc">

                    <div class="knob-label">Cuatrimeste 1</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="70" data-width="90" data-height="90" data-fgColor="#f56954">

                    <div class="knob-label">Cuatrimeste 2</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="-80" data-min="-150" data-max="150" data-width="90"
                           data-height="90" data-fgColor="#00a65a">

                    <div class="knob-label">Cuatrimeste 3</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgColor="#00c0ef">

                    <div class="knob-label">Cuatrimeste 4</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgColor="#00c0ef">

                    <div class="knob-label">Cuatrimeste 5</div>
                  </div>
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgColor="#00c0ef">

                    <div class="knob-label">Cuatrimeste 6</div>
                  </div>
                </div>
                <!-- /.row -->
                <!--TAMA??O MEDIO-->
                <!--div class="row">
                  <div class="col-6 text-center">
                    <input type="text" class="knob" value="90" data-width="90" data-height="90" data-fgColor="#932ab6">

                    <div class="knob-label">Bandwidth</div>
                  </div>
                  
                  <div class="col-6 text-center">
                    <input type="text" class="knob" value="50" data-width="90" data-height="90" data-fgColor="#39CCCC">

                    <div class="knob-label">CPU</div>
                  </div>
                  
                </div-->
                <!-- /.row -->
                <!--TAMA??O MEDIO-->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Add Content Here -->
  </aside>
  <!-- /.control-sidebar -->
  

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    /* jQueryKnob */

    $('.knob').knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a   = this.angle(this.cv)  // Angle
            ,
              sa  = this.startAngle          // Previous start angle
            ,
              sat = this.startAngle         // Start angle
            ,
              ea                            // Previous end angle
            ,
              eat = sat + a                 // End angle
            ,
              r   = true

          this.g.lineWidth = this.lineWidth

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3)

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value)
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3)
            this.g.beginPath()
            this.g.strokeStyle = this.previousColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
            this.g.stroke()
          }

          this.g.beginPath()
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
          this.g.stroke()

          this.g.lineWidth = 2
          this.g.beginPath()
          this.g.strokeStyle = this.o.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
          this.g.stroke()

          return false
        }
      }
    })
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    $('.sparkline').each(function () {
      var $this = $(this)
      $this.sparkline('html', $this.data())
    })

    /* SPARKLINE DOCUMENTATION EXAMPLES https://omnipotent.net/jquery.sparkline/#s-about */
    drawDocSparklines()
    drawMouseSpeedDemo()

  })

  function drawDocSparklines() {

    // Bar + line composite charts
    $('#compositebar').sparkline('html', {
      type    : 'bar',
      barColor: '#aaf'
    })
    $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
      {
        composite: true,
        fillColor: false,
        lineColor: 'red'
      })


    // Line charts taking their values from the tag
    $('.sparkline-1').sparkline()

    // Larger line charts for the docs
    $('.largeline').sparkline('html',
      {
        type  : 'line',
        height: '2.5em',
        width : '4em'
      })

    // Customized line chart
    $('#linecustom').sparkline('html',
      {
        height      : '1.5em',
        width       : '8em',
        lineColor   : '#f00',
        fillColor   : '#ffa',
        minSpotColor: false,
        maxSpotColor: false,
        spotColor   : '#77f',
        spotRadius  : 3
      })

    // Bar charts using inline values
    $('.sparkbar').sparkline('html', { type: 'bar' })

    $('.barformat').sparkline([1, 3, 5, 3, 8], {
      type               : 'bar',
      tooltipFormat      : '{{value:levels}} - {{value}}',
      tooltipValueLookups: {
        levels: $.range_map({
          ':2' : 'Low',
          '3:6': 'Medium',
          '7:' : 'High'
        })
      }
    })

    // Tri-state charts using inline values
    $('.sparktristate').sparkline('html', { type: 'tristate' })
    $('.sparktristatecols').sparkline('html',
      {
        type    : 'tristate',
        colorMap: {
          '-2': '#fa7',
          '2' : '#44f'
        }
      })

    // Composite line charts, the second using values supplied via javascript
    $('#compositeline').sparkline('html', {
      fillColor     : false,
      changeRangeMin: 0,
      chartRangeMax : 10
    })
    $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
      {
        composite     : true,
        fillColor     : false,
        lineColor     : 'red',
        changeRangeMin: 0,
        chartRangeMax : 10
      })

    // Line charts with normal range marker
    $('#normalline').sparkline('html',
      {
        fillColor     : false,
        normalRangeMin: -1,
        normalRangeMax: 8
      })
    $('#normalExample').sparkline('html',
      {
        fillColor       : false,
        normalRangeMin  : 80,
        normalRangeMax  : 95,
        normalRangeColor: '#4f4'
      })

    // Discrete charts
    $('.discrete1').sparkline('html',
      {
        type     : 'discrete',
        lineColor: 'blue',
        xwidth   : 18
      })
    $('#discrete2').sparkline('html',
      {
        type          : 'discrete',
        lineColor     : 'blue',
        thresholdColor: 'red',
        thresholdValue: 4
      })

    // Bullet charts
    $('.sparkbullet').sparkline('html', { type: 'bullet' })

    // Pie charts
    $('.sparkpie').sparkline('html', {
      type  : 'pie',
      height: '1.0em'
    })

    // Box plots
    $('.sparkboxplot').sparkline('html', { type: 'box' })
    $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
      {
        type        : 'box',
        raw         : true,
        showOutliers: true,
        target      : 6
      })

    // Box plot with specific field order
    $('.boxfieldorder').sparkline('html', {
      type                     : 'box',
      tooltipFormatFieldlist   : ['med', 'lq', 'uq'],
      tooltipFormatFieldlistKey: 'field'
    })

      // click event demo sparkline
      $('.clickdemo').sparkline()
      $('.clickdemo').bind('sparklineClick', function (ev) {
        var sparkline = ev.sparklines[0],
            region    = sparkline.getCurrentRegionFields()
        value         = region.y
        alert('Clicked on x=' + region.x + ' y=' + region.y)
      })

      // mouseover event demo sparkline
      $('.mouseoverdemo').sparkline()
      $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
        var sparkline = ev.sparklines[0],
            region    = sparkline.getCurrentRegionFields()
        value         = region.y
        $('.mouseoverregion').text('x=' + region.x + ' y=' + region.y)
      }).bind('mouseleave', function () {
        $('.mouseoverregion').text('')
      })
  }

  /**
   ** Draw the little mouse speed animated graph
   ** This just attaches a handler to the mousemove event to see
   ** (roughly) how far the mouse has moved
   ** and then updates the display a couple of times a second via
   ** setTimeout()
   **/
  function drawMouseSpeedDemo() {
    var mrefreshinterval = 500 // update display every 500ms
    var lastmousex       = -1
    var lastmousey       = -1
    var lastmousetime
    var mousetravel      = 0
    var mpoints          = []
    var mpoints_max      = 30
    $('html').mousemove(function (e) {
      var mousex = e.pageX
      var mousey = e.pageY
      if (lastmousex > -1) {
        mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey))
      }
      lastmousex = mousex
      lastmousey = mousey
    })
    var mdraw = function () {
      var md      = new Date()
      var timenow = md.getTime()
      if (lastmousetime && lastmousetime != timenow) {
        var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000)
        mpoints.push(pps)
        if (mpoints.length > mpoints_max) {
          mpoints.splice(0, 1)
        }
        mousetravel = 0
        $('#mousespeed').sparkline(mpoints, {
          width        : mpoints.length * 2,
          tooltipSuffix: ' pixels per second'
        })
      }
      lastmousetime = timenow
      setTimeout(mdraw, mrefreshinterval)
    }
    // We could use setInterval instead, but I prefer to do it this way
    setTimeout(mdraw, mrefreshinterval);
  }



  
</script>
</body>
</html>