
var ListaLicenciaturas = document.querySelector('tbody#submenu1');
var CampoLicenciaturas = document.querySelector('#contenedor_licenciaturas');

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

  function AgregarMateria(id_recibido){
   //  var Nueva_tarea = document.querySelector('#Nombre_Materia'+id_recibido).value;
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
                              }         
     }   
     xhr.send(datos);
      }