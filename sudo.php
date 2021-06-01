<!DOCTYPE html>
<html>
    <head>  
        <style>
            #card{
                width: 100%;
                height: 100%;
                float: left;
            }
            #imagenLibro{
                width : 50%;
                height: 30%;
                margin-left: 25%;
                padding: 2%;
                float: left;
            }
            .dat{
                width: 90%;
                height: 10%;
                margin-top: 1.8%;
                margin-left: 5%;
                text-align: center;
                float: left;
            }
            .tab{
                color :black;
            }
        </style>  
        <title>Administrador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="files/logo.png">
        <link rel="stylesheet" type="text/css" href="css/estilosSudo.css">
    </head>
    <body>
        <!-- contenedor de todos los nav de la paguina-->
        <div id="contNav">
            <!-- primer nav de mi paguina-->
        	<div id="priNav">
        		<ul>
        			<a href=""><li id="priLi">Tienda</li></a>
        			<a href=""><li> | </li></a>
        			<a href=""><li> Entrega a domicilio </li></a>
        			<a href=""><li> | </li></a>
        			<a href=""><li> Ventas corporativas </li></a>
        		</ul>
        	</div>
            <!-- Segundo nav de mi paguina-->
        	<div id="segNav">
        		<div id="logo">
                    <img src="files/logo.png" id="logoIma" alt="logo" >
        			<p id="logoLetra"> Book Plus </p>
        		</div>	
        		<div id="buscador">
                    <form method="post" id="formBuscador" action="control/libroControl.php?accion=inventario">
        			<button id="todoSite">TODO EL SITIO</button>
        			<input id="inputBuscar" type="text" name="dato" placeholder="libro a buscar">
        			<button id="botonLupa"><img src="files/lupa.png" width="100%" alt="lupa"></button>
                </form>
        		</div>	
        		<div id="usuario">
        			<img src="files/icono_usuario.png" width="30%" alt="usuario">
        			<span id="letraOla">
                        <script>
                            nombre = sessionStorage.getItem('usuario');
                            document.getElementById("letraOla").innerHTML = "hola, bienvenido" + "<br>" + nombre;
                        </script>   
                    </span>
        			
        		</div>	
        		<div id="pedidos">
        			<img src="files/compras.png" width="70%" id="compraCarro"alt="carrito_compras">
        		</div>	
                <form method="POST" action="control/usuarioControl.php?accion=cerrar">
                    <button id="cerrarSes">salir</button>
                </form>
        	</div>
            <!-- tercer nav de mi paguina-->
        	<div id="terNav">
        		<div id="compreCat" class="iconosNav">
                    <ul>
                    	<button class="botnavUsuario" onclick="mostrar('formDatosusu');"><li>Actualizar Datos</li></button>
                    </ul>   
        		</div>
                <!-- esta son los subOpciones de compre por categoria que se encuentra en ele tercer nav-->
                <div id="formDatosusu">
                    <form method="POST" action="#" id="datosForm">
                        <div name="foto" id="fotoAct"></div>
                        <input name="nombre" class="inputDatusu" placeholder="nombre">
                        <input name="apellido" class="inputDatusu" placeholder="apellido">
                        <input name="genero" class="inputDatusu" placeholder="genero">
                        <input name="cumpleaños" class="inputDatusu" placeholder="cumpleaños">
                        <button type="submit" class="inputDatusu">Actualizar</button>
                    </form>
                </div>    
                <!-- Explore Cultura-->
        		<div id="ExploreCul" class="iconosNav" >
        			<ul>
        				<!-- datos a futuro del nav-->
        			</ul>
        		</div>
                <!-- Estos son las sunOpciones de Explore Cultura-->
                <!--cultura indica lista-->
        		<div id="culturaLis" class="iconosNav">
        			<ul>
        				<!-- datos a futuro del nav-->
        			</ul>
        		</div>
                <!-- Central de ofertas-->
        		<div id="centralOfer" class="iconosNav">
        			<ul>
        				<!-- datos a futuro del nav-->
        			</ul>
        		</div>
                <!--Eventos-->
        		<div id="eventos" class="iconosNav">
        			<ul>
        				<!-- datos a futuro del nav-->
        			</ul>
        		</div>	
        	</div>           
        </div>
        <!--            aca va la parte principal de la paguina--------------->
        <div id="principal">
            <div id="tipoBusqueda">
                <form method="POST" action="control/libroControl.php?accion=esp">
                    <input class= "inpBus" name = 'colum' placeholder="columna">
                    <input class= "inpBus" name = 'pri' placeholder="primer valor">
                    <input class= "inpBus" name = 'seg'placeholder="segundo Valor">
                    <button class= "botonCsu"> buscar </button>
                </form>
            </div>    
            <div id="inventario">
                <aside id="izqInv">
                <table>
                    <tr>
                        <th> imagen </th>
                        <th> idLibro </th>
                        <th> nombre </th>
                        <th> autor </th>
                        <th> editorial </th>
                        <th> existencias </th>
                        <th> precio </th>
                        <th> idCategoria </th>
                        <th> idSubcategoria </th>
                        <th> idEstado </th>
                    </tr>
                    <script type="text/javascript">
                        img = localStorage.getItem('Eimg0');
                        console.log(img);

                        cImg = document.createElement('th');
                        Timg = document.createTextNode(img);
                        cImg.appendChild(Timg);
                        posicion = document.getElementById('izqInv');
                        posicion.appendChild(cImg);

                        cImg.setAttribute("class", "tab");

                        
                    </script>
                </Table>
                
                </aside>  
                <aside id="derInv">
                <script>    
                    idLibro = localStorage.getItem('id');                                                      
                    imag =  localStorage.getItem('imagen');
                    nomb = localStorage.getItem('nombre');
                    aut = localStorage.getItem('autor');
                    edit = localStorage.getItem('edit');
                    existencia = localStorage.getItem('exit');
                    prec = localStorage.getItem('prec');
                    cat = localStorage.getItem('idCat');
                    suCat = localStorage.getItem('idSub');
                    idEstado = localStorage.getItem('idEst');
                                   
                    card = document.createElement('div');

                    img = document.createElement("img");
                    // label y contenido del la inf del id
                    labId = document.createElement('label');
                    cLabelImg = document.createTextNode("idLibro = ");
                    labId.appendChild(cLabelImg); // valor del label id
                    idL= document.createElement('div');
                    numId = document.createTextNode(idLibro);
                    idL.appendChild(labId);
                    idL.appendChild(numId);
                    //  label y contenido del nombre
                    labNo = document.createElement('label');
                    cLabelNo = document.createTextNode("nombre = ");
                    labNo.appendChild(cLabelNo); // valor del label nombre
                    nomLibro = document.createElement("div");
                    contnom = document.createTextNode(nomb);
                    nomLibro.appendChild(labNo);
                    nomLibro.appendChild(contnom);
                    // label y contenido del autor
                    labAut = document.createElement('label');
                    cLabelAut = document.createTextNode("autor = ");
                    labAut.appendChild(cLabelAut); // valor del label autor
                    nomAut = document.createElement("div");
                    contAut = document.createTextNode(aut);
                    nomAut.appendChild(labAut);
                    nomAut.appendChild(contAut);
                    // label y contenido de la editorial
                    labedi = document.createElement('label');
                    cLabeledi = document.createTextNode("editorial = ");
                    labedi.appendChild(cLabeledi); // valor del label editorial
                    nomEdi = document.createElement("div");
                    contEdi = document.createTextNode(edit);
                    nomEdi.appendChild(labedi);
                    nomEdi.appendChild(contEdi);
                    // label y contenido de existencias
                    labexi = document.createElement('label');
                    cLabelexi = document.createTextNode("existencias = ");
                    labexi.appendChild(cLabelexi); // valor del label existencias
                    exis = document.createElement("div");
                    contExis = document.createTextNode(existencia);
                    exis.appendChild(labexi);
                    exis.appendChild(contExis);
                    // label y contenido de precio
                    labpre = document.createElement('label');
                    cLabelpre = document.createTextNode("precio = ");
                    labpre.appendChild(cLabelpre); // valor del label precio
                    precio = document.createElement("div");
                    valor = document.createTextNode(prec);
                    precio.appendChild(labpre);
                    precio.appendChild(valor);
                    // label y contenido idCategoria
                    labcat = document.createElement('label');
                    cLabelcat = document.createTextNode("idCategoria = ");
                    labcat.appendChild(cLabelcat); // valor del label categoria
                    categoria = document.createElement("div");
                    catValor = document.createTextNode(cat);
                    categoria.appendChild(labcat);
                    categoria.appendChild(catValor);
                    // label y contenido idsubCategoria
                    labScat = document.createElement('label');
                    cLabelScat = document.createTextNode("idSubcategoria = ");
                    labScat.appendChild(cLabelScat); // valor del label subcategoria
                    subCat = document.createElement("div");
                    subCatValor = document.createTextNode(suCat);
                    subCat.appendChild(labScat);
                    subCat.appendChild(subCatValor);
                    // label y contenido estado
                    labest = document.createElement('label');
                    cLabelest = document.createTextNode("idEstado = ");
                    labest.appendChild(cLabelest); // valor del label estado
                    estado = document.createElement("div");
                    estadoValor = document.createTextNode(idEstado);
                    estado.appendChild(labest);
                    estado.appendChild(estadoValor);
                    // colocamos cada uno de los elemento en la card
                    card.appendChild(img);
                    card.appendChild(idL);
                    card.appendChild(nomLibro);
                    card.appendChild(nomAut);
                    card.appendChild(nomEdi);
                    card.appendChild(exis);
                    card.appendChild(precio);
                    card.appendChild(categoria);
                    card.appendChild(subCat);
                    card.appendChild(estado);
                    // posicionamos la card
                    
                    // atributos del contenedor de mi card
                    card.setAttribute("id","conLibro");
                    img.setAttribute("id","imagenLibro");
                    img.setAttribute("src",imag);
                    img.setAttribute("alt","libro");
                    idL.setAttribute('class',"dat");
                    nomLibro.setAttribute("class","dat");
                    nomAut.setAttribute("class","dat");
                    nomEdi.setAttribute("class","dat");
                    exis.setAttribute("class","dat");
                    precio.setAttribute("class","dat");
                    categoria.setAttribute("class","dat");
                    subCat.setAttribute("class","dat");
                    estado.setAttribute("class","dat");

                    document.getElementById("derInv").appendChild(card);                              
                           
                </script>               
                </aside>    
                <div id="botLibro">
                    <div id="datosDer">                 
                        <button class="opcLibros2" onclick="nuevoProducto();"> agregar </button>
                        <button class="opcLibros2" onclick= "modificarProducto();"> modificar </button>
                        <button class="opcLibros2" onclick="eliminarProducto();"> Eliminar </button>
                    </div>
                </div>     
            </div>
            <div id="usuCatsub">
                <div id="categorias" class="otros">
                    <div id="venCat">
                    </div>  
                    <div class="botCatUsuCom">
                        <button class="botonCsu" onclick="mostrarCat();"> mostrar  </button>
                        <button class="botonCsu" onclick="nuevaCat();">  agregar </button>
                        <button class="botonCsu" onclick="actualizarCat();"> Actualizar </button>
                        <button class="botonCsu" onclick="eliminarCat();">  eliminar </button>
                    </div>      
                </div>   
                <div id="subCategoria" class="otros">
                    <div id="venSub">
                    </div> 
                    <div class="botCatUsuCom">
                        <button class="botonCsu" onclick="mostrarSub();"> mostrar  </button>
                        <button class="botonCsu" onclick="nuevaSub();">  agregar </button>
                        <button class="botonCsu" onclick="actualizarSub();"> Actualizar </button>
                        <button class="botonCsu" onclick="eliminarSub();">  eliminar </button>
                    </div>   
                </div>   
                <div id="comprador" class="otros">
                    <div id="venCom">
                    </div> 
                    <div class="botCatUsuCom">
                        <button class="botonCsu" onclick="mostrarUsu();"> mostrar  </button>
                        <button class="botonCsu" onclick="nuevoUsu();">  agregar </button>
                        <button class="botonCsu" onclick="actualizarUsu();"> Actualizar </button>
                        <button class="botonCsu" onclick="eliminarUsu();">  eliminar </button>
                    </div>   
                </div>     
            </div>
        </div> 
       <footer>
           <div id="redSocial">
               <div id="letrasRed">
                   ESCRIBA SU E-MAIL Y GANE UN CUPÓN PARA SU PRIMERA COMPRA
               </div>
               <form  id="emailRed">
                   <input id="digEmail">
                   <button id="botCorreo" type="submit">enviar</button>
               </form>
               <div id="letraRed">
                   REDES SOCIALES
               </div>
               <div id="iconosRed">
                   <div>
                       <a href=""><img src="files/facebook.png" alt="facebook" class="icono" ></a>
                   </div>
                   <div>
                       <a href=""><img src="files/twiter.png" alt="twiter" class="icono"></a>
                   </div> 
                   <div>
                       <a href=""><img src="files/instagram.png" alt="instagram" class="icono"></a>
                   </div>  
                   <div>
                       <a href=""><img src="files/youtube.png" alt="youtube" class="icono"></a>
                   </div> 
                   <div>
                       <a href=""><img src="https://image.flaticon.com/icons/svg/2807/2807138.svg" class="icono" alt="inicio"></a>
                   </div>
               </div>
           </div>  
           <div id="pagamenServicio">
               <div  class="cuadrosPagamento">
                   
               </div>
               <div class="cuadrosPagamento">
                   <a href="" ><h4>Quienes Somos</h4> </a><br>
                   <a href=""><p class="estiloA">Trabaje con nosotos </p></a><br>
                   <a href=""><p class="estiloA">Nuestras tiendas</p></a><br>
               </div> 
               <div  class="cuadrosPagamento">
                   <a href=""><h4>Contactanos</h4></a><br>
                   <a href=""><p class="estiloA">Politicas de devolución </p></a><br>
                   <a href=""><p class="estiloA"> Politica de ventas</p></a><br>
                  
               </div>  
               <div  class="cuadrosPagamento">
                   <a href=""><h4>Más lecturas</h4></a><br>
                   <a href=""><p class="estiloA">Biblioteca</p></a><br>
               </div> 
               <div id="pagos">
                   <h4> FORMAS DE PAGO </h1>
                   <div id="pagoTargeta">
                       <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/visa.png?v=636991622524900000" alt="visa"></a>
                       <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/master.png?v=636991622505470000" alt="MasterCard"></a>
                       <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/american.png?v=636991622435270000" alt="American Express"></a>
                       <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/pay.png?v=636991622515770000" alt="PayPall"></a>
                       <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/diners.png?v=636991622465430000" alt="Dinners"></a>
                       
                   </div>           
           </div> 
           <div id="derechos">
           <h5>
               Libreria BOOK PLUS, todos los derechos reservados.© COPYRIGHT 2020 Bogotá <br>
               Realizada por <a href="https://github.com/dianaximenacm/Libreria" target="_blank">Grupo Fullstack</a> para 
               <a href="https://www.bictia.com" target="_blank"> Bictia Institute of technology</a>.
           </h5>  
           </div> 
        <script src="js/javaScriptSudo.js"> </script>             
       </footer>  
       </html>