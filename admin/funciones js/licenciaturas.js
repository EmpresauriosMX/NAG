
var ListaLicenciaturas = document.querySelector('tbody#submenu1');
var ListaLicenciaturasActivas = document.querySelector('tbody#tabla_lic_activa');
var texto_check="";
var texto_check1="";
var texto_nombre="";
eventListeners();

function eventListeners(){
  document.querySelector('#formulario').addEventListener('click',AgregarLicenciatura);
  document.querySelector('#formulario1').addEventListener('click',AgregarLicenciaturaActiva);
  }


function AgregarLicenciatura(e){ // si entra 
    e.preventDefault();
    var lic = document.querySelector('#NombreLic').value,
      periodo = document.querySelector('#periodo').value
        operacion = 'AgregarLicenciatura';
    console.log(periodo);
      var datos = new FormData();
      datos.append('NombreLicenciatura',lic);
      datos.append('periodo',periodo);
      datos.append('operacion',operacion);

      var xhr = new XMLHttpRequest();
      xhr.open('POST','../inc/funciones/admin-licenciaturas-tareas.php', true);

      xhr.onload = function(){
        if(this.status === 200) {
           // console.log("si entro");
            var respuesta = JSON.parse(xhr.responseText);
            var id = respuesta.id_licenciatura;
            var nombre = respuesta.Nombre_lic;
            console.log(respuesta);
            //************************navegacion del submenu de licenciaturas***********************//
            //agregar elementos a este submenu//
            var NuevaLicenciatura = document.createElement('tr'); //se crea la lista dentro del html
            NuevaLicenciatura.setAttribute("id","campo_Licenciaturas"+id);
            NuevaLicenciatura.setAttribute("name","campo_Licenciaturas"+id);
            NuevaLicenciatura.innerHTML = ` 
             <tr>
             <td>${id}</td>
             <td>${nombre}</td>
             <td>${periodo}</td>
             <input type="hidden" id="obtener_nombre_lic${id}" value="${nombre}">
             <td>
             <div class="btn-group">
             <button type="button" class="btn btn-outline-primary btn-sm"onclick =Editar_licenciaturas(${id})>Editar</button>
             <button type="button" class="btn btn-outline-danger btn-sm" onclick =Eliminar_licenciatura(${id})>Eliminar</button>
             </div>
             </td>
             </tr>
                    `;// url donde se envia//
                ListaLicenciaturas.appendChild(NuevaLicenciatura); //agregar al innerHTML
                //*************************fin de agregar al submenu*****************************//
  }         
      }   
      xhr.send(datos);
  }

  function LicenciaturaActiva(id_recibido){
   //  var Nueva_tarea = document.querySelector('#Nombre_Materia'+id_recibido).value;
   console.log('si entro a_agregar licenciatura activa');
   Editar_licenciaturas(id_recibido);
    var operacion = 'agregar_materia';
    var ciclo = 1;
     var datos = new FormData();
     datos.append('id_licenciatura',id_recibido),
     datos.append('operacion',operacion),
     datos.append('ciclo',ciclo);

     var xhr = new XMLHttpRequest();
     xhr.open('POST','../inc/funciones/admin-licenciaturas-tareas.php', true);

     xhr.onload = function(){
       if(this.status === 200) {
           var respuesta = JSON.parse(xhr.responseText);
           console.log(respuesta);
               //agregar elementos a este submenu//
               var NuevaLicenciatura_Activa = document.createElement('tr'); //se crea la lista dentro del html
               NuevaLicenciatura.innerHTML = ` 
                <td>${respuesta.id_licenciatura}</td>
                <td>${nombre}</td>
                <td>
                <div class="btn-group">
                  <button type="button" class="btn btn-outline-primary btn-sm">Editar</button>
                  <button type="button" class="btn btn-outline-danger btn-sm">Eliminar</button>
                </div>
                </td>
                       `;// url donde se envia//
                       ListaLicenciaturasActivas.appendChild(NuevaLicenciatura_Activa); //agregar al innerHTML
                   //*************************fin de agregar al submenu*****************************//
                              }         
     }   
     xhr.send(datos);
      }
      /*Agregar materia */
      function AgregarNuevaMateria(id_Lic_Recibida){
        var Nueva_tarea = document.querySelector('#Nombre_Materia'+id_Lic_Recibida).value;
        operacion = 'agregar_nueva_materia';
        console.log(Nueva_tarea);
         console.log(id_Lic_Recibida); 

         var datos = new FormData();
         datos.append('id_Lic_Recibida',id_Lic_Recibida),
         datos.append('Nueva_tarea',Nueva_tarea),
         datos.append('operacion',operacion);
    
         var xhr = new XMLHttpRequest();
         xhr.open('POST','../inc/funciones/admin-licenciaturas-tareas.php', true);
    
         xhr.onload = function(){
           if(this.status === 200) {
               var respuesta = JSON.parse(xhr.responseText);
               console.log(respuesta);
               id_tarea=respuesta.id_asignatura;
               var CampoMateria = document.querySelector('#tab_'+id_Lic_Recibida);

               var NuevoCampo_materia = document.createElement('div');
               NuevoCampo_materia.className = "tab-pane";
               NuevoCampo_materia.setAttribute("id","tab_"+id_Lic_Recibida);
               NuevoCampo_materia.innerHTML = `
                 <div id="campo-de-materia${id_tarea}" name="campo-de-materia${id_tarea}">
                    ${Nueva_tarea}
                              <div class="btn-group col-5">
                              <input type="hidden" id="valor_de_licenciatura${id_tarea}" value="${id_Lic_Recibida}">
                              <button type="button" class="btn btn-outline-primary btn-sm" onclick =editar_materias(${id_tarea})>Editar</button>
                              <button type="button" class="btn btn-outline-danger btn-sm" onclick =Eliminar_materias(${id_tarea})>Eliminar</button>
                              </div> <br>
                          </div>
                      `;// url donde se envia//
                      CampoMateria.appendChild(NuevoCampo_materia)
                console.log("correcto ingreso de datos");
                                  }         
         }   
         xhr.send(datos);
      }
  //************************* seccion de botones *********************************************************
        //editar licenciatura
      function Editar_licenciaturas(variable_recibida_editar){
        console.log(variable_recibida_editar); //pruebas de recepcion de datos
        nombre=document.querySelector('#obtener_nombre_lic'+variable_recibida_editar).value;
          console.log(nombre);
          //mensaje emergente
        swal({
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          cancelButtonText: 'Cancelar',
          confirmButtonText: 'Actualizar!',
          title: 'Editar datos de:',
          html:
            '<h2>Nombre</h2><input id="swal-input1" class="swal2-input">' +
            '<h2>Periodos</h2><input id="swal-input2" class="swal2-input">',
          preConfirm: function () {
            return new Promise(function (resolve) {
              resolve([
                $('#swal-input1').val(),
                $('#swal-input2').val()
              ])
            })
          },
        })
        .then(function (result) {
              //en caso de dar okey
          if(result.value){
            let Nuevo_nombre=$('#swal-input1').val();
            let nuevo_periodo=$('#swal-input2').val();
            console.log(Nuevo_nombre);
            console.log(nuevo_periodo);
            operacion = 'editar_licenciatura';
            //envio de ajax
            var datos = new FormData();
            datos.append('id_licenciatura',variable_recibida_editar);
            datos.append('nombre',Nuevo_nombre);
            datos.append('periodos',nuevo_periodo);
            datos.append('operacion',operacion);
              console.log(operacion);
            var xhr = new XMLHttpRequest();
            xhr.open('POST','../inc/funciones/admin-licenciaturas-tareas.php', true);
    
            xhr.onload = function(){
              if(this.status === 200) {
                  var respuesta = JSON.parse(xhr.responseText);
                  console.log(respuesta);
                              
                  // creacion de la seccion acualizada en la tabla
                var NuevaLicenciatura = document.createElement('tr'); //se crea la lista dentro del html
                NuevaLicenciatura.setAttribute("id","campo_Licenciaturas"+variable_recibida_editar);
                NuevaLicenciatura.setAttribute("name","campo_Licenciaturas"+variable_recibida_editar);
                NuevaLicenciatura.innerHTML = ` 
                 <tr>
                 <td>${variable_recibida_editar}</td>
                 <td>${Nuevo_nombre}</td>
                 <td>${nuevo_periodo}</td>
                 <input type="hidden" id="obtener_nombre_lic${variable_recibida_editar}" value="${Nuevo_nombre}">
                 <td>
                 <div class="btn-group">
                 <button type="button" class="btn btn-outline-primary btn-sm"onclick =Editar_licenciaturas(${variable_recibida_editar})>Editar</button>
                 <button type="button" class="btn btn-outline-danger btn-sm" onclick =Eliminar_licenciatura(${variable_recibida_editar})>Eliminar</button>
               </div>
                 </td>
                 </tr>
                        `;// url donde se envia//
                    campo = document.querySelector('#campo_Licenciaturas'+variable_recibida_editar);
                    ListaLicenciaturas.replaceChild(NuevaLicenciatura,campo);
                                      //a donde se aplica, el nuevo contenido, el viejo contenido
          }         
            }   
            xhr.send(datos);

          }
        })
    }
      //eliminar licenciatura
      function Eliminar_licenciatura(variable_recibida_eliminar){
        campo = document.querySelector('#campo_Licenciaturas'+variable_recibida_eliminar);
        console.log(variable_recibida_eliminar);
        console.log("si entro a eliminar las licenciaturas");
        Swal.fire({
          title: 'Estas seguro?',
          text: "Una vez enviado no se pueden cambiar",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          cancelButtonText: 'Cancelar',
          confirmButtonText: 'Si, Eliminar!'
        }).then((result) => {
          if (result.value) {
            Swal.fire(
              'Eliminado!',
              'ha sido eliminado la licenciatura',
              'success'
            )
            operacion = 'Eliminar_licenciatura';
            var datos = new FormData();
            datos.append('id_licenciatura',variable_recibida_eliminar);
            datos.append('operacion',operacion);
              console.log(operacion);
            var xhr = new XMLHttpRequest();
            xhr.open('POST','../inc/funciones/admin-licenciaturas-tareas.php', true);
      
            xhr.onload = function(){
              if(this.status === 200) {
                  var respuesta = JSON.parse(xhr.responseText);
                  console.log(respuesta);
                                       }         
                                  }   
            xhr.send(datos);
            campo.remove();
          }
        })
      }
      //editar licenciatura_activa
