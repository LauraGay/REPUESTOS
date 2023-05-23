<!doctype html>
<html lang="en">

<?php

include("encabezado.php");
include("pie.php");

?>

<head>
<script src='funcion.js'></script>
<link rel="stylesheet" href="estilo.css">
	<title>Formulario de Contacto</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>

</style>

	<script>

	</script>
</head>



<body>

<header>
<div id='encabezado'>
    <?=$encabezado?>         
        </div>

</header>

<main>
<h2 id='nombre_pest' >CONTACTO</h2>	

<form id='datos' action='contacto.php'>	

<div class='container my-4' id='caja_carga'>
  <div class='row justify-content-center'>
  <span class='fs-4 my-4 mx-4'>FORMULARIO DE CONTACTO<br></span>			
		
  <div class= 'col-md-5 '>
			<div class='row my-4 mx-4'> 	
				<label for= 'nombre' class= 'col-2 col-form-label'>Nombre</label>
				<input type= 'text' class= 'form-control col-8 col-control' placeholder='Escribe tu nombre' id='nombre' name='nombre'>
			</div>
			
			<div class= ' row my-4 mx-4'> 	
					<label for='email' class= 'col-2 col-form-label' >Email</label>
					<input type='email' class= 'form-control col-6 col-control' placeholder='Ingrese email valido' id='email' name='email'>
				</div>
	</div>

		<div  class='col-md-5'>

			<div class= 'row my-4 mx-4'> 	
				<label for= 'apellido' class= 'col-2 col-form-label'>Apellido</label>
				<input type= 'text' class= 'form-control col-8 col-control' placeholder='Ingrese su apellido' id='apellido' name='apellido'>
			</div>
		
			<div class='row my-4 mx-4'> 	
				<label for= 'telefono' class= 'col-2 col-form-label'>Telefono</label>
				<input type='text'  class= 'form-control col-6 col-control' placeholder='Ingrese su telefono' id='telefono' name='telefono'>
			</div>
		</div>
	</div>
	<div  class='col-md-8'>
		<div class='row mx-4 my-4 justify-content-center'> 
		
				<label id= 'consulta' class= ''>Ingrese su Consulta</label>	
				<textarea class='' name= 'consulta' rows= '5' maxlength= '300' ></textarea>
				
		</div>

	
	<div class='row  justify-content-end'> 	
				<button class='col-md-3'type= 'submit' id='guardar' onclick='validar();'>GUARDAR</button>
			</div>
	</div>
</form>
</main>

	<br>
	<script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<footer>
    <?=$pie?>
</footer>
</body>
</html>
