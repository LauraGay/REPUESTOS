<!doctype html>
<html lang="es">

<?php
include("encabezado.php");
include("pie.php");
?>
<head>

<title>REPUESTOS</title>
<script src='funcion.js'></script>
<link rel="stylesheet" href="estilo.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<style>
      
</style>
</head>
<body id="cuerpo">
        
        <header>
        <div id='encabezado'>
    <?=$encabezado?>
       
 </div> 

     </header>
        <main>
        <h2 id='nombre_pest' >INICIO</h2>	
    <div class='container'>
            <div  class='botones '  id="menu_botones">        
                    <a href= 'repuestos.php#menu_arranque'><img src="imagenes/arranque.png"  class="mx-2" alt=""></a>
                    
            </div>
            <div  class='botones '  id="menu_botones"> 
                    <a href= 'repuestos.php#menu_embrague'><img src="imagenes/embrague.png"  class="mx-2" alt=""></a>
  
                    </div>
            <div  class='botones '  id="menu_botones"> 
                  <a  href= 'repuestos.php#menu_frenos'><img src="imagenes/frenos.png"class="mx-2" alt=""></a>
        
                  </div>
            <div  class='botones '  id="menu_botones"> 
                  <a href= 'repuestos.php#menu_motor'><img src="imagenes/motor.png" class="mx-2" alt=""></a>
              
                  </div>
            <div  class='botones '  id="menu_botones">            
                  <a  href= 'repuestos.php#menu_suspencion'><img src="imagenes/suspencion.png" class="mx-2" alt=""></a>
                    
            </div> 
           
    
            <div class='imagen' id="imagen">
                <h3 class="">TODO PARA SU VEHICULO</h3>
                <img style="border-color: rgb(6, 87, 141);
                border-width: 8px; border-style:groove" src="imagenes/auto_repuesto.png" class="">  
            </div> 
    
            <div class='texto' id="nosotros">
                <h4>SOBRE NOSOTROS</h4>
<p class=''>Somos una distribuidora de repuestos con mas de 30 años en el mercado, dando la mejor calidad en productos y el mejor asesoramiento a nuestros clientes, nos hemos ganado el primer lugar dentro de las preferencias de los consumidores</p>
            </div>

     <div class='iframe' id="ubicacion">
            <h4>DONDE ESTAMOS</h4>
            <iframe id="ubicacion"
    title="Nuestra ubicacion"
    width="300"
    height="200"
    src="https://www.openstreetmap.org/export/embed.html?bbox=-0.004017949104309083%2C51.47612752641776%2C0.00030577182769775396%2C51.478569861898606&layer=mapnik">
</iframe>
     </div>
        </main>

        <footer>
    <?=$pie?>
</footer>
         </body>

</html>