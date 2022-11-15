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
                <h2 class="section-title">ACONTINUACION LAS FORMULAS DE VELOCIDAD <br><b> </b></h2>
                <p class="section-sub-title">Alejandro:HOLA ChIcos aqui pueden resolver de forma sensilla y mas rapida la formulas de velocidad.<br> </p>
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
                    Formula 1,2,3<span>(velocidad)</span> <span></span>
                </h2>
                <p class="section-sub-title">La velocidad es el cambio de posición de un objeto con respecto al tiempo. En física se representa con: {\mathbf {v}}\, o {\vec {v}}\. En análisis dimensional sus dimensiones son: [L]/[t].​​ Su unidad en el Sistema Internacional de Unidades es el metro por segundo.</p>
            </div>
            <html>
<head> <title> velocidad </title>
</head>
<!-- FORMULAS -->
        
<form method="POST" action="">
<p> Inserta la distancia </p>
<input type="number" name="dis" step="0.01">
<br> <br>
<p> Inserta el tiempo </p>
<input type="number" name="tiempo" step="0.01">
<br> <br>
<button type="submit"><span> Enviar </span></button> <br> <br> 
</form>
<?php
$distancia = $_POST['dis'];
$tiempo = $_POST['tiempo'];

$velocidad = $distancia / $tiempo;
echo "<h1 style=\"color: red;margin-left: 0px\">El resultado de la velocidad es: $velocidad </h>"
?> <br> <br>
<hr>
<!-------------------------------------------------- FIN VELOCIDAD ----------------------------------------------->
<hr>
<!---------------------------------------------------DISTANCIA ----------------------------------------------->
<body>
<h2> "Distancia" </h2>
<div align="center">
 </div> 
<form method="POST" action="">
<p> Inserta la velocidad </p>
<input type="number" name="vel" step="0.01">
<br> <br>
<p> Inserta el tiempo </p>
<input type="number" name="time" step="0.01">
<br> <br>
<button type="submit"><span> Enviar </span></button> <br> <br>
</form>
</body>
<?php
$velocidad = $_POST['vel'];
$tiempo = $_POST['time'];

$distancia = $velocidad * $tiempo;
echo "<h1 style=\"color: red;margin-left: 30px\">El resultado de la distancia es: $distancia </h>"
?> <br> <br>
<hr>
<!-------------------------------------------------- FIN DISTANCIA ----------------------------------------------->
<hr>
<!-------------------------------------------------- TIEMPO ----------------------------------------------->
<body>
<h2> "Tiempo" </h2>
<div align="center">
 </div> 
<form method="POST" action="">
<p> Inserta la distania </p>
<input type="number" name="dis" step="0.01">
<br> <br>
<p> Inserta la velocidad </p>
<input type="number" name="veloc" step="0.01">
<br> <br> 
<button type="submit"><span> Enviar </span></button> <br> <br>
</form>
</body> 
<?php
$distancia = $_POST['dis'];
$velocidad = $_POST['veloc'];

$tiempo = $distancia / $velocidad;
echo "<h1 style=\"color: red;margin-left: 0px\">El resultado de el tiempo es: $tiempo </h>"
?>
</div>
</link>             
              
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
