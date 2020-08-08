
var ListaLicenciaturas = document.querySelector('ul#submenu');
var CampoLicenciaturas = document.querySelector('#contenedor_licenciaturas');

eventListeners();

function eventListeners(){
  document.querySelector('#formulario').addEventListener('click',AgregarLicenciatura);
 // document.querySelector('#materias').addEventListener('click',AgregarMateria);
  }


function AgregarLicenciatura(e){ // si entra 
    e.preventDefault();
    var lic = document.querySelector('#NombreLic').value;
      var datos = new FormData();
      datos.append('NombreLicenciatura',lic);

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
            var NuevaLicenciatura = document.createElement('li'); //se crea la lista dentro del html
            NuevaLicenciatura.className = "nav-item"; //se agrega la clase a la cual pertenece
            NuevaLicenciatura.innerHTML = ` 
             <a class="nav-link" href="#tab_${id}" data-toggle="tab">${nombre} </a> 
                    `;// url donde se envia//
                ListaLicenciaturas.appendChild(NuevaLicenciatura); //agregar al innerHTML
                //*************************fin de agregar al submenu*****************************//
               
                //cuadro de agregar materias//
              var NuevoCampo_licenciaturas = document.createElement('div');
              NuevoCampo_licenciaturas.className = "tab-pane";
              NuevoCampo_licenciaturas.setAttribute("id","tab_"+id);
              NuevoCampo_licenciaturas.innerHTML = `
              <div class="col-3">   <input name="Nombre_materia" id="Nombre_Materia"> </div> 
              <input type="hidden"value="${id}" name="id_lic" id="id_lic">
              <div id="materias">
              <button type="button" class="btn btn-block btn-info"  onclick =AgregarMateria("${id}") >Agregar Materias</button>
              </div>
                     `;// url donde se envia//
                     CampoLicenciaturas.appendChild(NuevoCampo_licenciaturas)
                //fin ddel cuadro para agregar materias//
  }         
      }   
      xhr.send(datos);
  }

  function AgregarMateria(id_recibido){
     var Nueva_tarea = document.querySelector('#Nombre_Materia'+id_recibido).value;

     var datos = new FormData();
     datos.append('id_licenciatura',id_recibido),
     datos.append('Nombre_tarea', Nueva_tarea);

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