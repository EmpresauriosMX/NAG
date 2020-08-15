
var ListaLicenciaturas = document.querySelector('tbody#submenu1');
var ListaLicenciaturasActivas = document.querySelector('tbody#tabla_lic_activa');
eventListeners();

function eventListeners(){
  document.querySelector('#formulario').addEventListener('click',AgregarLicenciatura);
 // document.querySelector('#materias').addEventListener('click',AgregarMateria);
  }


function AgregarLicenciatura(e){ // si entra 
    e.preventDefault();
    var lic = document.querySelector('#NombreLic').value,
        operacion = 'AgregarLicenciatura';

      var datos = new FormData();
      datos.append('NombreLicenciatura',lic);
      datos.append('operacion',operacion);

      var xhr = new XMLHttpRequest();
      xhr.open('POST','../inc/funciones/admin-licenciaturas.php', true);

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
             <td>
             <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary btn-sm" onclick =Editar_licenciaturas(${id})>Editar</button>
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
               var CampoMateria = document.querySelector('#tab_'+id_Lic_Recibida);

               var NuevoCampo_materia = document.createElement('div');
               NuevoCampo_materia.className = "tab-pane";
               NuevoCampo_materia.setAttribute("id","tab_"+id_Lic_Recibida);
               NuevoCampo_materia.innerHTML = `
                 ${Nueva_tarea}
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
        
        operacion = 'editar_licenciatura';
        Swal
        .fire({
            title: "Tu nombre",
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
        datos.append('id_licenciatura',variable_recibida_editar);
        datos.append('nombre',nombre);
        datos.append('operacion',operacion);
          console.log(operacion);
        var xhr = new XMLHttpRequest();
        xhr.open('POST','../inc/funciones/admin-licenciaturas-tareas.php', true);
  
        xhr.onload = function(){
          if(this.status === 200) {
              var respuesta = JSON.parse(xhr.responseText);
              console.log(respuesta);
                          //************************navegacion del submenu de licenciaturas***********************//
            //agregar elementos a este submenu//
            var NuevaLicenciatura = document.createElement('tr'); //se crea la lista dentro del html
            NuevaLicenciatura.innerHTML = ` 
             <tr>
             <td>${variable_recibida_editar}</td>
             <td>${nombre}</td>
             <td>
             <div class="btn-group">
             <button type="button" class="btn btn-outline-primary btn-sm"onclick =Editar_licenciaturas(${variable_recibida_editar})>Editar</button>
             <button type="button" class="btn btn-outline-danger btn-sm" onclick =Eliminar_licenciatura(${variable_recibida_editar})>Eliminar</button>
           </div>
             </td>
             </tr>
                    `;// url donde se envia//
                campo = document.querySelector('#campo_Licenciaturas'+variable_recibida_editar);
               // ListaLicenciaturas.removeChild(campo); //agregar al innerHTML
                ListaLicenciaturas.replaceChild(NuevaLicenciatura,campo);
                                  //a donde se aplica, el nuevo contenido, el viejo contenido
      }         
        }   
        xhr.send(datos);
            }
        });     
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