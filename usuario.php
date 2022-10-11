
<?php session_start();

$idsession=$_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>ingreso usuario</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="social/bootstrap-social.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
	<header>
		<section class="container">
			<h1>Interface Usuario</h1>
		</section>
	</header>
	<nav>
		<section class="container-fluid" >
			<section class="row">
				
			
			    <section  class="col-xs-12 col-sm-12 col-md-12"  >
			        <ol class="nav nav-pills">
			            
			      
			        	
			        	<li class="pull-right"role="presentarion"><a   href="index.php">Cerrar Sesion</a></li>
			       
			        
			        </ol>
			    </section>
		    </section>

		</section>
		
		
	</nav>
	<br>
	<br>

	<section class="container">
		<section class="row">
			
			

			
			<table class="table table-bordered ">
				<tr class="tablausuarios">
					<th>No ticket</th>
					<th>Asunto</th>
					<th>Estado</th>
					<th>Fecha Atualizado</th>
					<th>Ver</th>
					
				</tr>
			

                   	<tr>

                   		<td><?php echo "1";?></td>
                   		<td><?php echo "prueba login ";?></td>
                   		<td><?php echo "gestionado";?></td>
                   		<td><?php echo  "01-09-2022";?></td>
                   		
                   		<td><a href="#">ver</a></td>

                   	</tr>

 	              
				

			</table>
		
		</section>
	</section>


<!-- modal inicio-->
	 <section class="modal fade" id="nuevo1">
		<section class="modal-dialog">
		  <section class="modal-content">
		     <section class="modal-header" style="background-color: #F59535;	color: #ffffff;">
		         <button  style="color: #ffffff;" tyle="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
		          <h3 class="modal-title">Nuevo Ticket</h3>
		     </section>
		     <section class="modal-body">
		          <?php  include'nuevoticket.php'; ?>
		     </section>

		     <section class="modal-footer">
		                        				
		     </section>

		  </section>
		                        		  
		                        		 
		</section>	

		                        	
     </section>
<!-- modal final-->









<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>