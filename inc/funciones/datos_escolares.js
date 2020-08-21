function getXMLHTTPRequest()
{
var req = false;
try
  {
    req = new XMLHttpRequest(); /* p.e. Firefox */
  }
catch(err1)
  {
  try
    {
     req = new ActiveXObject("Msxml2.XMLHTTP");
  /* algunas versiones IE */
    }
  catch(err2)
    {
    try
      {
       req = new ActiveXObject("Microsoft.XMLHTTP");
  /* algunas versiones IE */
      }
      catch(err3)
        {
         req = false;
        }
    }
  }
return req;
}

var miPeticion = getXMLHTTPRequest();
var miPeticion1 = getXMLHTTPRequest();
var miPeticion2 = getXMLHTTPRequest();



//~~~~~~~~~~~AGREGAR~~~~~~~~~~~~~~
function agregarpuesto(){
	//alert("Agregar");
var nombrep = document.form2.nombrep.value;
	//alert("Agregar 2");
var url = "agp.php?np=" + nombrep;
	//alert("Agregar 3");
miPeticion.open("GET", url, true);
miPeticion.onreadystatechange=respuestaAjax;
miPeticion.send(null);
}


function respuestaAjax() {
if(miPeticion.readyState == 1) {
	document.getElementById("lista").innerHTML="<center>Aguantame tantito....</center>";
}
else if(miPeticion.readyState == 4) {
if(miPeticion.status == 200) {
 var mitexto=miPeticion.responseText;
 document.getElementById("lista").innerHTML=mitexto;
        } else {
		alert("Ha ocurrido un error ag: " + miPeticion.statusText);
        }
    }
}
//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


