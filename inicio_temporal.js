eventListeners();
console.log('holamundo');
function eventListeners(){
  document.querySelector('#enviar').addEventListener('click',envioPagina);
}



function envioPagina(e){
    e.preventDefault();
    console.log('holamundo');
    var  usuario = document.querySelector('#email').value,
    password = document.querySelector('#contra').value;

    switch (usuario) {
        case 'admin':
            console.log('si entro el hora que estaba en correo');
            window.location.href = 'admin/index.php';
            break;
        case 'docente':
            console.log('si entro el hora que estaba en docente');
            window.location.href = 'docente/index.php';
            break;
        case 'alumno':
            console.log('si entro el hora que estaba en alumno');
            window.location.href = 'alumnos/index_alumnos.html';
            break;
    };
    
}
/*
if(respuesta.tipo === 'login'){  // opciones de login

    switch (respuesta.respuesta) {
      case 'correcto':
        swal({
          type: 'success',
          title:  'Login Correcto',
          text: 'presiona OK para continuar'
        })
        .then(resultado =>{
          if(resultado.value){
            window.location.href = 'index.php';
          }
        })
      break;
      case 'error_user':
          swal({
              type: 'error',
              title:  'Usuario Inexistente',
              text: 'El usuario no existe'
          })
      break;
      case 'error_pass':
                swal({
                type: 'error',
                title:  'Error, Contraseña',
                text: 'La contraseña es incorrecta'
                })
      break;
      default:
        console.log('no se encuentran una opcion valida');*/
