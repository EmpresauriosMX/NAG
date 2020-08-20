<?php
include '../inc/templates/header.php';
include '../inc/funciones/funciones.php';
?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
<!-- inicion de seccion de tablas-->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Calificando al grupo A de la Licenciatura Sistemas Computacionales 6°</h1>
        </div>
      </div>
    </div> <!-- /.container-fluid -->
  </section>

  <div class="row">
    <div class="col-1"></div>
    <div class="col-8">
    <div class="card">
            <div class="card-header">
  <div class="margin">
    <div class="btn-group">
      <button type="button" class="btn btn-default">licenciatura</button>
      <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu" role="menu">
      <?php
            while($row=mysqli_fetch_array($resultado)){ ?> 
            <a class="dropdown-item" href="#"> <?php echo ($row["NombreLic"]);?> </a>
      <?php
} ?>
      </div>
    </div> <!--fin de btn-group-->
    <div class="btn-group">
      <button type="button" class="btn btn-default">grupo</button>
      <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu" role="menu">
        <a class="dropdown-item" href="#">A</a>
        <a class="dropdown-item" href="#">B</a>
      </div>
    </div> <!--fin de btn-grupo-->
    <div class="btn-group">
      <button type="button" class="btn btn-default">parcial</button>
      <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu" role="menu">
        <a class="dropdown-item" href="#">1</a>
        <a class="dropdown-item" href="#">2</a>
        <a class="dropdown-item" href="#">3</a>
        <a class="dropdown-item" href="#">x</a>
      </div>
    </div> <!-- fin de btn-grupo-->
  </div> <!--fin de margin-->
  </div> <!-- fin de card-header-->


            <div class="card-body">

<table id="example2" name="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>calificacion</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Maria</td>
                  <td>Perez</td>
                  <td> <input type="text" name="calificacion_prueba" id="calificacion" class="calificaciones" placeholder="calificacion"  required disabled></td>
                </tr>
                <tr>
                    <td>Juan</td>
                    <td>Ramirez</td>
                    <td> <input type="text" name="calificacion1" id="calificacion1" class="calificaciones" placeholder="calificacion"  required disabled></td>
                </tr>
                <tr>
                    <td>Jose</td>
                    <td>Jimenez</td>
                    <td> <input type="text" name="calificacion2" id="calificacion2" placeholder="calificacion"  required disabled></td>
                </tr>
                <tr>
                    <td>Pablo</td>
                    <td>Escobar</td>
                    <td> <input type="text" name="calificacion3" id="calificacion3" placeholder="calificacion"  required disabled></td>
                </tr>
                <tr>
                    <td>Fernando</td>
                    <td>Pedraza</td>
                    <td> <input type="text" name="calificacion4" id="calificacion4" placeholder="calificacion"  required disabled></td>
                </tr>
                <tr>
                    <td>Abigail</td>
                    <td>Gonzalez</td>
                    <td> <input type="text" name="calificacion5" id="calificacion5" placeholder="calificacion"  required disabled></td>
                </tr>
                <tr>
                    <td>Diana</td>
                    <td>Garcia</td>
                    <td> <input type="text" name="calificacion6" id="calificacion6" placeholder="calificacion"  required disabled></td>
                </tr>
                <tr>
                    <td>Victor</td>
                    <td>Cruz</td>
                    <td> <input type="text" name="calificacion7" id="calificacion7" placeholder="calificacion"  required disabled></td>
                </tr>
                <tr>
                    <td>Promedio</td>
                    <td>General</td>
                    <td> <input type="text" name="calificacion0" id="calificacion0" placeholder="calificacion"  required disabled></td>
                </tr>
                </tbody>
              </table>
            </div> <!-- /.card-body -->
          </div>  <!--fin de card-->  
    </div>
    <div class="col-2">
      <!-- 1-->
      <a href="#"><div class="info-box bg-gradient-warning" name="subir_calificacion" id="subir_calificacion">
  <span class="info-box-icon"><i class="far fa-copy"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Calificar</span>
  </div>
</div></a>

       <!--2 -->

       <a href="#">
       <div class="info-box bg-success">
  <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>
  <div class="info-box-content"> 
    <span class="info-box-text">Descargar</span>
  </div>
</div></a>
        <!-- 3-->
        <a href="#">
       
        <div class="info-box mb-3 bg-danger">
  <span class="info-box-icon"><i class="fa fa-ban"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Cancelar</span>
  </div>
</div></a>

<!-- 4-->
<a href="#" id="confirmacion" name="confirmacion" style="display: none">
<div class="info-box bg-info">
  <span class="info-box-icon"><i class="far fa-flag"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">subir</span>
  </div>
</div>
</a>

    </div>
  </div>
<?php
include '../inc/templates/footer.php';
?>