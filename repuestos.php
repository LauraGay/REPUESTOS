<!doctype html>
<html lang="es">

<?php
include("encabezado.php");
include("pie.php");
?>
<head>

<title>LISTAS de REPUESTOS</title>
<script src='funcion.js'></script>
<link rel="stylesheet" href="estilo.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h2 id='nombre_pest' >LISTAS DE REPUESTOS</h2>	
        <h4 id='nom_pest'>Repuestos Arranque</h4>  
            <div  class='containerRep'  id="menu_arranque">  
                <div class= 'imagenRep'>
                    <img src="imagenes/eje de arranque.jpeg"  alt="">
                    <br><label class= ''>Eje de arranque U$$ 125-</label>
                </div>
                <div class= 'imagenRep'>
                    <img src="imagenes/motor arranque.jpeg"  alt="">
                    <br> <label class= ''>Motor de arranque U$$ 238-</label>
                </div>
      </div>
      <h4 id='nom_pest'>Repuestos Embrague</h4>       
            <div  class='containerRep'  id="menu_embrague">
              <div class= 'imagenRep'> 
                 <img src="imagenes/kit embrague.jpeg" alt="">
                 <br><label class= ''>Kit enmbrague U$$ 154-</label>
                </div>
              <div class= 'imagenRep'>
                  <img src="imagenes/desembrague central.jpeg"  alt="">
                  <br> <label class= ''>Desembrague central U$$ 263-</label>
            </div>
            <div class= 'imagenRep'>
                  <img src="imagenes/cable embrague.jpeg"  alt="">
                  <br> <label class= ''>Cable Embrague U$$ 100-</label>
            </div>
        </div>
        <h4 id='nom_pest'>Repuestos Freno</h4> 
        <div  class='containerRep'  id="menu_frenos">
              <div class= 'imagenRep'> 
                 <img src="imagenes/kit repuesto freno.jpeg" alt="">
                 <br> <label class= ''> Kit de Frenos U$$ 117-</label>
                </div>
              <div class= 'imagenRep'>
                  <img src="imagenes/disco de freno.jpeg"  alt="">
                  <br> <label class= ''>Disco de Freno U$$ 122-</label>
            </div>
        </div>
        <h4 id='nom_pest'>Repuestos Motor</h4> 
        <div  class='containerRep'  id="menu_motor">

              <div class= 'imagenRep'> 
                 <img src="imagenes/motor-electrico-repuestos.jpeg" alt="">
                 <br><label class= ''>Kit Motor Electrico U$$ 134-</label>
                </div>
              <div class= 'imagenRep '>
                  <img src="imagenes/alternador.jpeg"  alt="">
                  <br><label class= ''>Alternador U$$ 630-</label>
            </div>
        </div>
        <h4 id='nom_pest'>Repuestos Suspencion</h4>
        <div  class='containerRep'  id="menu_suspencion"> 
              <div class= 'imagenRep '> 
                 <img src="imagenes/amortiguadores.jpeg" alt="">
                 <br><label class= ''>Amortiguadores U$$ 840-</label>
                </div>
              <div class= 'imagenRep '>
                  <img src="imagenes/rotula de suspencion.jpeg"  alt="">
                  <br><label class= ''>Rotula de Suspencion U$$ 60-</label>
            </div>
        </div>
        
        </main>
<br><br>
<footer>
    <?=$pie?>
</footer>
         </body>

</html>