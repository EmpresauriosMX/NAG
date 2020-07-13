<?php
include '../inc/templates/header.php';
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
          <h1>calificando al "x" del "x" por el "x"</h1>
        </div>
      </div>
    </div> <!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <!-- botones de busqueda-->
  <div class="margin">
    <div class="btn-group">
      <button type="button" class="btn btn-info btn-flat">licenciatura</button>
      <button type="button" class="btn btn-info btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu" role="menu">
        <a class="dropdown-item" href="#">sistemas</a>
        <a class="dropdown-item" href="#">psicologia</a>
      </div>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-danger btn-flat">grupo</button>
      <button type="button" class="btn btn-danger btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu" role="menu">
        <a class="dropdown-item" href="#">A</a>
        <a class="dropdown-item" href="#">B</a>
      </div>
    </div>
    <div class="btn-group">
      <button type="button" class="btn btn-success btn-flat">parcial</button>
      <button type="button" class="btn btn-success btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu" role="menu">
        <a class="dropdown-item" href="#">1</a>
        <a class="dropdown-item" href="#">2</a>
        <a class="dropdown-item" href="#">3</a>
        <a class="dropdown-item" href="#">x</a>
      </div>
    </div>
  </div>
  <!--fin de los botones de busqueda-->
  </div>
            <div class="card-body">

<table id="example2" class="table table-bordered table-hover">
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
                  <td>10</td>
                </tr>
                <tr>
                    <td>Maria</td>
                    <td>Perez</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Maria</td>
                    <td>Perez</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Maria</td>
                    <td>Perez</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Maria</td>
                    <td>Perez</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Maria</td>
                    <td>Perez</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Maria</td>
                    <td>Perez</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Maria</td>
                    <td>Perez</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Maria</td>
                    <td>Perez</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Maria</td>
                    <td>Perez</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Maria</td>
                    <td>Perez</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>sdsd</td>
                    <td>promedio</td>
                    <td>si</td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <table align="center">
    <tr>
        <td><a href="../docente/subir_calificacion_2.html"><button type="button" class="btn btn-block btn-danger btn-lg">cancelar</button></a></td>
        <td><a href="../docente/subir_calificacion_2.html"><button type="button" class="btn btn-block success btn-lg">calificar</button></a></td>
        <td><a href="../docente/subir_calificacion_2.html"><button type="button" class="btn btn-block btn-info btn-lg">imprimir</button></a></td>
      </tr>
</div>
<!--fin de la seccion de las tablas-->

</table>

<?php
include '../inc/templates/footer.php';
?>