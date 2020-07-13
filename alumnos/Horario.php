<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NAG | Horario</title>

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
        <a href="Index_alumnos.html" class="navbar-brand">
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
              <a href="asignaturas.html" class="nav-link">Asignaturas</a>
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
              <a href="#" class="nav-link">Horarios</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link">|</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Perfil</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link">|</a>
            </li>
            
            <!--Opciones de perfil-->
            <!--<li class="nav-item dropdown"> -->
              <!--<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Perfil</a>-->
              <!--<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">-->
                <!--<li><a href="#" class="dropdown-item">Editar perfil </a></li>-->
                <!--<li class="dropdown-divider"></li>-->
                <!--<li><a href="#" class="dropdown-item">Cambiar contraseña</a></li>-->
              <!--</ul>-->
           <!-- </li>-->
            <!--fin opciones perfil-->
            
            
            <!--Imagen de usuario y nombre usuario-->
            <li class="nav-item">
            <a href="#">
              <img src="../dist/img/avatar4.png"  class="brand-image img-circle" style="opacity: .8">
              <span class="brand-text">Alumno: ID_74</span>
            </a>
            </li>
            <!--Fin imagen usuario-->
  
          </ul>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
      </div>
    </nav>

    <br>
<!--Botones desplegables de cuatri y parcial-->
<div class="row">
  <div class="col-sm-4">
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
  </div>
</div>
    <!--Fin botones desplegables-->
<br>
<!--Inicio de Tabla de Horario-->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Horario del Cuatrimestre: xx, Parcial: xx</h3>
                    </div>
                    <div class="card-body">
                      <table class="table table-bordered">
                        <thead>
                          <tr align="center">
                            <th>Hora</th>
                            <th>Lunes</th>
                            <th>Martes</th>
                            <th>Miercoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                            <th>Sabado</th>
                            <th>Domingo</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr align="center">
                            <td style="width: 90px">2:00-3:00</td>
                            <td>Programacion de Sisteas</td>
                            <td>Fundamentos de Desarrollo de Sistemas</td>
                            <td>Fundamentos de Desarrollo de Sistemas</td>
                            <td>Fundamentos de Desarrollo de Sistemas</td>
                            <td>Taller de Responsabilidad Social</td>
                            <td>~~~~~~</td>
                            <td>~~~~~~</td>
                          </tr>

                          <tr align="center">
                            <td style="width: 90px">3:00-4:00</td>
                            <td>Programacion de Sisteas</td>
                            <td>Fundamentos de Desarrollo de Sistemas</td>
                            <td>Fundamentos de Desarrollo de Sistemas</td>
                            <td>Fundamentos de Desarrollo de Sistemas</td>
                            <td>Taller de Responsabilidad Social</td>
                            <td>~~~~~~</td>
                            <td>~~~~~~</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>
        </div>
    </section>
<!--Fin de tabla de horario-->


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