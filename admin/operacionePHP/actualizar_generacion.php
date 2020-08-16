<?php
    include("../../inc/funciones/conexal.php");
    $link = Conectarse();
    $fecha1 = $_GET["fecha_i_f"];
    $fecha2 = $_GET["fecha_f_f"];
    $estatus = $_GET["estatus"];
    $id = $_GET["id"];
    mysqli_query($link, "UPDATE `generaciones` SET `fecha_inicio`= '$fecha1',`fecha_fin`= '$fecha2',`estatus`= $estatus WHERE `id_generacion`= $id");


                $generaciones = mysqli_query($link, "SELECT * FROM `generaciones` WHERE estatus = 2");
                $n_generaciones = mysqli_num_rows($generaciones);
                //$ciclos_futuros = mysqli_fetch_array($ciclos_futuros);
                //crea una carta de configuracion por cada generacion
                while($row_generaciones = mysqli_fetch_array($generaciones)){
                  $id_generacion = $row_generaciones["id_generacion"];
                  //Datos de la generacion
                  $result = mysqli_query($link, "SELECT * FROM `generaciones` WHERE estatus = 2 AND id_generacion = $id_generacion");
                  $hay_ciclo_activo = mysqli_num_rows($result);
                  $generacion=mysqli_fetch_array($result);
                  //CICLO ACTUAL
                  $ciclos= mysqli_query($link, "SELECT `ciclo`.ID_Ciclo, ciclo.fecha_inicio , ciclo.fecha_fin FROM `generaciones-ciclos`,`ciclo` WHERE `generaciones-ciclos`.`id_generacion` = $id_generacion and `ciclo`.`ID_Ciclo`= `generaciones-ciclos`.`ID_Ciclo` and `ciclo`.`estatus`= 'activo'");
                  $hay_ciclo_activo = mysqli_num_rows($ciclos);
                  $ciclo_actual=mysqli_fetch_array($ciclos);
                  $cont_ciclos = 0;
                  echo'
                    <div class="card card-info ">
                      <div class="card-header">
                        <h3 class="card-title">Configuración de generacion futura ID '.$id_generacion.'</h3>
                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                  <i class="fas fa-minus"></i>
                              </button>
                          </div>
                      </div>
                          
                      <!-- /.card-header -->
                      <!-- form start -->
                      
                          <div class="card-body">
                              <h3>Generación inicio <strong>'.$generacion["fecha_inicio"].' </strong> fin <strong> '.$generacion["fecha_fin"].' </strong></h3>
                              <label for="ciclo">Periodo</label>
                              <div class="row">
                                  <div class="col-md-3">
                                    <!-- Fecha 1 -->
                                    <label >Inicio</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                      </div>
                                      <input type="text" value="'.$generacion["fecha_inicio"].'" id="fecha_i_generacion_f'.$id_generacion.'" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                    </div>
                                  </div>
                                  
                                  <div class="col-md-3">
                                    <!-- Fecha 1 -->
                                    <label >Fin</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                      </div>
                                      <input type="text" value="'.$generacion["fecha_fin"].'" id="fecha_f_generacion_f'.$id_generacion.'" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                    </div>
                                  </div>
                                  
                              </div>     
                              
                            <br>
                            <div class="row">
                              <div class="col-md-12">
                                <h6 style="color:red;">Cambiar a generación desactivada</h6>
                                <p>Esta acción cambia toda la arquitectura de los alumnos, docentes,
                                    licenciaturas, calificaciones y más
                                </p>
                                <div class="form-group">
                                <input type="checkbox" id="estado_generacion_f'.$id_generacion.'" name="my-checkbox"  data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                </div>
                                <button type="button" onClick="actualizar_generacion_f('.$id_generacion.')" class="btn btn-success float-right">Guardar Cambios</button>
                              </div>
                            </div>
                              
                            <h4>Ciclos de la generación</h4>
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
                                      ';           
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
                                                <button type="button" class="btn btn-block btn-outline-danger btn-xs" data-toggle="modal" data-target="#modal-default'.$ciclo_actual["ID_Ciclo"].'">Remover ciclo</button>
                                                </td>
                                                <td><span class="badge bg-danger">Actual</span></td>
                                              </tr>
                                              <!-------------------MODAL DE REMOVER CICLO DE LA GENERACION--------->
                                              <div class="modal fade" id="modal-default'.$ciclo_actual["ID_Ciclo"].'">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h4 class="modal-title">Ciclo Fecha inicio: <strong>'.$ciclo_actual["fecha_inicio"].'</strong> Fecha fin: <strong>'.$ciclo_actual["fecha_fin"].'</strong></h5> </h4>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <p>¿Desea eliminar este ciclo?</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                      <button type="button" class="btn btn-danger" data-dismiss="modal" onClick=remover_ciclo('.$ciclo_actual["ID_Ciclo"].')>Eliminar</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            ';
                                          }
                                          //----CICLOS FUTUROS
                                          $ciclos_futuros = mysqli_query($link, "SELECT `ciclo`.ID_Ciclo, ciclo.fecha_inicio , ciclo.fecha_fin FROM `generaciones-ciclos`,`ciclo` WHERE `generaciones-ciclos`.`id_generacion` = $id_generacion and `ciclo`.`ID_Ciclo`= `generaciones-ciclos`.`ID_Ciclo` and `ciclo`.`estatus`= 'futuro'");
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
                                                  <button type="button" class="btn btn-block btn-outline-danger btn-xs" data-toggle="modal" data-target="#modal-default'.$row_ciclos_futuros["ID_Ciclo"].'">Remover ciclo</button>
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
                                                      <button type="button" class="btn btn-danger" data-dismiss="modal" onClick=remover_ciclo('.$row_ciclos_futuros["ID_Ciclo"].')>Eliminar</button>
                                                    </div>
                                                  </div>
                                                  <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                              </div>

                                            ';
                                          }
                                      echo'
                                      </tbody>
                                    </table>     
                          </div>  
                        
                    </div>
                  ';
                };
              ?>

