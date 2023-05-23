function listado() {
    var errores=0;
    
        if (errores==0) {
            document.getElementById("filtro").method = "post";
            document.getElementById("filtro").action = "promociones.php";
            document.getElementById("filtro").submit(); 
            
            return true;
        } else {
            return false;
        }
    }
		
    function validar() {
        var f = document.getElementById("datos");			
        nomb = document.getElementById("nombre").value;
        apell = document.getElementById("apellido").value;
        email = document.getElementById("email").value;
        tel = document.getElementById("telefono").value;
        consulta = document.getElementById("consulta").value;
      
        if (apell.trim() == "" || nomb.trim() == "" || consulta.trim() == "" || email.trim() == "" || tel.trim() == "") {
         
          alert("Hay campos sin completar.");
       
      } else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email)) {
          alert("La dirección de email es incorrecta.");
       
      } else {
          alert("SU CONSULTA FUE ENVIADA CORRECTAMENTE");
        }
      }
      
              
          window.onload = function() {
                      butS.addEventListener("click",validar);			
          
                  }
      
function addItem() {
    const itemList = document.getElementById('item-list');
    const totalAmount = document.getElementById('total-amount');
    
    const selectedItem = selectItem.options[selectItem.selectedIndex];
    if (selectedItem.value == 0) return;
    
    const item = document.createElement('li');
    item.textContent = selectedItem.textContent;
    itemList.appendChild(item);
    
    const price = parseFloat(selectedItem.value);
    totalAmount.textContent = `$ ${parseFloat(totalAmount.textContent.slice(1)) + price}`;
  }
  