function editar_licenciatura_activa(variable_recibida_editar){
  console.log(variable_recibida_editar); //pruebas de recepcion de datos
    //mensaje emergente
  swal({
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Actualizar!',
    title: 'Editar datos de:',
    html:
      '<h2>Nombre</h2><input id="swal-input1" class="swal2-input">' +
      '<h2>Periodo</h2><input id="swal-input2" class="swal2-input">',
    preConfirm: function () {
      return new Promise(function (resolve) {
        resolve([
          $('#swal-input1').val(),
          $('#swal-input2').val()
        ])
      })
    },
  })
  .then(function (result) {
        //en caso de dar okey
    if(result.value){
      let Nuevo_nombre=$('#swal-input1').val();
      let nuevo_periodo=$('#swal-input2').val();
      console.log(Nuevo_nombre);
      console.log(nuevo_periodo);
      operacion = 'editar_licenciatura_activa';
      //envio de ajax
      var datos = new FormData();
      datos.append('id_licenciatura',variable_recibida_editar);
      datos.append('nombre',Nuevo_nombre);
      datos.append('periodos',nuevo_periodo);
      datos.append('operacion',operacion);
        console.log(operacion);
      var xhr = new XMLHttpRequest();
      xhr.open('POST','../inc/funciones/admin-licenciaturas-tareas.php', true);

      xhr.onload = function(){
        if(this.status === 200) {
            var respuesta = JSON.parse(xhr.responseText);
            console.log(respuesta);
                        
            // creacion de la seccion acualizada en la tabla
          var NuevaLicenciatura = document.createElement('tr'); //se crea la lista dentro del html
          NuevaLicenciatura.setAttribute("id","campo_Licenciaturas_activas"+variable_recibida_editar);
          NuevaLicenciatura.setAttribute("name","campo_Licenciaturas_activas"+variable_recibida_editar);
          NuevaLicenciatura.innerHTML = ` 
           <td>${variable_recibida_editar}</td>
           <td>${Nuevo_nombre}</td>
           <td>${nuevo_periodo}</td>
           <td>
           <div class="btn-group">
           <button type="button" class="btn btn-outline-primary btn-sm"onclick =editar_licenciatura_activa(${variable_recibida_editar})>Editar</button>
           <button type="button" class="btn btn-outline-danger btn-sm" onclick =EliminarLic_activa(${variable_recibida_editar})>Eliminar</button>
         </div>
           </td>
                  `;// url donde se envia//
              campo = document.querySelector('#campo_Licenciaturas_activas'+variable_recibida_editar);
              ListaLicenciaturasActivas.replaceChild(NuevaLicenciatura,campo);
                                //a donde se aplica, el nuevo contenido, el viejo contenido
    }         
      }   
      xhr.send(datos);

    }
  })
}
      //eliminar licenciatura activa
        function EliminarLic_activa(variable_recibida_eliminar){
          campo = document.querySelector('#campo_Licenciaturas_activas'+variable_recibida_eliminar);
          console.log(variable_recibida_eliminar);
          console.log("si entro a eliminar las licenciaturas activas");
          Swal.fire({
            title: 'Estas seguro?',
            text: "Una vez enviado no se pueden cambiar",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Si, Eliminar!'
          }).then((result) => {
            if (result.value) {
              Swal.fire(
                'Eliminado!',
                'ha sido eliminado la licenciatura activa',
                'success'
              )
              operacion = 'Eliminar_licenciatura_activa';
              var datos = new FormData();
              datos.append('id_licenciatura_activa',variable_recibida_eliminar);
              datos.append('operacion',operacion);
                console.log(operacion);
              var xhr = new XMLHttpRequest();
              xhr.open('POST','../inc/funciones/admin-licenciaturas-tareas.php', true);
        
              xhr.onload = function(){
                if(this.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    console.log(respuesta);
                                         }         
                                    }   
              xhr.send(datos);
              campo.remove();
            }
          })
        }
    //Agregar_licenciatura activa oficial ****
    function AgregarLicenciaturaActiva(){
      console.log(texto_nombre);
   console.log('si entro a_agregar licenciatura activa');
    var operacion = 'agregar_materia';
    var ciclo = 1;
     var datos = new FormData();
     datos.append('id_licenciatura',texto_check),
     datos.append('periodo',texto_check1),
     datos.append('operacion',operacion),
     datos.append('ciclo',ciclo);

     var xhr = new XMLHttpRequest();
     xhr.open('POST','../inc/funciones/admin-licenciaturas-tareas.php', true);

     xhr.onload = function(){
       if(this.status === 200) {
           var respuesta = JSON.parse(xhr.responseText);
           console.log(respuesta);
               //agregar elementos a este submenu//
               var NuevaLicenciatura_Activa = document.createElement('tr'); //se crea la lista dentro del html
               NuevaLicenciatura_Activa.setAttribute("id","campo_Licenciaturas_activas"+respuesta.id_licenciatura);
               NuevaLicenciatura_Activa.setAttribute("name","campo_Licenciaturas_activas"+respuesta.id_licenciatura);
               NuevaLicenciatura_Activa.innerHTML = ` 
           <td>${respuesta.id_licenciatura}</td>
           <td>${texto_nombre}</td>
           <td>${texto_check1}</td>
           <td>
           <div class="btn-group">
           <button type="button" class="btn btn-outline-primary btn-sm"onclick =editar_licenciatura_activa(${respuesta.id_licenciatura})>Editar</button>
           <button type="button" class="btn btn-outline-danger btn-sm" onclick =EliminarLic_activa(${respuesta.id_licenciatura})>Eliminar</button>
         </div>
           </td>
                       `;// url donde se envia//
                       ListaLicenciaturasActivas.appendChild(NuevaLicenciatura_Activa); //agregar al innerHTML
                   //*************************fin de agregar al submenu*****************************//
                              }         
     }   
     xhr.send(datos);
      }


    function ShowSelected() //primer select
    {
    /* Para obtener el valor */
    var cod = document.getElementById("producto").value; 
    /* Para obtener el texto */
    var combo = document.getElementById("producto");
    var selected = combo.options[combo.selectedIndex].text;
    alert(selected);
    texto_check =cod;
    texto_nombre=selected;
    }
    function ShowSelected1() //segundo select
    {
    /* Para obtener el valor */
    var cod = document.getElementById("producto1").value; 
    /* Para obtener el texto */
    var combo = document.getElementById("producto1");
    var selected = combo.options[combo.selectedIndex].text;
    alert(selected);
    texto_check1 =cod;
    }
    // ------------------------------------------------------editar nombre de asignaturas
    function editar_materias(id_recibido){
      campo = document.querySelector('#campo-de-materia'+id_recibido);
      licenciatura = document.querySelector('#valor_de_licenciatura'+id_recibido).value;
      console.log(licenciatura);
        console.log(id_recibido);
        {
          operacion = 'editar_asignatura';
          Swal
          .fire({
              title: "Nombre de la asignatura",
              input: "text",
              showCancelButton: true,
              confirmButtonText: "Cambiar",
              cancelButtonText: "Cancelar",
          })
          .then(resultado => {
              if (resultado.value) {
                  let nombre = resultado.value;
                  console.log("Hola, " + nombre);
                    Swal.fire({
                      icon: 'success',
                      type: 'success',
                      title: 'ha cambiado'+nombre,
                      text: 'Something went wrong!'
                    })
                    var datos = new FormData();
          datos.append('id_asignatura',id_recibido);
          datos.append('nombre',nombre);
          datos.append('operacion',operacion);
            console.log(operacion);
          var xhr = new XMLHttpRequest();
          xhr.open('POST','../inc/funciones/admin-licenciaturas-tareas.php', true);
  
          xhr.onload = function(){
            if(this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta);
                        var CampoMateria = document.querySelector('#tab_'+licenciatura);

               var NuevoCampo_materia = document.createElement('div');
               NuevoCampo_materia.className = "tab-pane";
               NuevoCampo_materia.setAttribute("id","tab_"+licenciatura);
               NuevoCampo_materia.innerHTML = `
                 <div id="campo-de-materia${id_recibido}" name="campo-de-materia${id_recibido}">
                    ${nombre}
                    <div class="btn-group col-5">
                    <input type="hidden" id="valor_de_licenciatura${id_recibido}" value="${licenciatura}">
                    <button type="button" class="btn btn-outline-primary btn-sm" onclick =editar_materias(${id_recibido})>Editar</button>
                    <button type="button" class="btn btn-outline-danger btn-sm" onclick =Eliminar_materias(${id_recibido})>Eliminar</button>
                    </div> <br>
                      `;// url donde se envia//
                      //CampoMateria.appendChild(NuevoCampo_materia);
                      CampoMateria.replaceChild(NuevoCampo_materia,campo);
        }         
          }   
          xhr.send(datos);
              }
          });     
      }
    }
    //eliminar asignatura
    function Eliminar_materias(id_recibido){
      campo = document.querySelector('#campo-de-materia'+id_recibido);
      Swal.fire({
        title: 'Estas seguro?',
        text: "Una vez enviado no se pueden cambiar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, Eliminar!'
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Eliminado!',
            'ha sido eliminado la materia',
            'success'
          )
          operacion = 'eliminar_materia';
          var datos = new FormData();
          datos.append('id_recibido',id_recibido);
          datos.append('operacion',operacion);
            console.log(operacion);
          var xhr = new XMLHttpRequest();
          xhr.open('POST','../inc/funciones/admin-licenciaturas-tareas.php', true);
    
          xhr.onload = function(){
            if(this.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                console.log(respuesta);
                                     }         
                                }   
          xhr.send(datos);
          campo.remove();
        }
      })
    }