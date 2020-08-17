  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../img/naglogo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light">Administrador</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Bienvenido</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Estadísticas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <i class="fas fa-poll"></i>
                  <p>General</p>
                </a>
              </li>
            </ul>
          </li>
          
          <!--ALUMNOS-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Estudiantes
                <i class="fas fa-angle-left right"></i>
                <!--span class="badge badge-info right">6</span-->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-user-friends"></i>
                  <p>Ver Alumnos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Agregar_alumno.php" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>Agregar Alumnos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-user-edit"></i>
                  <p>Editar Alumnos</p>
                </a>
              </li>
            </ul>
          </li>
          <!--DOCENTES-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                Docentes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-users"></i>
                  <p>Ver Docentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Agregar_docente.php" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>Agregar Docente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-user-edit"></i>
                  <p>Editar Docente</p>
                </a>
              </li>
            </ul>
          </li>
          <!--ADMINS-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Administradores
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-user-friends"></i>
                  <p>Ver Administradores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>Agregar Administrador</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-user-edit"></i>
                  <p>Editar Administrador</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-header">ESTE CICLO</li>
          <li class="nav-item">
            <a href="ciclos.php" class="nav-link">
              <i class="nav-icon fas fa-circle-notch"></i>
              <p>
                Ciclos
                <span class="right badge badge-danger">No cambiar</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="generaciones.php" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Generaciones
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="materias.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Asignaturas
                <!--span class="badge badge-info right">2</span-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Grupos
              </p>
            </a>
          </li>
          
          <!--li class="nav-header">MISCELLANEOUS</li-->
          <li class="nav-item">
            <a href="licenciatura.php" class="nav-link">
              <i class="nav-icon fas fa-scroll"></i>
              <p>Licenciaturas</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="Datos_escolares.php" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p>Institución</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="Config_Usuario.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Configuración de usuario</p>
            </a>
          </li>
           <li class="nav-header">INFO. NAG</li>
           <li class="nav-item">
            <a href="Preguntas-Frecuentes" class="nav-link">
              <i class="nav-icon fas fa-book-reader"></i>
              <p>Guía de Usuario</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="guiadeseguridad.php" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>Guía de Seguridad</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>