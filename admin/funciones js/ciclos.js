//FUNCIONES CORRESPONDIENTES A LA RECOLECCION DE DATOS DE LOS FORMULARIOS
// Y ENVIO DE DATOS POR METODO GET

function getXMLHTTPRequest(){
    var req = false;
    try{
        req = new XMLHttpRequest(); /* p.e. Firefox */
      }
    catch(err1){
      try{
         req = new ActiveXObject("Msxml2.XMLHTTP");
      /* algunas versiones IE */
        }
      catch(err2){
        try{
           req = new ActiveXObject("Microsoft.XMLHTTP");
      /* algunas versiones IE */
          }
          catch(err3){
             req = false;
            }
        }
      }
    return req;
    }
    
    var miPeticion = getXMLHTTPRequest();
    
    //------------------------------------CICLOS NUEVO-------------------------
    function nuevo_ciclo(operacion){
      var operacion;
      var fecha_i_ciclo_n = document.getElementById("fecha_i_ciclo_n").value;
      var fecha_f_ciclo_n = document.getElementById("fecha_f_ciclo_n").value;
      var ciclo_activo = document.getElementById("ciclo_activo").value;
      var estado_ciclo_n  = document.getElementById("estado_ciclo_n").checked;
      if(ciclo_activo > 0 ){
        ciclo_activo = true;
      }
      //alert("fecha inicio ciclo n " + fecha_i_ciclo_n + " fecha fin " + fecha_f_ciclo_n + " estado ciclo n " + estado_ciclo_n + " operacion= "+operacion + " ciclo a= "+ciclo_activo);
      var url = "./operacionePHP/operaciones_ciclos.php?fecha_i_n=" + fecha_i_ciclo_n +"&"+"fecha_f_n="+fecha_f_ciclo_n+"&"+"estado_n="+estado_ciclo_n+"&"+"operacion="+operacion+"&"+"ciclo_activo="+ciclo_activo;
      miPeticion.open("GET", url, true);
      miPeticion.onreadystatechange=respuestaAjax;
      miPeticion.send(null);
      setTimeout('llamarAjax()', 1000);
    }
    //---------------------------------ACTUALIZAR CICLO---------------------
    function actualizar_ciclo(id){
      var id;
      var estado_c = "";
      var fecha_i_ciclo_a = document.getElementById("fecha_i_ciclo_a").value;
      var fecha_f_ciclo_a = document.getElementById("fecha_f_ciclo_a").value;
      var estado_ciclo_a  = document.getElementById("estado_ciclo_a").checked;
      if(estado_ciclo_a){
        estado_c = "activo";
      }
      else{
        estado_c = "futuro";
      }
      
      //alert("fecha inicio ciclo A= " + fecha_i_ciclo_a + " fecha fin= " + fecha_f_ciclo_a + " estado ciclo a= " + estado_c + " operacion= actualizar " +"id "+id );
      var url = "./operacionePHP/operaciones_ciclos.php?fecha_i_a=" + fecha_i_ciclo_a +"&"+"fecha_f_a="+fecha_f_ciclo_a+"&"+"estado_a="+estado_c+"&"+"operacion=actual"+"&"+"id="+id;
      miPeticion.open("GET", url, true);
      miPeticion.onreadystatechange=respuestaAjax;
      miPeticion.send(null);
      setTimeout('llamarAjax()', 1000);
    }
    //------------------------------ACTUALIZAR LOS CICLOS CON EL MODAL----------------------
    function actualizar_ciclo_inactivo(id){
      var id;
      var estado_c = "";
      var fecha_i_ciclo_a = document.getElementById("fecha_i_ciclo_a"+id).value;
      var fecha_f_ciclo_a = document.getElementById("fecha_f_ciclo_a"+id).value;
      var estado_ciclo_a  = document.getElementById("estado_ciclo_a"+id).checked;
      if(estado_ciclo_a){
        estado_c = "activo";
      }
      else{
        estado_c = "futuro";
      }
      //alert("fecha inicio ciclo A= " + fecha_i_ciclo_a + " fecha fin= " + fecha_f_ciclo_a + " estado ciclo a= " + estado_c + " operacion= actualizar " +"id "+id );
      var url = "./operacionePHP/operaciones_ciclos.php?fecha_i_a=" + fecha_i_ciclo_a +"&"+"fecha_f_a="+fecha_i_ciclo_a+"&"+"estado_a="+estado_c+"&"+"operacion=actual"+"&"+"id="+id;
      miPeticion.open("GET", url, true);
      miPeticion.onreadystatechange=respuestaAjax;
      miPeticion.send(null);
      setTimeout('llamarAjax()', 1000);
    }

    function eliminar_ciclo_futuro(id){
      var id;
      //alert("id "+id);
      var url = "./operacionePHP/operaciones_ciclos.php?id="+id+"&"+"operacion=eliminar";
      miPeticion.open("GET", url, true);
      miPeticion.onreadystatechange=respuestaAjax;
      miPeticion.send(null);
      setTimeout('llamarAjax()', 1000);
    }
    
    //---------------------------RESPUESTA DEL AJAX--------------------------
    function respuestaAjax() {
    if(miPeticion.readyState == 1) {
        document.getElementById("recarga_ciclos").innerHTML="<center>Loading...</center>";
    }
    else if(miPeticion.readyState == 4) {
    if(miPeticion.status == 200) {
     var mitexto=miPeticion.responseText;
     document.getElementById("recarga_ciclos").innerHTML=mitexto;
            } else {
            alert("Ha ocurrido un error: " + miPeticion.statusText);
            }
        }
    }
    