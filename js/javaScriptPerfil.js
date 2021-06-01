
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

