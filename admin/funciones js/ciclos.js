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
    
    //------------------------------------CICLOS NUEVO INICIO--------------------------
    function nuevo_ciclo(){
    var fecha_i_ciclo_n = document.form_ciclo_nuevo.fecha_i_ciclo_n.value;
    var fecha_f_ciclo_n = document.form_ciclo_nuevo.fecha_f_ciclo_n.value;
    var estado_ciclo_n  = document.form_ciclo_nuevo.estado_ciclo_n.checked;
    alert("fecha inicio ciclo n " + fecha_i_ciclo_n + " fecha fin " + fecha_f_ciclo_n + " estado ciclo n " + estado_ciclo_n);
    var url = "./operacionesPHP/operaciones_ciclos.php?fecha_i_n=" + fecha_i_ciclo_n +"&"+"fecha_f_n="+fecha_i_ciclo_n+"&"+"estado_n="+estado_ciclo_n;
    miPeticion.open("GET", url, true);
    miPeticion.onreadystatechange=respuestaAjax;
    miPeticion.send(null);
    setTimeout('llamarAjax()', 1000);
    }
    
    function respuestaAjax() {
    if(miPeticion.readyState == 1) {
        document.getElementById("recarga").innerHTML="<center>Loading...</center>";
    }
    else if(miPeticion.readyState == 4) {
    if(miPeticion.status == 200) {
     var mitexto=miPeticion.responseText;
     document.getElementById("recarga").innerHTML=mitexto;
            } else {
            alert("Ha ocurrido un error: " + miPeticion.statusText);
            }
        }
    }
    
    //---------------------MARCAR--------------------------------
    
    function marcar_evento(id){
      var id
      //alert("id " +id);
      var url = "./resumen/marcar_evento.php?id=" + id;
      miPeticion.open("GET", url, true);
      miPeticion.onreadystatechange=respuestaAjax1;
      miPeticion.send(null);
      //setTimeout('llamarAjax()', 1000);
      }
      
      function respuestaAjax1() {
      if(miPeticion.readyState == 1) {
        document.getElementById("recarga").innerHTML="<center>Loading...</center>";
      }
      else if(miPeticion.readyState == 4) {
      if(miPeticion.status == 200) {
       var mitexto=miPeticion.responseText;
       document.getElementById("recarga").innerHTML=mitexto;
              } else {
          alert("Ha ocurrido un error: " + miPeticion.statusText);
              }
          }
      }
    
      //---------------ELIMINAR EVENTO
    
      function eliminar_evento(id){
        var id
        //alert("id " +id);
        var url = "./resumen/eliminar_evento.php?id=" + id;
        miPeticion.open("GET", url, true);
        miPeticion.onreadystatechange=respuestaAjax2;
        miPeticion.send(null);
        //setTimeout('llamarAjax()', 1000);
        }
        
        function respuestaAjax2() {
        if(miPeticion.readyState == 1) {
          document.getElementById("recarga").innerHTML="<center>Loading...</center>";
        }
        else if(miPeticion.readyState == 4) {
        if(miPeticion.status == 200) {
         var mitexto=miPeticion.responseText;
         document.getElementById("recarga").innerHTML=mitexto;
                } else {
            alert("Ha ocurrido un error: " + miPeticion.statusText);
                }
            }
        }
    
    //-------------------------------EVENTOS FINAL----------------------------------
    
    