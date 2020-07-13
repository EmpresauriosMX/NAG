eventListeners();

function eventListeners(){
  document.querySelector('#subir_calificacion').addEventListener('click',activar);
}

function activar(e) {
    e.preventDefault();
        disableTxt();

        console.log("prueba");
    }

function disableTxt() {
    //document.querySelector('#calificacion').disabled = false;
    var x = document.getElementById("example2").querySelectorAll(".calificaciones");
    console.log(x);
    for (i = 0; i < x.length; i++) {
        var palabra = ''
        console.log()
       // document.getElementById(variable).disabled = false;
    }


    var x = document.querySelectorAll("#calificacion");
    console.log(x);
      console.log("hola");
      document.querySelector('#calificacion').disabled = false;
  }