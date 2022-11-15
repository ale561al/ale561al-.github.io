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
                <h2 class="section-title">ACONTINUACION LAS FORMULAS DE LANZAMIENTO HORIZONTAL <br><b> </b></h2>
                <p class="section-sub-title">JAZMIN:HOLA ChIcos aqui pueden resolver de forma sensilla y mas rapida la formula de lanzamiento horizontal.<br> </p>
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
                    Formula 1,2,3,4<span>(posicion </span> <span>horizontal)</span>
                </h2>
                <p class="section-sub-title">El lanzamiento horizontal, también denominado tiro horizontal, es un ejemplo de composición de movimientos en dos dimensiones: un m.r.u. en el eje horizontal y un m.r.u.a. en el vertical.</p>
            </div>
            <html>
<head> <title> Lanzamiento Horizontal </title>
</head>
<!-- FORMULAS -->
        
<body> <div align="center">
<h1> Lanzamiento Horizontal</h1>
<br> <!-- FORMULA 1 --> 
<h2> Formula 1 (Posicion Horizontal) </h2>
<form method="POST" action="">
<p> Inserta la Velocidad inicial </p>
<input type="text" name="vi">
<br> <br>
<p> Inserta el tiempo </p>
<input type="text" name="tiempo">
<input type="submit" value="resultado">
</form>
     </body>

<?php
$vi = $_POST['vi'];
$tiempo = $_POST['tiempo']; 

$sx = $vi * $tiempo;
echo  'La posicion horizontal es: '.$sx, ' metros';
?>

<!-- FIN FORMULA 1 -->
<br> <br>
<body> <!-- FORMULA 2 -->
<h2> Formula 2 (Posicion Vertical) </h2>
<form method="POST" action="">
<p> Inserta el tiempo </p>
<input type="text" name="t">
<br> <br> 
<input type="submit" value="resultado">
</form>
     </body>
     <?php
$tiemp = $_POST['t'];

$sy = (0.5)*(9.8)*pow($tiemp, 2);
echo 'La posicion vertical es: '.$sy, ' metros';
?> <!-- FIN FORMULA 2 -->
<body>
    <!-- FORMULA 3 -->
<h2> Formula 3 (Velocidad Horizontal) </h2>
<form method="POST" action="">
<p> Inserta la Velocidad inicial </p>
<input type="text" name="veloini">
<br> <br>
<p> Inserta el tiempo </p>
<input type="text" name="time">
<br> <br> 
<input type="submit" value="resultado">
</form>
     </body>
<?php
$veloini = $_POST['veloini'];
$time = $_POST['time'];

$vx = $veloini * $time;
echo 'La velocidad horizontal es: '.$vx, ' metros';
?>
<body> <!-- FIN FORMULA 3 -->

 <!-- FORMULA 4  -->
 <h2> Formula 4 (Velocidad Vertical) </h2>
<form method="POST" action="">
<p> Inserta el tiempo </p>
<input type="text" name="time">
<br> <br> 
<input type="submit" value="resultado">
</form>
     </body>
     <?php
$tiempo = $_POST['time'];

$vy = (9.8)*($tiempo);
echo'La velocidad vertical es: '.$vy, ' metros';
     ?> 
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
