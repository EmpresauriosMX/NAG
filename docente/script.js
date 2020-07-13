eventListeners();

function eventListeners(){
  document.querySelector('#subir_calificacion').addEventListener('click',activar);
  document.querySelector('#confirmacion').addEventListener('click',prueba);
}

function activar(e) {
    e.preventDefault();
        disableTxt();
    }

function disableTxt() {
    /*
        prubas para acceder a todos desde un for
    document.querySelector('#calificacion').disabled = false;
    /var x = document.getElementById("example2").querySelectorAll(".calificaciones");
    console.log(x);
    for (i = 0; i < x.length; i++) {
        var palabra = ''
        console.log()
       // document.getElementById(variable).disabled = false;
    }
    var x = document.querySelectorAll("#calificacion");
    console.log(x);
      console.log("hola");*/
      document.querySelector('#calificacion').disabled = false;
      document.querySelector('#calificacion1').disabled = false;
      document.querySelector('#calificacion2').disabled = false;
      document.querySelector('#calificacion3').disabled = false;
      document.querySelector('#calificacion4').disabled = false;
      document.querySelector('#calificacion5').disabled = false;
      document.querySelector('#calificacion6').disabled = false;
      document.querySelector('#calificacion7').disabled = false;
      document.querySelector('#calificacion8').disabled = false;
      document.querySelector('#calificacion9').disabled = false;
      document.querySelector('#calificacion0').disabled = false;

      //aparicion de boton
        document.querySelector('#confirmacion').style.display = 'block';
      
  }
  function prueba(e) {
    e.preventDefault();
        alerta();
    }



  function alerta(){
    Swal.fire({
        title: 'Estas seguro?',
        text: "Una vez enviado no se pueden cambiar",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, Subir!'
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Enviado!',
            'Las calificaciones han sido enviadas',
            'success'
          )
        }
      })
  }