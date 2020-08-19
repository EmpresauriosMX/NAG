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
    //--------------------------------------------ENVIOS-----------------------------------------------
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
    //-------------------ACTUALIZA GENERACION FUTURA--------------------
        function respuesta_generacion_f() {
        if(generacion_n.readyState == 1) {
            document.getElementById("recarga_generaciones_f").innerHTML="<center>Loading...</center>";
        }
        else if(generacion_n.readyState == 4) {
        if(generacion_n.status == 200) {
         var mitexto=generacion_n.responseText;
         document.getElementById("recarga_generaciones_f").innerHTML=mitexto;
                } else {
                alert("Ha ocurrido un error: " + generacion_n.statusText);
                }
            }
        }
    //----------------ACTUALIZA LA GENERACION ACTUAL----------------------------
    function actualizar_generacion_a(id){
        var id;
        alert (id);
        var fecha_i_a = document.getElementById("Ifechageneracion_a" +id).value;
        var fecha_f_a = document.getElementById("Ffechageneracion_a" +id).value;
        var estatus_1 = document.getElementById("estado_generacion_a" + id).checked;
        var estatus = 2;
        if (estatus_1){
            estatus = 1;
        }
       //alert("fecha_i_f= " + fecha_i_f +"&"+"fecha_f_f= "+fecha_f_f+"id "+id +" estatus= "+estatus);
        var url = "./operacionePHP/actualizar_generacion.php?id="+id+"&fecha_i_f=" + fecha_i_a+"&"+"fecha_f_f="+fecha_f_a+"&estatus="+estatus;
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
    function agregar_ciclo_a_generacion(id){
        //ID DEL CICLO
        var id; 
        //ID DE LA GENERACION DEL SELECT CON EL ID SELECT Y EL ID DEL CICLO QUE SE ELIGE
        var id_generacion = document.getElementById("select" + id).value;
        //Envio a generaciones futuras
        var url = "./operacionePHP/ciclo_a_generacion.php?id_ciclo="+id+"&id_generacion=" + id_generacion;
        generacion_f.open("GET", url, true);
        //Recarga actualizaciones futuras
        generacion_f.onreadystatechange=respuesta_actualizar_generacion_f;
        generacion_f.send(null);
        setTimeout('respuesta_actualizar_generacion_f()', 1000);
        //Envio a generaciones actuales
        var url2 = "./operacionePHP/generaciones_actuales.php";
        generacion_a.open("GET", url2, true);
        //Reecarga generaciones actuales
        generacion_a.onreadystatechange=respuesta_actualizar_generacion_a;
        generacion_a.send(null);
        setTimeout('respuesta_actualizar_generacion_a()', 1000);
    }

    function remover_ciclo(id_generacion_ciclo){
        alert ("id generacion ciclo  "+ id_generacion_ciclo);
        var url = "./operacionePHP/remover_ciclo_de_generacion.php?id_generacion_ciclo="+id_generacion_ciclo;
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
    //---------------------ACTUALIZA LA GENERACION FUTURA-----------------------
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
    //--------------------------------------RESPUESTAS----------------------------------------
    //----------RESPUESTA GENERACIONES FUTURAS
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
    //--------RESPUESTAS DE GENERACIONES ACTUALES
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