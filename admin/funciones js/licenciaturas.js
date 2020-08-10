
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
            NuevaLicenciatura.innerHTML = ` 
             <tr>
             <td>${id}</td>
             <td>${nombre}</td>
             <td>
             <div class="btn-group">
               <button type="button" class="btn btn-outline-primary btn-sm">Editar</button>
               <button type="button" class="btn btn-outline-danger btn-sm">Eliminar</button>
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