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
    	 <h1>Using switch PHP</h1><br>
		<?php

			$sTipoMotor="3";
          
			switch ($sTipoMotor) {
				case '0':
					echo "No hay establecido un valor para tipo de bomba";
					break;

				case '1':
					echo "La bomba es una bomba de agua";
					break;

				case '2':
					echo "La bomba es una bomba de gasolina";
					break;

				case '3':
					echo "La bomba es una bomba de hormigon";
					break;

				case '4':
					echo "La bomba es una bomba de pasta alimenticia";
					break;
				
				default:
					echo "No exite un valor valido para tipo de bomba";
					break;
			}

		?>

    
</body>
</html>
