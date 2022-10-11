<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Inicio Sesion</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="social/bootstrap-social.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<header>
		<section class="container">
			<h1>Iniciar Sesion</h1>
			
		</section>
	</header>
	<nav class="pull-right" >
		<section class="container-fluid" >
			<section class="row">
				
			
			  
		    </section>

		</section>
		
		
	</nav>

<br>
<br>
<br>

<section class="login container">
	<section class="row">
		
		<section  class=" col-xs-1 col-sm-2 col-md-2">
				
				
				
		</section>

		<section class="col-xs-12 col-sm-8 col-md-8">
			<form action="validar.php" method="POST">

				    <section class="form-group">
			              <label for="Usuario">Usuario:</label>
		                  <input class="form-control" name="usuario" type="text" placeholder="Usuario:" required="" >
			
		            </section>
		            <section class="form-group">
			              <label for="Contrasena">Contraseña:</label>
		                  <input class="form-control" name="contrasena" type="password" placeholder="Contraseña:" required="" >
			
		            </section>
		            <section class="form-group">
		                        <button  class="boton btn" type="submit">Iniciar Sesion</button>
		                       
		                        
	                </section>
				
			</form>
			
		</section>
		<section  class=" col-xs-1 col-sm-2 col-md-2">
				
				
				
		</section>
		




	</section>
	

</section>


<section class="modal fade" id="registro1">
		                        	<section class="modal-dialog">
		                        		<section class="modal-content">
		                        			<section class="modal-header" style="background-color: #F59535;	color: #ffffff;">
		                        				<button  style="color: #ffffff;" tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		                        				<h3 class="modal-title">Registrarse</h3>
		                        			</section>
		                        			<section class="modal-body">

		                        				<?php require_once 'regist.php' ?>
		                        				
		                        			</section>

		                        			<section class="modal-footer">
		                        				
		                        			</section>

		                        		</section>
		                        		  
		                        		 
		                        	</section>	

		                        	
		                        </section>









<footer class="pie">
		<section class="container">
			<br>
			<span > Elaborado por: Juan Manuel Moreno</span>
			<br>
			<span > Email: manius1027@hotmail.com</span>
			<br>
			<span>Telefono: 3167398231</span>
			<br>
			<br>
			
			
		</section>
	</footer>




<!--no se  utiliza  nada  debajo de  esta linea-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>