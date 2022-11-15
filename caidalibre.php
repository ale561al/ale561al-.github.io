<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FORMULARIO </title>
    <meta name="description" content="Core HTML Project">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/lightcase/lightcase.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- los css-->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="https://file.myfontastic.com/7vRKgqrN3iFEnLHuqYhYuL/icons.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>

        
            </ul>
        </div>
    </div>
    
</nav>		<div class="jumbotron d-flex align-items-center" style="background-image: url(img/hero2.webp)">
  <div class="container text-center">
      <a href="index.php">inicio</a>
    <h1 class="display-2 mb-4">Hola Estudiantes</h1>
    <p>
      sean bienvenidos ala pagina web de formulas de fisica mas popular que hay!! 
    </p>
  </div>
</div>		<section id="formula1" class="formula1">
    <div class="container">
        <div class="section-content">
            <div class="title-wrap">
                <h2 class="section-title">ACONTINUACION LAS FORMULAS DE CAIDA LIBRE <br><b> </b></h2>
                <p class="section-sub-title">ANGEL:HOLA ChIcos aqui pueden resolver de forma sensilla y mas rapida la formula de CAIDA LIBRE.<br> </p>
            </div>
             <div class="row text-center">
                <div class="col-md-4 col-sm-6 ">
                    <img class="rounded-circle" src="icons/animat-checkmark.gif" alt="Generic placeholder image" width="140" height="140">
                    <h5 class="mb-4"></p>
                    <p><a class="btn btn-link" href="#" role="button"></a></p>
                </div>
            
                <div class="col-md-4 col-sm-6 ">
                    <img class="rounded-circle" src="icons/animat-customize.gif" alt="Generic placeholder image" width="140" height="140">
                    <h5 class="mb-4"></h5>
                    <p></p>
                    <p><a class="btn btn-link" href="#" role="button"></a></p>
                </div>
                
                <div class="col-md-4 col-sm-6 ">
                    <img class="rounded-circle" src="icons/animat-responsive.gif" alt="Generic placeholder image" width="140" height="140">
                    <h5 class="mb-4"></h5>
                    <p> </p>
                    <p><a class="btn btn-link" href="#" role="button"></a></p>
                    
                </div>
               
            </div>
           
        </div>
    </div>


<section id="gtco-features" class="bg-white">
    <div class="container">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap">
                <h2 class="section-title">
                    Formula 1,2,3,4<span> </span> <span>(posicion)</span>
                </h2>
                <p class="section-sub-title">En física, se denomina caída libre al movimiento de un cuerpo bajo la acción exclusiva de un campo gravitatorio.</p>
            </div>
            <html>
<head> <title> Caida libre</title>
</head>
<!-- FORMULAS -->
    </head>
<!-- FORMULAS -->
<body> <div align="center">
 </div> 
<br> <!-- FORMULA 1 --> 
<h2> Formula 1 (posicion) </h2>
<form method="POST" action="" name="1">
<p><h1> Inserta la Velocidad final</h1></p>
<input type="text" name="vf">
<br> <br>
<p><h1> inserta la velocidad inicial</h1></p>
<input type="text" name="vi">
<br> <br>
<p><h1> inserta el tiempo</h1> </p>
<input type="text" name="t">
<input type="submit" value="resultado">
                       
 </form>
     </body>
<?php
$vf = $_POST['vf']; 
$vi = $_POST['vi']; 
$t = $_POST['t'] ;
$sx = ($vf + $vi/2) * $t ;
echo 'Su posicion es: '.$sx, ' M/S';
?>
                      
<!-- FIN FORMULA 1 -->
   <body bgcolor="cyan"> 
    <div align="center">
        <p><h1>CAIDA LIBRE</h1></p>
<h1></h1>
<br> <!-- FORMULA 1 --> 
<h2> Formula 2 (Velocidad final) </h2>
<form method="POST" action="">
<p><h1> Inserta la Velocidad inicial</h1></p>
<input type="text" name="vi">
<br> <br>
<p><h1> Inserta El Tiempo</h1></p>
<input type="text" name="tiempo">
<br> <br>
<input type="submit" value="resultado">

</form>
     </body>

<?php
$vi = $_POST['vi'];
$tiempo = $_POST['tiempo']; 
$gravedad = 9.8;
$sx = $vi + $gravedad * $tiempo;
echo 'La Velocidad es: '.$sx, ' M/S';
?>
<!-- FIN FORMULA 2 -->
<br> <!-- FORMULA 1 --> 
<h2> Formula 3 (Posición) </h2>
<form method="POST" action="">
<p><h1> Inserta la Velocidad inicial</h1></p>
<input type="text" name="vi">
<br> <br>
<p><h1> Inserta El Tiempo</h1></p>
<input type="text" name="tiempo">
<br> <br>
<p> <h1> Tu resultado es:</h1> </p>
<input type="submit" value="resultado">


</form>
     </body>

<?php
$vi = $_POST['vi'];
$tiempo = $_POST['tiempo']; 
$gravedad = 9.8;
$medio = 0.5;
$sx = $vi * $tiempo + $medio * $gravedad * ($tiempo* $tiempo);
echo 'La Posición es: '.$sx, ' M/S';
?>
<!-- FIN FORMULA 1 -->
<br> <!-- FORMULA 3 --> 
<h2> Formula 4 (tiempo/gravedad/posicion TGS) </h2>
<form method="POST" action="">
<p><h1> Inserta la Velocidad inicial</h1></p>
<input type="text" name="vi">
<br> <br>
<p><h1> Inserta El Tiempo</h1></p>
<input type="text" name="tiempo">
<br> <br>
<p> <h1> Tu resultado es:</h1> </p>
<input type="submit" value="resultado">


</form>
     </body>

<?php
$vi = $_POST['vi'];
$tiempo = $_POST['tiempo']; 
$gravedad = 9.8;
$medio = 1/2;
$sx = $vi * $tiempo + $medio * $gravedad * ($tiempo* $tiempo);
 echo 'La Velocidad es: '.$sx, ' M/S'; 
?>
<!-- FIN FORMULA 1 -->
<div>
</html>
    
               


                        
              
	<!-- los  JS -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="vendor/isotope/isotope.min.js"></script>
	<script src="vendor/lightcase/lightcase.js"></script>
	<script src="vendor/waypoints/waypoint.min.js"></script>
	<script src="vendor/countTo/jquery.countTo.js"></script>

	<!-- Main JS -->
	<script src="js/app.min.js "></script>
	<script src="//localhost:35729/livereload.js"></script>
</body>
</html>
