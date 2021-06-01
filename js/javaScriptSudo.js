
estDatos = 0;
function mostrar(objeto){
	if(estDatos == 0){
		document.getElementById(objeto).style.display = 'flex';
		estDatos++;
		console.log(objeto);
        
	} else {
		document.getElementById(objeto).style.display = 'none';
		estDatos = 0;
		console.log(objeto);
	}
	
}
/*----------------------------------------- parte del inventario-----------------------------------------*/
function nuevoProducto(){
    container = "<form method='POST' action= 'control/libroControl.php?accion=nuevo' enctype='multipart/form-data'>" 
                    + "<input type='file' class='nuevoPro' name='imagen'>"
                    + "<input type='text' class='nuevoPro' name='nombre' placeholder='nombre'>"
                    + "<input type='text' class='nuevoPro' name='autor' placeholder='autor'>"
                    + "<input type='text' class='nuevoPro' name='editorial' placeholder='editorial'>"
                    + "<input type='text' class='nuevoPro' name='cantidad' placeholder='existencias'>"
                    + "<input type='text' class='nuevoPro' name='precio' placeholder='precio'>"
                    + "<input type='text' class='nuevoPro' name= 'categoria' placeholder='numero Categoria'>"
                    + "<input type='text' class='nuevoPro' name='subCategoria' placeholder='numero subcategoria'>"
                    + "<input type='text' class='nuevoPro' name='estado' placeholder='numero Estado'>"
                    + "<button type='submit' class='botonBase'> agregar </button>"
              + "</form>";
    document.getElementById("derInv").innerHTML = container;
}

function modificarProducto(){
    container = "<form method='POST' action= 'control/libroControl.php?accion=modificar' enctype='multipart/form-data'>" 
                     + "<input type='file' class='nuevoPro' name='imagen'>"
                     + "<input type='text' class='nuevoPro' name='id' placeholder='fila a modificar'>"
                     + "<input type='text' class='nuevoPro' name='columna' placeholder='columna a modificar'>"
                     + "<input type='text' class='nuevoPro' name='valor' placeholder='Valor nuevo'>"
                     + "<button type='submit' class='botonBase'> Actualizar </button>"
              + "</form>";
document.getElementById("derInv").innerHTML = container;
}

function eliminarProducto(){
    container = "<form method='POST' action= 'control/libroControl.php?accion=eliminar' enctype='multipart/form-data'>" 
                     + "<input type='text' class='nuevoPro' name='fila' placeholder='fila a eliminar'>"
                     + "<button type='submit' class='botonBase'> eliminar </button>"
              + "</form>";
    document.getElementById("derInv").innerHTML = container;
}

/*------------------------------------------- parte de la categoria -------------------------------*/

function nuevaCat(){
    container = "<form method='POST' action= '#'>" 
                     + "<input type='text' class='nuevoPro' name='nuevaCat' placeholder='Agregar Categoria'>"
                     + "<button type='submit' class='botonBase'> agregar </button>"
              + "</form>";
    document.getElementById("venCat").innerHTML = container;
}

function actualizarCat(){
    container = "<form method='POST' action= '#'>" 
                     + "<input type='text' class='nuevoPro' name='actualizarCat' placeholder='Actualizar Categoria'>"
                     + "<button type='submit' class='botonBase'> actualizar </button>"
              + "</form>";
    document.getElementById("venCat").innerHTML = container;
}

function eliminarCat(){
    container = "<form method='POST' action= '#'>" 
                     + "<input type='text' class='nuevoPro' name='eliminarCat' placeholder='eliminar Categoria'>"
                     + "<button type='submit' class='botonBase'> eliminar </button>"
              + "</form>";
    document.getElementById("venCat").innerHTML = container;
}

/*-------------------------------------------parte de la subcategoria-----------------------------------*/

function nuevaSub(){
    container = "<form method='POST' action= '#'>" 
                     + "<input type='text' class='nuevoPro' name='nuevaSub' placeholder='Agregar subCategoria'>"
                     + "<button type='submit' class='botonBase'> agregar </button>"
              + "</form>";
    document.getElementById("venSub").innerHTML = container;
}

function actualizarSub(){
    container = "<form method='POST' action= '#'>" 
                     + "<input type='text' class='nuevoPro' name='actualizarSub' placeholder='Actualizar subCategoria'>"
                     + "<button type='submit' class='botonBase'> actualizar </button>"
              + "</form>";
    document.getElementById("venSub").innerHTML = container;
}

function eliminarSub(){
    container = "<form method='POST' action= '#'>" 
                     + "<input type='text' class='nuevoPro' name='eliminarSub' placeholder='eliminar subCategoria'>"
                     + "<button type='submit' class='botonBase'> eliminar </button>"
              + "</form>";
    document.getElementById("venSub").innerHTML = container;
}

/*----------------------------------------------parte usuario--------------------------------------------------*/

function nuevoUsu(){
    container = "<form method='POST' action= '#'>" 
                     + "<input type='text' class='nuevoPro' name='usuNuevo' placeholder='Usuario nuevo'>"
                     + "<button type='submit' class='botonBase'> agregar </button>"
              + "</form>";
    document.getElementById("venCom").innerHTML = container;
}

function actualizarUsu(){
    container = "<form method='POST' action= '#'>" 
                     + "<input type='text' class='nuevoPro' name='actualizarUsu' placeholder='Actualizar Usuario'>"
                     + "<button type='submit' class='botonBase'> actualizar </button>"
              + "</form>";
    document.getElementById("venCom").innerHTML = container;
}

function eliminarUsu(){
    container = "<form method='POST' action= '#'>" 
                     + "<input type='text' class='nuevoPro' name='eliminarUsu' placeholder='eliminar usuario'>"
                     + "<button type='submit' class='botonBase'> eliminar </button>"
              + "</form>";
    document.getElementById("venCom").innerHTML = container;
}