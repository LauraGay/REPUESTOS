
<!doctype html>
<html lang="en">
<head>
    
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<style>

.contenedor {
    width: 100vw;
     overflow: hidden;
     
   }
   
   #autito {
   height: auto;
     animation: desplazar 40s linear infinite;
     box-shadow:none;
   }
   @keyframes desplazar {
    
     0% {
       transform: translateX(0);
     }
     100% {
       transform: translateX(1800px);
     }
   }
</style>
</head>
<?php

    $encabezado=
        " 
        <div class='text-center' id='encabezado'>
        <img src='imagenes/titulo.png' style='box-shadow:none' class='img-fluid w-70%'>  
    </div> 
    <div>
        <div class='contenedor' style='width:100%'>
        <img id='autito' src='imagenes/auto.png'></img>
        </div>
    <div class= 'container-fluid navbar-light fs-4' id='nom_pest'>

    <nav class= 'navbar navbar-expand-lg  container'> 
        <a class= 'navbar-brand' href= 'index.php'><b>INICIO</b></a>
   
     <button class= 'navbar-toggler' type= 'button' data-bs-toggle= 'collapse' data-bs-target= '#navbarSupportedContent' aria-controls= 'navbarSupportedContent' aria-expanded= 'false' aria-label= 'Toggle navigation'>
        <span class= 'navbar-toggler-icon'></span>
    </button>
    
        <div class= 'collapse navbar-collapse' id= 'navbarSupportedContent'>
            <ul class= 'navbar-nav ml-auto'>   
    <li class= 'nav-item'>
    <a class='nav-link'  href= 'repuestos.php'>REPUESTOS</a>
</li>
<li class= 'nav-item'>
<a class='nav-link'  href= 'presupuesto.php'>SIMULADOR DE PRESUPUESTO</a>
</li>
    <li class= 'nav-item'>
            <a class='nav-link'  href= 'contacto.php'>CONTACTO</a>
    </li>
           </ul>
        </div>
    </nav>
   </div>";

   
    ?>
   </html>
   
