function getXMLHTTPRequest(){
    var req = false;
    try{
        req = new XMLHttpRequest(); 
      }
    catch(err1){
      try{
         req = new ActiveXObject("Msxml2.XMLHTTP");
        }
      catch(err2){
        try{
           req = new ActiveXObject("Microsoft.XMLHTTP");
          }
          catch(err3){
             req = false;
            }
        }
      }
    return req;
    }
    
    var generacion_n = getXMLHTTPRequest();
    
    //------------------------------------CICLOS NUEVO-------------------------
    function nueva_generacion(){
      var fecha_i_n = document.getElementById("fecha_i_generacion_n").value;
      var fecha_f_n = document.getElementById("fecha_f_generacion_n").value;
      alert("fecha_i_n=" + fecha_i_n +"&"+"fecha_f_n="+fecha_f_n+"&operacion=nuevo");
      var url = "./operacionePHP/operaciones_generaciones.php?fecha_i_n=" + fecha_i_n +"&"+"fecha_f_n="+fecha_f_n+"&operacion=nuevo";
      generacion_n.open("GET", url, true);
      generacion_n.onreadystatechange=respuesta_nueva_generacion;
      generacion_n.send(null);
      setTimeout('respuesta_nueva_generacion()', 1000);
    }



        function respuesta_nueva_generacion() {
        if(generacion_n.readyState == 1) {
            document.getElementById("recarga_generaciones_futuras").innerHTML="<center>Loading...</center>";
        }
        else if(generacion_n.readyState == 4) {
        if(generacion_n.status == 200) {
         var mitexto=generacion_n.responseText;
         document.getElementById("recarga_generaciones_futuras").innerHTML=mitexto;
                } else {
                alert("Ha ocurrido un error: " + generacion_n.statusText);
                }
            }
        }