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


<script>


</script>

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
        <h2 id='nombre_pest' >PRESUPUESTO</h2>	
        <form id='item-form' action= 'promociones.php' enctype="multipart/form-data" method= 'post'>
        <div class="mx-4 my-4">

            <span class="fs-4 my-4"><em><b>Haz click en cada repuesto que necesitas para armarte un presupuesto:</b></em></span>

            <div class='col-md-3'> 	
					<label for='presupuesto' class='fs-4 col-form-label' >Repuestos</label>
					<select name='presupuesto' id='select-item' class='form-select'>
                    <script>
            const selectItem = document.getElementById('select-item');
            selectItem.addEventListener('change', addItem);  
        </script> 

                  <optgroup label="Arranque">
                    <option value='125'>Eje de arranque</option>
                    <option value='238'>Motor de arranque</option>
                </optgroup>
                <optgroup label="Embrague">
                    <option value='154'>Kit embrague</option>
                    <option value='263'>Desembrague central</option>
                    <option value='100'>Cable de embrague</option>
                    </optgroup>
                <optgroup label="Motor">
                    <option value='134'>Kit motor electrico</option>
                    <option value='630'>Alternador</option>
                    </optgroup>
                <optgroup label="Suspencion">
                    <option value='840'>Amortiguadores</option>
                    <option value='60'>Rotula de suspencion</option>
                    </optgroup>
                <optgroup label="Freno">
                    <option value='117'>kit de frenos</option>
                    <option value='122'>Disco de freno</option>
                    </select>
				</div>

         </div>
         <div class="container"> 
         <div class="tab-pane" id="presupuesto" role="tabpanel" aria-labelledby="presupuesto-tab">
         
  <span class='fs-5  my-4'><strong>Articulos:</strong></span>  

  <ul id="item-list"></ul>
            </div>
       <div  class= 'form-inline d-flex mx-4'>
       <p class=' mx-4'><b>Total: U$<span id="total-amount">$ 0</span></b></p>    
            </div>
            <div class="tab-pane" id="dolar" role="tabpanel" aria-labelledby="camiones_gruas-tab">
          
        </div> 	
        </div>
        
<div class="api my-4" id="nom_pest">

<div class= 'mx-4 my-4' >Dolar Blue cotización: <span id="compra"></span><span id="totalPesos"></span></div>
<button id='guardar' onclick="traer()">Buscar cotizacion</button>


    <script>
        
        compraCont=document.querySelector('#compra')

       
        function traer(){
            fetch('https://www.dolarsi.com/api/api.php?type=valoresprincipales')
            .then(res=>res.json())
            .then(data=>{
            
                compraCont.innerHTML=`${data[1].casa.compra}`
          
            }
            
            )
        }

    </script>
        </div>
</form>
        </main>
</body>
</html>