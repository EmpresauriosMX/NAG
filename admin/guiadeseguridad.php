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
        <a href="#" class="nav-link">Informacion de la Instituci√≥n</a>
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

 <!-- inicio --------------------- BARRA DE NAVEGACI√ďN IZQUIERDA------------->
 <?php
    include 'plantilla_barra_izquierda.php';
  ?>
  <!-- Fin --------------------- BARRA DE NAVEGACI√ďN IZQUIERDA------------->

    
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
                    <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Gu√≠a de Seguridad para el Usuarios</a>
                </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">  
                    <h1 class="mt-4">¬ŅEstamos seguros?</h1>
                    <p>En internet y los servicios que a trav√©s de ella, se prestan se han convertido en un elemento imprescindible para nuestras vidas. Adem√°s, la explosi√≥n de la conectividad ubicua mediante el uso masivo de dispositivos m√≥viles inteligentes, especialmente los smartphones, y redes de datos m√≥viles cada vez m√°s r√°pidas, hace que todos estos servicios se puedan consumir en cualquier lugar y a cualquier hora del d√≠a o de la noche, por lo que podemos hablar de ‚Äúpersonas conectadas‚ÄĚ m√°s que de dispositivos y ordenadores conectados.</p>
                    <p>Estos servicios forman parte de nuestro d√≠a a d√≠a, cuando nos informamos, nos relacionamos compartiendo informaci√≥n con otras personas, publicamos fotos o v√≠deos, nos divertimos con los videojuegos, escuchamos m√ļsica, vemos pel√≠culas o compramos en l√≠nea. Las posibilidades y ventajas son infinitas.</p>  
                    <p>En buena parte de los casos, los servicios m√°s usados en la red se prestan gracias a la cantidad de informaci√≥n y datos personales que los usuarios aportamos, tanto a las empresas que ofrecen los servicios como a otros usuarios, por lo que debemos ser conscientes de los riesgos que esto puede suponer para nuestra seguridad y privacidad.</p>
                </div>

                <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> 
                    <!--Apartado de Seguridad General-->
                    <h1 class="mt-4">Seguridad</h1>
                    <p>Primero se debe de mencionar, ¬Ņqu√© es seguridad? trata acerca de los recursos del sistema, en el cual se utilizan de la manera en la que se espera y que quienes puedan acceder a la informaci√≥n que en √©l se encuentran sean las personas acreditadas para hacerlo.la sebguridad tiene diferentes formas o se a moldeado de tal forma que abarca muchos campos, en el cual est√° constituida para tener un concepto amplio en cuanto a ella, lo que se quiere lograr en este apartado o gu√≠a, es que un sistema en el cual es para la entrega de resultados tenga una seguridad optima. La seguridad debe de contar con los siguientes criterios: </p>
                    <h5>Confidencialidad:</h5>
                    <p>Es la capacidad de un sistema de garantizar que la informaci√≥n y almacenada en el mismo y/o transmitida por la red, estar√° √ļnicamente disponible para aquellas personas autorizadas, es decir no desvelara los datos a terceros.</p>
                    <h5>Integridad:</h5>
                    <p>Es la capacidad de garantizar que la informaci√≥n no ser√° modificada sin autorizaci√≥n previa desde el momento de su creaci√≥n, la informaci√≥n provista es v√°lida y consistente, es decir garantiza que los datos no sean falseados.</p>
                    <h5>Disponibilidad:</h5>
                    <p>Hace referencia a la capacidad de un sistema de garantizar que el usuario sea capaz de acceder a su informaci√≥n en todo momento.</p>
                    <h5>Autenticidad:</h5>
                    <p>Se refiere la capacidad de verificar que un documento pertenece y/o ha sido elaborado por un usuario</p>

                    <!--Apartado Seguridad Activa-->
                    <h1 class="mt-4">Seguridad activa</h1>
                    <p>Es el conjunto de medidas que previenen e intentan evitar los da√Īos en los sistemas inform√°ticos. En si consiste en aquella que se centra en prevenir o evitar da√Īos a los sistemas inform√°ticos en conjunto, ya sea de hardware o de software o de red, por ejemplo los antivirus, los controles de acceso a salas de servidores, la encriptaci√≥n de la informaci√≥n, los sistemas de redundancia de hardware, etc. </p>
                    <h5>La criptografia</h5>
                    <p>En si primero que nada en cuanto a la seguridad pasiva la criptograf√≠a es fundamental, ya que es la creaci√≥n de mensajes codificados con procedimiento o claves secretas con el objetivo de solo ser descifrados por el destinatario.</p>
                    <p>En si la criptografia, hablando en cuanto a seguridad este se refiere a que el texto del mensaje solo puede ser le√≠do por el destinatario, en cuanto a la integridad es aquella certeza del mensaje, asegura que no ha existido ninguna manipulaci√≥n posterior de los datos, otro de los puntos importantes de la criptografia seria la autenticidad tiene una certeza del remitente, acredita quien es su autor y el no rechazo, el cual no se puede negar la autor√≠a de un mensaje enviado.</p>
                    <h5>Uso de Antivirus</h5>
                    <p>En tal caso tambi√©n hay de considerar la utilizaci√≥n de programas, como lo son antivirus, esc√°neres para el equipo, mas que nada para prevenir posibles problemas, crear particiones del disco duro para almacenar archivos y backups, en una unidad distinta a la del sistema operativo, mas que nada los antivirus para encontrar alg√ļn malware en los dispositivos que interact√ļan con el sistema a la vez de los esc√°neres por si alg√ļn equipo, esta teniendo errores por lo cual esto sino se detecta puede ser muy perjudicial, ya que se puede perder informaci√≥n preciada, ya que dependiendo del sistem o la magnitud de usuario puede ser muy perjudicial, tambien crear protocolos para permitir la entrada al sistema creado.</p>
                        
                    <!--Apartado Seguridad Pasiva-->
                    <h1 class="mt-4">Seguridad pasiva</h1>
                    <p>La seguridad pasiva, no es lo contrario a la seguridad activa, es un complemento que entra en marcha cuando las medidas de seguridad activa no han sido suficientes para frenar una amenaza.</p>
                    <h5>HARDWARE Y ALMACENAMIENTO</h5>
                    <p> En cuanto hardware se refiere a las diferentes estrategias como en cuanto a la seguridad f√≠sica est√° centrado tanto a los desastres naturales, fallas humanas, robos u otros casos, la manera mas √≥ptima de resguardar la integridad del equipo y de los datos almacenados.</p>
                    <p>Se recomienda que los servidores si la instalaci√≥n donde se implemente este sistema es de dos pisos, se recomienda ponerlo en el segundo por posibles inundaciones, tambien de integrar los Sal o sistema de alimentaci√≥n ininterrumpida en el cual es un dispositivo electr√≥nico que permite proteger a los equipos frente a los picos o ca√≠das de tensi√≥n. De esta manera se dispone de una mayor estabilidad frente a los cambios del suministro el√©ctrico y de una fuente de alimentaci√≥n auxiliar cuando se produce un corte de luz.</p>
                    <h5>Almacenamiento redundante y distribuido</h5>
                    <p>Consiste en un conjunto de t√©cnicas hardware o software que utilizando varios discos proporcionan principalmente tolerancia a fallos, mayor capacidad y mayor fiabilidad en el almacenamiento.</p>
                    <p>En cuanto al almacenamiento se debe de considera utilizar el raid 5, ya que este es mejor en si por que este almacena de manera r√°pida los datos a su vez que crea fracciones de c√≥digo en el cual se almacena la informaci√≥n, pero si uno de los discos se pierde se puede volver a recuperar la informaci√≥n, sin embargo, si se pierde dos la informaci√≥n no se podr√° recuperar si igual de considerar tener un almacenamiento de nube por posibles perdidas de almacenamiento fisico.</p>
                        
                </div>
              
              
              
              
                <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">
                    <!--Seguridad de Usuario--> 
                    <h1 class="mt-4">Seguridad a usuario</h1>
                    <h5>¬ŅSon tan importantes las contrase√Īas?</h5>
                    <p>Si son muy importantes, son utilizadas todos los d√≠as por lo cual no es una buena pr√°ctica utilizar la misma contrase√Īa para acceder a distintos servicios, si en alg√ļn momento tu contrase√Īa se viera comprometida, el riesgo para tu informaci√≥n personal ser√≠a mucho mayor, ya que no solo podr√≠an acceder a uno de tus servicios sino a todos aquellos en los que utilizases la misma clave para acceder.</p>
                    <p>Qu√© nadie adivine tus contrase√Īas</p>
                    <p>Elige contrase√Īas fuertes o robustas de al menos 8 caracteres y compuesta por:</p>
                    <p>may√ļsculas (A, B, C‚Ä¶)</p>
                    <p>min√ļsculas (a, b, c‚Ä¶)</p>
                    <P>n√ļmeros (1, 2, 3)</P>
                    <p>y caracteres especiales ($, &, #...)</p>
                    <p>NO utilices contrase√Īas f√°ciles de adivinar como:</p>
                    <p>‚Äú12345678‚ÄĚ, ‚Äúasdfgg‚ÄĚ, ‚ÄĚ11111‚ÄĚ, nombres de familiares, mascotas, etc.</p>
                    <p>NO compartas tus contrase√Īas.</p>
                    <p></p>Si lo haces, dejar√° de ser secreta y estar√°s dando acceso a otras personas a tu privacidad.</p>
                    <p>NO uses la misma contrase√Īa en varios servicios.</p>
                    <!--¬ŅDebo realizar copias de Seguridad?-->
                    <h1 class="mt-4">Realizar copias de seguridad</h1>
                    <p>No esperes en verte envuelto en una situaci√≥n donde pierdas informaci√≥n por problemas del equipo o por un virus, haz a menudo copias de seguridad, ya que puedes perder recuerdos y momentos personales, repetir trabajos a los que hab√≠as dedicado tiempo y esfuerzo, etc. La √ļnica forma segura de recuperar la informaci√≥n con ciertas garant√≠as es disponiendo de una copia de seguridad.
                    Una de las causas que a varios ha de haber pasado ser√≠a el borrado accidental, ya que es una de las causas m√°s frecuentes de p√©rdida de informaci√≥n, aunque no es la √ļnica, tambi√©n puede ser debido a la acci√≥n de alg√ļn virus capaz de cifrar o borrar la informaci√≥n, por la p√©rdida, accidente o robo del dispositivo que contiene la informaci√≥n en nuestro port√°til, disco duro externo, pendrive, DVD, etc. O sino porque el dispositivo deje de funcionar correctamente.</p>
                    <h5>¬ŅLa p√°gina es segura?</h5>
                    <p>Si no tienes un conocimiento del uso de Internet y las tecnolog√≠as, es normal que te genere dudas realizar ciertos tr√°mites v√≠a online. El desconocimiento de ciertos aspectos de seguridad provoca que cometas errores, puedas ser v√≠ctima de alg√ļn fraude o simplemente no hagas nada por miedo. 
                    Antes de hacer una gesti√≥n, debes comprobar que la p√°gina es segura, especialmente si la acci√≥n implica facilitar datos sensibles. 
                    Puedes acabar en webs fraudulentas que suplantan la identidad de empresas y servicios conocidos.
                    Ser v√≠ctima de virus o fraudes que facilitan el robo de dinero y datos personales.
                    Pon en forma a tu dispositivo, prot√©gelo adecuadamente Lo primero que tienes que hacer es asegurarte que tu dispositivo est√° preparado para realizar los distintos tr√°mites. Prot√©gelo adecuadamente:
                    Instalando un antivirus y manteni√©ndolo actualizado para que detecte las √ļltimas amenazas que circulan por la red.
                    Tu equipo y sus programas, como el navegador, tambi√©n tienes que mantenerlos actualizados y correctamente configurados.
                    Crea una cuenta de usuario por cada persona que vaya a utilizar el dispositivo.
                    La conexi√≥n es importante, no la descuides siempre que vayas a realizar tr√°mites online evita hacerlo desde redes wifi p√ļblicas. Con√©ctate mejor con el 3G/4G del m√≥vil o desde tu wifi de casa y no te olvides de comprobar si tu red wifi est√° correctamente configurada para evitar que desconocidos se conecten a ella.</p>
                    <!--¬ŅEstoy seguro solo con mi contrase√Īa?-->
                    <h1 class="mt-4">¬ŅEstoy seguro solo con mi contrase√Īa?</h1>
                    <p>La seguridad de un servicio protegido √ļnicamente por una contrase√Īa depende exclusivamente de la misma, esto implica un riesgo de seguridad ya que, si alguien la obtuviera bajo alguna circunstancia, no solo tendr√≠a acceso a tu cuenta de usuario, sino que tambi√©n podr√≠a realizar actividades fraudulentas en tu nombre o curiosear tu informaci√≥n personal.</p>
                    <h5>A√Īade una capa de seguridad extra a tu cuenta</h5>
                    <p>Una forma de proteger una cuenta de usuario es haciendo uso de sistemas de verificaci√≥n en dos pasos que consisten en a√Īadir una capa de seguridad extra al proceso de registro/login de un determinado servicio online, es decir, para acceder a √©l, adem√°s de un nombre de usuario y una contrase√Īa, ser√° necesario que facilites un c√≥digo que s√≥lo t√ļ conoce.</p>
                    <h5>¬ŅQu√© consigues con esto?</h5>
                    <p>Dificultar el acceso a terceras personas a tus servicios online, ya que, aunque consigan por alg√ļn m√©todo tu contrase√Īa, necesitar√°n tambi√©n introducir un c√≥digo que s√≥lo podr√°n conocer si disponen f√≠sicamente de tu tel√©fono m√≥vil</p>
                    <h5>¬ŅC√≥mo a√Īadir u obtener los c√≥digos de seguridad?</h5>
                    <p>Dependiendo del servicio, podr√°s usar un m√©todo u otro, aunque entre los m√°s implantados actualmente se encuentra el env√≠o de un c√≥digo a trav√©s de un mensaje SMS a un n√ļmero
                    de tel√©fono previamente configurado. Una vez recibido dicho c√≥digo, hay que introducirlo como un segundo paso adicional antes de lograr acceder al servicio.</p>
                    <p>Si tienes identificados dispositivos de confianza no tendr√°s que meter el c√≥digo cada vez que quieras acceder a un determinado servicio. Marc√°ndolo como tal, solo tendr√°s que introducirlo, haciendo que la doble verificaci√≥n resulte una tarea m√°s √°gil.
                    Algunos servicios aun no disponen de opciones de verificaci√≥n en dos pasos. Si te encuentras en esta situaci√≥n, aseg√ļrate de usar contrase√Īas robustas y gestiona √©stas adecuadamente para evitar problemas de seguridad y privacidad.</p>
                    <!--¬ŅDeberia usar Antivirus?-->
                    <h1 class="mt-4">Hacer uso de antivirus</h1>
                    <p>Los antivirus est√°n dise√Īados para proporcionar la m√°xima protecci√≥n contra los peligros potenciales que una persona puede enfrentar mientras navega por Internet. Estos programas hacen su trabajo mediante la identificaci√≥n de las amenazas de seguridad peligrosas que puedan poner en peligro el funcionamiento de un ordenador. El antivirus tambi√©n est√° dirigido a la prevenci√≥n de los problemas de seguridad que surgen a menudo durante el uso de un ordenador, incluyendo la amenaza frecuente de robo de identidad.</p>
                    <h5>¬ŅComo funcionan los antivirus?</h5>
                    <p>Un programa antivirus funciona al mantener un tipo de vigilancia dentro de una red. El programa antivirus con antispyware comprobar√° continuamente el sistema en busca de amenazas de malware. El usuario de la ordenadora tiene la opci√≥n de ejecutar un an√°lisis de virus r√°pido, erradicando as√≠ los problemas de bajo riesgo m√°s comunes. Para un an√°lisis m√°s detallado y la soluci√≥n al problema, se recomienda un an√°lisis de virus en profundidad.</p>
                    <p>Hay varios pasos involucrados en el proceso que un programa antivirus emplea para identificar una amenaza potencial a un ordenador. Considerando que hay nuevos virus, gusanos y amenazas de spyware en Internet, tener instalado antivirus no significa necesariamente que la protecci√≥n es completa. Por esta raz√≥n, se cree fundamental mantener actualizaciones peri√≥dicas para la protecci√≥n continua de su ordenador y todos sus ficheros.</p>
                    <p>Despu√©s de instalar y activar el antivirus, t√ļ debes realizar una prueba para asegurar que el programa se ejecuta sin problemas. Para ello debes abrir el programa en el equipo y seguir los pasos necesarios para ejecutar un an√°lisis completo del sistema. Muchos programas antivirus vienen con un tutorial que podr√°s seguir si no est√° seguro de c√≥mo ejecutar el software.</p>

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
