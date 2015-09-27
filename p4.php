<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pillos Systems;</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
</head>
<body>
    <header>
    	<div class="wrapper">
    	    <div class="logo"><a href="index.html">Pillos Systems;</a></div>
    	    <nav>	    
    			<a href="#">Home</a>
    			<a href="#">Blog</a>
    			<a href="#">Contact</a>
    	    </nav>
    	</div>
    </header>
 
    <section class="contenido wrapper">
    	 <h1>Using if / else / ternario PHP</h1>
		<?php

			$sTipo="carro";
			$nPrecio="500000";
			$sMarca="BMW";
          
			if ($nPrecio < 500000) {
				echo "Compra un carro mas pequeño";
			}
			else if ($nPrecio >= 500000) {
		        echo "Compra un BMW";
			}

		?>

    
</body>
</html>


