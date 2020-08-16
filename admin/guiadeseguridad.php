<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Informacion de la Institución</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
    <!--nav derecha-->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link">Ciclo: cuatrimestre 6. junio - agosto</a>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

 <!-- inicio --------------------- BARRA DE NAVEGACIÓN IZQUIERDA------------->
 <?php
    include 'plantilla_barra_izquierda.php';
  ?>
  <!-- Fin --------------------- BARRA DE NAVEGACIÓN IZQUIERDA------------->

    
  <?php
  /*CONEXION A BD*/ 
  include("../inc/funciones/conexal.php");
  $link=Conectarse();
  ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <?php
               $result=mysqli_query($link,"select Puesto_laboral from administrador where ID_Admin=2");
               $total = mysqli_num_rows($result);
               while($row=mysqli_fetch_array($result)){
                   echo'
                    <h1 class="m-0 text-dark">Bienvenido '.$row["Puesto_laboral"].'</h1>
                    ';
                }
            ?>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   

    <!-- Main content -->
    <section class="content">

    <div class="row mt-4">
            <nav class="w-100">
                <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Guia de Seguridad</a>
                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Seguridad Activa y Pasiva</a>
                    <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Guía de Seguridad para el Usuarios</a>
                </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">  
                    <h1 class="mt-4">¿Estamos seguros?</h1>
                    <p>En internet y los servicios que a través de ella, se prestan se han convertido en un elemento imprescindible para nuestras vidas. Además, la explosión de la conectividad ubicua mediante el uso masivo de dispositivos móviles inteligentes, especialmente los smartphones, y redes de datos móviles cada vez más rápidas, hace que todos estos servicios se puedan consumir en cualquier lugar y a cualquier hora del día o de la noche, por lo que podemos hablar de “personas conectadas” más que de dispositivos y ordenadores conectados.</p>
                    <p>Estos servicios forman parte de nuestro día a día, cuando nos informamos, nos relacionamos compartiendo información con otras personas, publicamos fotos o vídeos, nos divertimos con los videojuegos, escuchamos música, vemos películas o compramos en línea. Las posibilidades y ventajas son infinitas.</p>  
                    <p>En buena parte de los casos, los servicios más usados en la red se prestan gracias a la cantidad de información y datos personales que los usuarios aportamos, tanto a las empresas que ofrecen los servicios como a otros usuarios, por lo que debemos ser conscientes de los riesgos que esto puede suponer para nuestra seguridad y privacidad.</p>
                </div>

                <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> 
                    <!--Apartado de Seguridad General-->
                    <h1 class="mt-4">Seguridad</h1>
                    <p>Primero se debe de mencionar, ¿qué es seguridad? trata acerca de los recursos del sistema, en el cual se utilizan de la manera en la que se espera y que quienes puedan acceder a la información que en él se encuentran sean las personas acreditadas para hacerlo.la sebguridad tiene diferentes formas o se a moldeado de tal forma que abarca muchos campos, en el cual está constituida para tener un concepto amplio en cuanto a ella, lo que se quiere lograr en este apartado o guía, es que un sistema en el cual es para la entrega de resultados tenga una seguridad optima. La seguridad debe de contar con los siguientes criterios: </p>
                    <h5>Confidencialidad:</h5>
                    <p>Es la capacidad de un sistema de garantizar que la información y almacenada en el mismo y/o transmitida por la red, estará únicamente disponible para aquellas personas autorizadas, es decir no desvelara los datos a terceros.</p>
                    <h5>Integridad:</h5>
                    <p>Es la capacidad de garantizar que la información no será modificada sin autorización previa desde el momento de su creación, la información provista es válida y consistente, es decir garantiza que los datos no sean falseados.</p>
                    <h5>Disponibilidad:</h5>
                    <p>Hace referencia a la capacidad de un sistema de garantizar que el usuario sea capaz de acceder a su información en todo momento.</p>
                    <h5>Autenticidad:</h5>
                    <p>Se refiere la capacidad de verificar que un documento pertenece y/o ha sido elaborado por un usuario</p>

                    <!--Apartado Seguridad Activa-->
                    <h1 class="mt-4">Seguridad activa</h1>
                    <p>Es el conjunto de medidas que previenen e intentan evitar los daños en los sistemas informáticos. En si consiste en aquella que se centra en prevenir o evitar daños a los sistemas informáticos en conjunto, ya sea de hardware o de software o de red, por ejemplo los antivirus, los controles de acceso a salas de servidores, la encriptación de la información, los sistemas de redundancia de hardware, etc. </p>
                    <h5>La criptografia</h5>
                    <p>En si primero que nada en cuanto a la seguridad pasiva la criptografía es fundamental, ya que es la creación de mensajes codificados con procedimiento o claves secretas con el objetivo de solo ser descifrados por el destinatario.</p>
                    <p>En si la criptografia, hablando en cuanto a seguridad este se refiere a que el texto del mensaje solo puede ser leído por el destinatario, en cuanto a la integridad es aquella certeza del mensaje, asegura que no ha existido ninguna manipulación posterior de los datos, otro de los puntos importantes de la criptografia seria la autenticidad tiene una certeza del remitente, acredita quien es su autor y el no rechazo, el cual no se puede negar la autoría de un mensaje enviado.</p>
                    <h5>Uso de Antivirus</h5>
                    <p>En tal caso también hay de considerar la utilización de programas, como lo son antivirus, escáneres para el equipo, mas que nada para prevenir posibles problemas, crear particiones del disco duro para almacenar archivos y backups, en una unidad distinta a la del sistema operativo, mas que nada los antivirus para encontrar algún malware en los dispositivos que interactúan con el sistema a la vez de los escáneres por si algún equipo, esta teniendo errores por lo cual esto sino se detecta puede ser muy perjudicial, ya que se puede perder información preciada, ya que dependiendo del sistem o la magnitud de usuario puede ser muy perjudicial, tambien crear protocolos para permitir la entrada al sistema creado.</p>
                        
                    <!--Apartado Seguridad Pasiva-->
                    <h1 class="mt-4">Seguridad pasiva</h1>
                    <p>La seguridad pasiva, no es lo contrario a la seguridad activa, es un complemento que entra en marcha cuando las medidas de seguridad activa no han sido suficientes para frenar una amenaza.</p>
                    <h5>HARDWARE Y ALMACENAMIENTO</h5>
                    <p> En cuanto hardware se refiere a las diferentes estrategias como en cuanto a la seguridad física está centrado tanto a los desastres naturales, fallas humanas, robos u otros casos, la manera mas óptima de resguardar la integridad del equipo y de los datos almacenados.</p>
                    <p>Se recomienda que los servidores si la instalación donde se implemente este sistema es de dos pisos, se recomienda ponerlo en el segundo por posibles inundaciones, tambien de integrar los Sal o sistema de alimentación ininterrumpida en el cual es un dispositivo electrónico que permite proteger a los equipos frente a los picos o caídas de tensión. De esta manera se dispone de una mayor estabilidad frente a los cambios del suministro eléctrico y de una fuente de alimentación auxiliar cuando se produce un corte de luz.</p>
                    <h5>Almacenamiento redundante y distribuido</h5>
                    <p>Consiste en un conjunto de técnicas hardware o software que utilizando varios discos proporcionan principalmente tolerancia a fallos, mayor capacidad y mayor fiabilidad en el almacenamiento.</p>
                    <p>En cuanto al almacenamiento se debe de considera utilizar el raid 5, ya que este es mejor en si por que este almacena de manera rápida los datos a su vez que crea fracciones de código en el cual se almacena la información, pero si uno de los discos se pierde se puede volver a recuperar la información, sin embargo, si se pierde dos la información no se podrá recuperar si igual de considerar tener un almacenamiento de nube por posibles perdidas de almacenamiento fisico.</p>
                        
                </div>
              
              
              
              
                <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">
                    <!--Seguridad de Usuario--> 
                    <h1 class="mt-4">Seguridad a usuario</h1>
                    <h5>¿Son tan importantes las contraseñas?</h5>
                    <p>Si son muy importantes, son utilizadas todos los días por lo cual no es una buena práctica utilizar la misma contraseña para acceder a distintos servicios, si en algún momento tu contraseña se viera comprometida, el riesgo para tu información personal sería mucho mayor, ya que no solo podrían acceder a uno de tus servicios sino a todos aquellos en los que utilizases la misma clave para acceder.</p>
                    <p>Qué nadie adivine tus contraseñas</p>
                    <p>Elige contraseñas fuertes o robustas de al menos 8 caracteres y compuesta por:</p>
                    <p>mayúsculas (A, B, C…)</p>
                    <p>minúsculas (a, b, c…)</p>
                    <P>números (1, 2, 3)</P>
                    <p>y caracteres especiales ($, &, #...)</p>
                    <p>NO utilices contraseñas fáciles de adivinar como:</p>
                    <p>“12345678”, “asdfgg”, ”11111”, nombres de familiares, mascotas, etc.</p>
                    <p>NO compartas tus contraseñas.</p>
                    <p></p>Si lo haces, dejará de ser secreta y estarás dando acceso a otras personas a tu privacidad.</p>
                    <p>NO uses la misma contraseña en varios servicios.</p>
                    <!--¿Debo realizar copias de Seguridad?-->
                    <h1 class="mt-4">Realizar copias de seguridad</h1>
                    <p>No esperes en verte envuelto en una situación donde pierdas información por problemas del equipo o por un virus, haz a menudo copias de seguridad, ya que puedes perder recuerdos y momentos personales, repetir trabajos a los que habías dedicado tiempo y esfuerzo, etc. La única forma segura de recuperar la información con ciertas garantías es disponiendo de una copia de seguridad.
                    Una de las causas que a varios ha de haber pasado sería el borrado accidental, ya que es una de las causas más frecuentes de pérdida de información, aunque no es la única, también puede ser debido a la acción de algún virus capaz de cifrar o borrar la información, por la pérdida, accidente o robo del dispositivo que contiene la información en nuestro portátil, disco duro externo, pendrive, DVD, etc. O sino porque el dispositivo deje de funcionar correctamente.</p>
                    <h5>¿La página es segura?</h5>
                    <p>Si no tienes un conocimiento del uso de Internet y las tecnologías, es normal que te genere dudas realizar ciertos trámites vía online. El desconocimiento de ciertos aspectos de seguridad provoca que cometas errores, puedas ser víctima de algún fraude o simplemente no hagas nada por miedo. 
                    Antes de hacer una gestión, debes comprobar que la página es segura, especialmente si la acción implica facilitar datos sensibles. 
                    Puedes acabar en webs fraudulentas que suplantan la identidad de empresas y servicios conocidos.
                    Ser víctima de virus o fraudes que facilitan el robo de dinero y datos personales.
                    Pon en forma a tu dispositivo, protégelo adecuadamente Lo primero que tienes que hacer es asegurarte que tu dispositivo está preparado para realizar los distintos trámites. Protégelo adecuadamente:
                    Instalando un antivirus y manteniéndolo actualizado para que detecte las últimas amenazas que circulan por la red.
                    Tu equipo y sus programas, como el navegador, también tienes que mantenerlos actualizados y correctamente configurados.
                    Crea una cuenta de usuario por cada persona que vaya a utilizar el dispositivo.
                    La conexión es importante, no la descuides siempre que vayas a realizar trámites online evita hacerlo desde redes wifi públicas. Conéctate mejor con el 3G/4G del móvil o desde tu wifi de casa y no te olvides de comprobar si tu red wifi está correctamente configurada para evitar que desconocidos se conecten a ella.</p>
                    <!--¿Estoy seguro solo con mi contraseña?-->
                    <h1 class="mt-4">¿Estoy seguro solo con mi contraseña?</h1>
                    <p>La seguridad de un servicio protegido únicamente por una contraseña depende exclusivamente de la misma, esto implica un riesgo de seguridad ya que, si alguien la obtuviera bajo alguna circunstancia, no solo tendría acceso a tu cuenta de usuario, sino que también podría realizar actividades fraudulentas en tu nombre o curiosear tu información personal.</p>
                    <h5>Añade una capa de seguridad extra a tu cuenta</h5>
                    <p>Una forma de proteger una cuenta de usuario es haciendo uso de sistemas de verificación en dos pasos que consisten en añadir una capa de seguridad extra al proceso de registro/login de un determinado servicio online, es decir, para acceder a él, además de un nombre de usuario y una contraseña, será necesario que facilites un código que sólo tú conoce.</p>
                    <h5>¿Qué consigues con esto?</h5>
                    <p>Dificultar el acceso a terceras personas a tus servicios online, ya que, aunque consigan por algún método tu contraseña, necesitarán también introducir un código que sólo podrán conocer si disponen físicamente de tu teléfono móvil</p>
                    <h5>¿Cómo añadir u obtener los códigos de seguridad?</h5>
                    <p>Dependiendo del servicio, podrás usar un método u otro, aunque entre los más implantados actualmente se encuentra el envío de un código a través de un mensaje SMS a un número
                    de teléfono previamente configurado. Una vez recibido dicho código, hay que introducirlo como un segundo paso adicional antes de lograr acceder al servicio.</p>
                    <p>Si tienes identificados dispositivos de confianza no tendrás que meter el código cada vez que quieras acceder a un determinado servicio. Marcándolo como tal, solo tendrás que introducirlo, haciendo que la doble verificación resulte una tarea más ágil.
                    Algunos servicios aun no disponen de opciones de verificación en dos pasos. Si te encuentras en esta situación, asegúrate de usar contraseñas robustas y gestiona éstas adecuadamente para evitar problemas de seguridad y privacidad.</p>
                    <!--¿Deberia usar Antivirus?-->
                    <h1 class="mt-4">Hacer uso de antivirus</h1>
                    <p>Los antivirus están diseñados para proporcionar la máxima protección contra los peligros potenciales que una persona puede enfrentar mientras navega por Internet. Estos programas hacen su trabajo mediante la identificación de las amenazas de seguridad peligrosas que puedan poner en peligro el funcionamiento de un ordenador. El antivirus también está dirigido a la prevención de los problemas de seguridad que surgen a menudo durante el uso de un ordenador, incluyendo la amenaza frecuente de robo de identidad.</p>
                    <h5>¿Como funcionan los antivirus?</h5>
                    <p>Un programa antivirus funciona al mantener un tipo de vigilancia dentro de una red. El programa antivirus con antispyware comprobará continuamente el sistema en busca de amenazas de malware. El usuario de la ordenadora tiene la opción de ejecutar un análisis de virus rápido, erradicando así los problemas de bajo riesgo más comunes. Para un análisis más detallado y la solución al problema, se recomienda un análisis de virus en profundidad.</p>
                    <p>Hay varios pasos involucrados en el proceso que un programa antivirus emplea para identificar una amenaza potencial a un ordenador. Considerando que hay nuevos virus, gusanos y amenazas de spyware en Internet, tener instalado antivirus no significa necesariamente que la protección es completa. Por esta razón, se cree fundamental mantener actualizaciones periódicas para la protección continua de su ordenador y todos sus ficheros.</p>
                    <p>Después de instalar y activar el antivirus, tú debes realizar una prueba para asegurar que el programa se ejecuta sin problemas. Para ello debes abrir el programa en el equipo y seguir los pasos necesarios para ejecutar un análisis completo del sistema. Muchos programas antivirus vienen con un tutorial que podrás seguir si no está seguro de cómo ejecutar el software.</p>

                </div>
            </div>
    </div>       

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-pre
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- OPTIONAL SCRIPTS -->
<script src="../dist/js/demo.js"></script>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<!-- jQuery Mapael -->
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- PAGE SCRIPTS -->
<script src="../dist/js/pages/dashboard2.js"></script>
</body>
</html>
