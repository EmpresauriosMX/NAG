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
    var generacion_f = getXMLHTTPRequest();
    var generacion_a = getXMLHTTPRequest();
    
    //------------------------------------CICLOS NUEVO-------------------------
    function nueva_generacion(){
      var fecha_i_n = document.getElementById("fecha_i_generacion_n").value;
      var fecha_f_n = document.getElementById("fecha_f_generacion_n").value;
      alert("fecha_i_n=" + fecha_i_n +"&"+"fecha_f_n="+fecha_f_n+"&operacion=nuevo");
      var url = "./operacionePHP/operaciones_generaciones.php?fecha_i_n=" + fecha_i_n +"&"+"fecha_f_n="+fecha_f_n+"&operacion=nuevo";
      generacion_n.open("GET", url, true);
      generacion_n.onreadystatechange=respuesta_generacion_f;
      generacion_n.send(null);
      setTimeout('respuesta_generacion_f()', 1000);
    }
        function respuesta_generacion_f() {
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

    //----------------ACTUALIZA LA GENERACION ACTUAL----------------------------
    function actualizar_generacion_a(id){
        var id;
        var fecha_i_a = document.getElementById("fecha_i_generacion_a" +id).value;
        var fecha_f_a = document.getElementById("fecha_f_generacion_a" +id).value;
        var estatus_1 =document.getElementById("estado_generacion_a" + id).checked;
        var estatus = 2;
        if (estatus_1){
            estatus = 1;
        }
        //alert("fecha_i_f= " + fecha_i_f +"&"+"fecha_f_f= "+fecha_f_f+"id "+id +" estatus= "+estatus);
        var url = "./operacionePHP/actualizar_generacion.php?id="+id+"&fecha_i_f=" + fecha_i_f+"&"+"fecha_f_f="+fecha_f_f+"&estatus="+estatus;
        generacion_f.open("GET", url, true);
        generacion_f.onreadystatechange=respuesta_actualizar_generacion_f;
        generacion_f.send(null);
        setTimeout('respuesta_actualizar_generacion_f()', 1000);
        var url2 = "./operacionePHP/generaciones_actuales.php";
        generacion_a.open("GET", url2, true);
        generacion_a.onreadystatechange=respuesta_actualizar_generacion_a;
        generacion_a.send(null);
        setTimeout('respuesta_actualizar_generacion_a()', 1000);
    }
    function actualizar_generacion_f(id){
        var id;
        var fecha_i_f = document.getElementById("fecha_i_generacion_f" +id).value;
        var fecha_f_f = document.getElementById("fecha_f_generacion_f" +id).value;
        var estatus_1 =document.getElementById("estado_generacion_f" + id).checked;
        var estatus = 2;
        if (estatus_1){
            estatus = 1;
        }
        //alert("fecha_i_f= " + fecha_i_f +"&"+"fecha_f_f= "+fecha_f_f+"id "+id +" estatus= "+estatus);
        var url = "./operacionePHP/actualizar_generacion.php?id="+id+"&fecha_i_f=" + fecha_i_f+"&"+"fecha_f_f="+fecha_f_f+"&estatus="+estatus;
        generacion_f.open("GET", url, true);
        generacion_f.onreadystatechange=respuesta_actualizar_generacion_f;
        generacion_f.send(null);
        setTimeout('respuesta_actualizar_generacion_f()', 1000);
        var url2 = "./operacionePHP/generaciones_actuales.php";
        generacion_a.open("GET", url2, true);
        generacion_a.onreadystatechange=respuesta_actualizar_generacion_a;
        generacion_a.send(null);
        setTimeout('respuesta_actualizar_generacion_a()', 1000);
    }

    function respuesta_actualizar_generacion_f() {
        if(generacion_f.readyState == 1) {
            document.getElementById("recarga_generaciones_f").innerHTML="<center>Loading...</center>";
        }
        else if(generacion_f.readyState == 4) {
        if(generacion_f.status == 200) {
         var mitexto=generacion_f.responseText;
         document.getElementById("recarga_generaciones_f").innerHTML=mitexto;
                } else {
                alert("Ha ocurrido un error: " + generacion_f.statusText);
                }
            }
        }

    function respuesta_actualizar_generacion_a() {
        if(generacion_a.readyState == 1) {
            document.getElementById("recarga_generaciones_a").innerHTML="<center>Loading...</center>";
        }
        else if(generacion_a.readyState == 4) {
        if(generacion_a.status == 200) {
         var mitexto=generacion_a.responseText;
         document.getElementById("recarga_generaciones_a").innerHTML=mitexto;
                } else {
                alert("Ha ocurrido un error: " + generacion_a.statusText);
                }
            }
        }