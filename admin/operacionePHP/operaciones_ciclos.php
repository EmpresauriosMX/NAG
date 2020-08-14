<?php
    include("../../inc/funciones/conexal.php");
    $link = Conectarse();
    $operacion = $_GET["operacion"];
    switch($operacion){
        case "nuevo":
            $fecha1 = $_GET["fecha_i_n"];
            $fecha2 = $_GET["fecha_f_n"];
            $estatus = $_GET["estado_n"];   
            $ciclo_activo =$_GET["ciclo_activo"];

            if($ciclo_activo){
                $estatus_c = "futuro";
            }
            else{
                if ($estatus == false){
                    $estatus_c = "futuro";
                }
                else{
                    $estatus_c = "activo";
                }  
            }
            mysqli_query($link, "INSERT INTO `ciclo` (`ID_Ciclo`, `fecha_inicio`, `fecha_fin`, `estatus`) 
                                VALUES (NULL, '$fecha1', '$fecha2', '$estatus_c')");
        break;
        case "actual":
            $fecha1 = $_GET["fecha_i_a"];
            $fecha2 = $_GET["fecha_f_a"];
            $estatus = $_GET["estado_a"];
            $id_ciclo_a =$_GET["id"];
            
                mysqli_query($link, "UPDATE `ciclo` SET `fecha_inicio`='$fecha1',`fecha_fin`='$fecha2',`estatus`= '$estatus' WHERE `ID_Ciclo`= $id_ciclo_a");
        break;

        case "eliminar":
            $id_ciclo_a =$_GET["id"];
            mysqli_query($link, "DELETE FROM `ciclo` WHERE `ID_Ciclo`= $id_ciclo_a");

        break;

        
    }
?> 


<div class="row" id="recarga_ciclos">
            <div class="col-md-12 col-lg-10 mx-auto col-s-12">
                <!----------------------------------------ESTE CICLO--------------------------------------------->
                <?php
                  $result = mysqli_query($link, "SELECT * FROM `ciclo` WHERE estatus = 'activo'");
                  $hay_ciclo_activo = mysqli_num_rows($result);
                  $ciclo_actual=mysqli_fetch_array($result);
                  $checkBox = false;
                  if ($hay_ciclo_activo){
                    $checkBox = true;
                    echo'
                      <div class="card card-danger">
                          <div class="card-header">
                              <h3 class="card-title">Configuración del ciclo actual</h3>
                              <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                  </button>
                              </div>
                          </div>
                          <div class="card-body">
                              <h5>Ciclo actual: Fecha inicio: <strong>'.$ciclo_actual["fecha_inicio"].'</strong>    Fecha fin: <strong>'.$ciclo_actual["fecha_fin"].'</strong></h5>
                              <div class="actualizar_ciclo_actual">
                                <!-------FORMULARIO CICLO ACTUAL-------->
                                <form action="#" method="GET">
                                  <div class="form-group">
                                    <label>Periodo en rango de fechas:</label>
                                    <div class="row">
                                        <!--FECHA DE INICIO-->
                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label>Fecha de inicio</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" value="'.$ciclo_actual["fecha_inicio"].'" id="fecha_i_ciclo_a" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                              </div>
                                          </div>
                                        </div>
                                        <!--FECHA DE FIN-->
                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label>Fecha de fin</label>
                                              <div class="input-group">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" value="'.$ciclo_actual["fecha_fin"].'" id="fecha_f_ciclo_a" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                              </div>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                  <p style="color:red;"> Cambiar a ciclo inactivo </p>
                                  <p> Esta accion cambia toda la arquitectura de los alumnos, docentes, licenciaturas, calificaciones y demás </p>
                                  <input type="checkbox" id="estado_ciclo_a" name="my-checkbox" checked="true" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                  <!--input type="hidden" id="id_ciclo_a" value="'.$ciclo_actual["ID_Ciclo"].'"-->
                                  <button type="button" onClick=actualizar_ciclo("'.$ciclo_actual["ID_Ciclo"].'") class="btn btn-danger float-right">Guardar Cambios</button>
                                </form>
                              </div>
                          </div>
                      </div>  
                    ';
                  }
                  //--------------------------------CICLO NUEVO--------------------------------
                  echo'
                  <!--Fin Este ciclo----->
                  <!-----------------------------------------AGREGAR CICLO NUEVO ------------------------------>
                  <div class="card card-success">
                      <div class="card-header">
                          <h3 class="card-title">Agregar un cliclo nuevo</h3>
                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                  <i class="fas fa-minus"></i>
                              </button>
                          </div>
                      </div>
                      <div class="card-body">';
                      if($hay_ciclo_activo){
                        echo' <h5>Ciclo actual: Fecha inicio: <strong>'.$ciclo_actual["fecha_inicio"].'</strong>    Fecha fin: <strong>'.$ciclo_actual["fecha_fin"].'</strong></h5>';
                      }
                      else{
                        echo '<h5><strong> No hay un ciclo actual </strong></h5>';
                      }
                          echo'
                          <!-- Date range -->
                          <!--------------------------------------- FORMULARIO DEL CICLO NUEVO --------------------------->
                          <div class="form">
                            <form action="#" method="GET" name="form_ciclo_nuevo">
                              <div class="form-group">
                                <label>Periodo. Elige el principio y fin del ciclo</label>
                                <div class="row">
                                  <!--FECHA DE INICIO-->
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <label>Fecha de inicio</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="text" name="fecha_i_ciclo_n" id="fecha_i_ciclo_n" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>

                                    </div>
                                  </div>
                                  <!--FECHA DE FIN-->
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <label>Fecha de fin</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                          </div>
                                          <input type="text" name="fecha_f_ciclo_n" id="fecha_f_ciclo_n" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>

                                    </div>
                                  </div>
                                </div>
                              </div>
                              <p style="color:red;">1. Cambiar a ciclo activo </p>
                              <p> 1.1Esta accion cambia toda la arquitectura de los alumnos, docentes, licenciaturas, calificaciones y demás campos. aplicar solo cuando haya finalizado el ciclo anterior </p>
                              <p style="color:red;">2. Sólo cambia a activo si no hay otro ciclo activo </p>
                              <p style="color:red;">3. Si hay un ciclo activo se guardará como ciclo futuro </p>
                              ';
                              if(!$hay_ciclo_activo){
                                echo '<input type="checkbox"  name="my-checkbox" id="estado_ciclo_n" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">';
                              }
                              echo'
                              <!----- ON OFF BUTTON --->
                              
                              <!-- / FORMULARIO DEL CICLO NUEVO -->
                            </form> 
                          </div>
                            <input type="hidden" value="'.$hay_ciclo_activo.'" id="ciclo_activo">
                            <button type="button" onClick=nuevo_ciclo("nuevo") class="btn btn-success float-right">Guardar Cambios</button>
                      </div>
                  </div>
                  ';
                ?>
                <!-- Fin de agregar ciclo ---------->
                
                      <!--- -------------------- TABLA DE CICLOS ---------------------->
                      <div class="card" id="">
                          <div class="card-header">
                          <h3 class="card-title">CICLOS FUTUROS</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                          <table class="table">
                            <thead>
                              <tr>
                                <th style="width: 10px">#</th>
                                <th style="width: 10px">ID </th>
                                <th>Periodo</th>
                                <th>Acción</th>
                                <th>Estado</th  >
                              </tr>
                            </thead>
                            <tbody>
          <?php             //CICLO ACTUAL
                              $cont_ciclos = 0;
                              //Si existe un ciclo actual en la tabla de los ciclos se crea el primer elemento que es el ese ciclo
                              //en este se agrega el boton para encender o apagar el ciclo
                              if($hay_ciclo_activo){
                                $cont_ciclos += 1;
                                echo'
                                  <tr>
                                    <td>'.$cont_ciclos.'</td>
                                    <th>'.$ciclo_actual["ID_Ciclo"].'</th>
                                    <td>Fecha inicio: <strong>'.$ciclo_actual["fecha_inicio"].'</strong>    Fecha fin: <strong>'.$ciclo_actual["fecha_fin"].'</strong></h5></td>
                                    <td>
                                    <button type="button" class="btn btn-block btn-outline-primary btn-xs" data-toggle="modal" data-target="#modal-xl'.$ciclo_actual["ID_Ciclo"].'">Configurar</button>
                                    
                                    </td>
                                    <td><span class="badge bg-danger">Actual</span></td>
                                  </tr>
                                  <!-----------------------------MODAL DE CONFIGURACIÓN--------->
                                    <div class="modal fade" id="modal-xl'.$ciclo_actual["ID_Ciclo"].'">
                                      <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title">Configurando el ciclo Fecha inicio: <strong>'.$ciclo_actual["fecha_inicio"].'</strong>    Fecha fin: <strong>'.$ciclo_actual["fecha_fin"].'</strong></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                                    <form action="#" method="GET" name="form_ciclo_nuevo">
                                                      <div class="form-group">
                                                        <label>Rango de fechas</label>
                                                        <div class="row">
                                                          <!--FECHA DE INICIO-->
                                                          <div class="col-md-3">
                                                            <div class="form-group">
                                                              <label>Fecha de inicio</label>
                                                                <div class="input-group">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                  </div>
                                                                  <input type="text" value="'.$ciclo_actual["fecha_inicio"].'" id="fecha_i_ciclo_a'.$ciclo_actual["ID_Ciclo"].'" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <!--FECHA DE FIN-->
                                                          <div class="col-md-3">
                                                            <div class="form-group">
                                                              <label>Fecha de fin</label>
                                                                <div class="input-group">
                                                                  <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                  </div>
                                                                  <input type="text" value="'.$ciclo_actual["fecha_fin"].'" id="fecha_f_ciclo_a'.$ciclo_actual["ID_Ciclo"].'" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <p style="color:red;">1. Cambiar a ciclo activo </p>
                                                      <p> 1.1Esta accion cambia toda la arquitectura de los alumnos, docentes, licenciaturas, calificaciones y demás campos. aplicar solo cuando haya finalizado el ciclo anterior </p>
                                                      <p style="color:red;">2. Sólo cambia a activo si no hay otro ciclo activo </p>
                                                      <p style="color:red;">3. Si hay un ciclo activo se guardará como ciclo futuro </p>
                                                      <!----- ON OFF BUTTON --->
                                                      <input type="checkbox"  name="my-checkbox" id="estado_ciclo_a'.$ciclo_actual["ID_Ciclo"].'" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                                      <!-- / FORMULARIO DEL CICLO NUEVO -->
                                                    </form> 
                                                  
                                          </div>
                                          <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" data-dismiss="modal" onClick=actualizar_ciclo_inactivo('.$ciclo_actual["ID_Ciclo"].')>Guardar cambios</button>
                                          </div>
                                        </div>
                                        <!-- /.modal-content -->
                                      </div>
                                      <!-- /.modal-dialog -->
                                    </div>
                                  <!-- /.modal -->
                                ';
                              }
                              //----CICLOS FUTUROS
                              $ciclos_futuros = mysqli_query($link, "SELECT * FROM `ciclo` WHERE estatus = 'futuro'");
                              $n_ciclos_futuros = mysqli_num_rows($ciclos_futuros);
                              //$ciclos_futuros = mysqli_fetch_array($ciclos_futuros);
                              
                              while($row_ciclos_futuros = mysqli_fetch_array($ciclos_futuros)){
                                $cont_ciclos += 1;
                                echo'
                                  <tr>
                                    <td>'.$cont_ciclos.'</td>
                                    <th>'.$row_ciclos_futuros["ID_Ciclo"].'</th>
                                    <td>Fecha inicio: <strong>'.$row_ciclos_futuros["fecha_inicio"].'</strong>    Fecha fin: <strong>'.$row_ciclos_futuros["fecha_fin"].'</strong></td>
                                    <td>
                                      <button type="button" class="btn btn-block btn-outline-primary btn-xs" data-toggle="modal" data-target="#modal-xl'.$row_ciclos_futuros["ID_Ciclo"].'">Configurar</button>
                                      <button type="button" class="btn btn-block btn-outline-danger btn-xs" data-toggle="modal" data-target="#modal-default'.$row_ciclos_futuros["ID_Ciclo"].'">Eliminar</button>
                                    </td>
                                    <td><span class="badge bg-primary">Futuro</span></td>
                                  </tr>
                                  <!-----------------------------MODAL PARA ELIMINAR LOS CICLOS-------->
                                  <div class="modal fade" id="modal-default'.$row_ciclos_futuros["ID_Ciclo"].'">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Ciclo Fecha inicio: <strong>'.$row_ciclos_futuros["fecha_inicio"].'</strong> Fecha fin: <strong>'.$row_ciclos_futuros["fecha_fin"].'</strong></h5> </h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p>¿Desea eliminar este ciclo?</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                          <button type="button" class="btn btn-danger" data-dismiss="modal" onClick=eliminar_ciclo_futuro('.$row_ciclos_futuros["ID_Ciclo"].')>Eliminar</button>
                                        </div>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>


                                  <!-----------------------------MODAL DE CONFIGURACIÓN--------->
                                  <div class="modal fade" id="modal-xl'.$row_ciclos_futuros["ID_Ciclo"].'">
                                    <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Configurando el ciclo Fecha inicio: <strong>'.$row_ciclos_futuros["fecha_inicio"].'</strong>    Fecha fin: <strong>'.$row_ciclos_futuros  ["fecha_fin"].'</strong></h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                                
                                                  <form action="#" method="GET" name="form_ciclo_nuevo">
                                                    <div class="form-group">
                                                      <label>Rango de fechas</label>
                                                      <div class="row">
                                                        <!--FECHA DE INICIO-->
                                                        <div class="col-md-3">
                                                          <div class="form-group">
                                                            <label>Fecha de inicio</label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                </div>
                                                                <input type="text" value="'.$row_ciclos_futuros["fecha_inicio"].'" id="fecha_i_ciclo_a'.$row_ciclos_futuros["ID_Ciclo"].'" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                              </div>
                                                          </div>
                                                        </div>
                                                        <!--FECHA DE FIN-->
                                                        <div class="col-md-3">
                                                          <div class="form-group">
                                                            <label>Fecha de fin</label>
                                                              <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                </div>
                                                                <input type="text" value="'.$row_ciclos_futuros["fecha_fin"].'"  id="fecha_f_ciclo_a'.$row_ciclos_futuros["ID_Ciclo"].'" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                              </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <p style="color:red;">1. Cambiar a ciclo activo </p>
                                                    <p> 1.1Esta accion cambia toda la arquitectura de los alumnos, docentes, licenciaturas, calificaciones y demás campos. aplicar solo cuando haya finalizado el ciclo anterior </p>
                                                    <p style="color:red;">2. Sólo cambia a activo si no hay otro ciclo activo </p>
                                                    <p style="color:red;">3. Si hay un ciclo activo se guardará como ciclo futuro </p>
                                                    <!----- ON OFF BUTTON --->';
                                                      if(!$hay_ciclo_activo){
                                                          echo '<input type="checkbox"  name="my-checkbox" id="estado_ciclo_a'.$row_ciclos_futuros["ID_Ciclo"].'" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">';
                                                      }
                                                    echo '
                                                    <!-- / FORMULARIO DEL CICLO NUEVO -->
                                                    <input type="hidden" id="id_ciclo" value="">
                                                  </form> 
                                                
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary" data-dismiss="modal" onClick=actualizar_ciclo_inactivo('.$row_ciclos_futuros["ID_Ciclo"].')>Guardar cambios</button>
                                        </div>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>
                                  <!-- /.modal -->
                                ';
                              }
                echo '
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!----------------------FIN DE LA TABLA DE CICLOS--------------->
                    
              </div>
            </div>
            <!-- /.row (main row) -->
                    
                  ';
                ?>
