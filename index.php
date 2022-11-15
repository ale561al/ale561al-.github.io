<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Pagina web basica</title>

</head>
<body>
    
    <video autoplay muted loop id="bg-video">
        <source src="video/gfp-astro-timelapse.mp4" type="video/mp4">
    </video>
    <header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>INFORMACION</h1>
			</div>
            <nav class="menu">
                
				<a href="velocidad.php">VELOCIDAD</a>
				<a href="aceleracion.php">ACELERACION</a>
               <a href="caidalibre.php">CAIDA LIBRE</a>
				<a href="lanzamiento.php">LANZAMIENTO HORIZONTAL</a>
			</nav>
        </nav>
    </div>
</header>
   
<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
<div class="cont-menu"><nav>
    <a href="#">¿QUE ES?</a>
    <a href="#"></a>
</nav>
<label for="btn-menu">✖️</label>
</div>   

    <header class="content sau">
        <h2 class="title">VELOCIDAD</h2>
        <p>
            La velocidad es el cambio de posición de un objeto con respecto al tiempo. En física se representa con: {\mathbf {v}}\, o {\vec {v}}\. En análisis dimensional sus dimensiones son: [L]/[t].​​ Su unidad en el Sistema Internacional de Unidades es el metro por segundo
        </p>

        <div class="btn-home">
            <a href="velocidad.php" class="btn">SABER FORMULAS</a>
            
        </div>
    </header>

    <section class="content sau">

        <h2 class="title">ACELERACION</h2>
        <p>En física, la aceleración es una magnitud derivada vectorial que nos indica la variación de velocidad por unidad de tiempo. En el contexto de la mecánica vectorial newtoniana se representa normalmente por {\displaystyle {\vec {a}}\, } o {\displaystyle \mathbf {a} \, } y su módulo por a\. </p>
        
        <div class="box-container">
            <div class="btn-home">
                <a href="aceleracion.php" class="btn">SABER FORMULAS</a>


        </div>

    </section>

    <section class="content about">

        <h2 class="title">CAIDA LIBRE </h2>
        <p>En física, se denomina caída libre al movimiento de un cuerpo bajo la acción exclusiva de un campo gravitatorio
        </p>

        <a href="caidalibre.php" class="btn">SABER FORMULAS</a>
       

    </section>

    <section class="content price">

        <article class="contain">
            <h2 class="title">LANZAMIENTO HORIZONTAL SD</h2>
            <p>El movimiento de un proyectil en lanzamiento horizontal es un caso especial del movimiento en dos dimensiones. Cuando este tipo de movimiento se analiza como dos movimientos perpendiculares entre sí, el desplazamiento en cada dirección depende de la velocidad y la aceleración en esa dirección.
            </p>

            <a href="lanzamiento.php" class="btn">SABER FORMULAS</a>

        </article>

    </section>

    <section class="content contact">
        <h2 class="title">Integrantes</h2>
        <p>Alejandro Alfonso Garcia
             </p>
        <figure class="">
            <img src="img/.png" height="220px" width="100%" alt="mapa">
        </figure>
    </section>
    
		 
</body>
</html>