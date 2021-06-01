<!DOCTYPE html>
<html>
    <head>
        <title> busqueda </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilos_buscar.css">
    </head>
    <body>
        <!-- contenedor de todos los nav de la paguina-->
        <div id="contNav">
            <!-- primer nav de mi paguina-->
        	<div id="priNav">
        		<ul>
        			<a href=""><li id="priLi">Lojas</li></a>
        			<a href=""><li> | </li></a>
        			<a href=""><li> Atendimento e Televendas </li></a>
        			<a href=""><li> | </li></a>
        			<a href=""><li> Vendas corporativas </li></a>
        		</ul>
        	</div>
            <!-- Segundo nav de mi paguina-->
        	<div id="segNav">
        		<div id="logo">
        			<p id="logoLetra"> livraria cultura </p>
        		</div>	
        		<div id="buscador">
                    <button id="todoSite">TODO O SITE</button>
                    <form method="post" action="control/usuarioControl.php?accion=buscar">
        			<input id="inputBuscar" type="text" name="buscador" placeholder="libro a buscar">
        			<button type="submit" id="botonLupa"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT2fypWaqLoE3WWdVVfo-XOx3h0Z0gXEAx7-vHphKQNQP-v1zB5&usqp=CAU" width="100%" alt="lupa"></button>
                </form>
        		</div>	
        		<div id="usuario">
        			<img src="img/usuario.png" width="30%" alt="usuario">
        			<span id="letraOla">
                    Oi, bem vindo 
                    <a href="registro.php"> registrate </a>
                    </span>
        			
        		</div>	
        		<div id="pedidos">
        			<img src="" width="70%" alt="carrito_compras">
        		</div>	
                
        	</div>         
        </div>
        <!-------------------------------aca va la parte principal de la paguina--------------->
        <div id='principal'>
            <?php           

            ?>

        </div>
        
        <footer>
            <div id="redSocial">
                <div id="letrasRed">
                    CADESTRE SEU E-MAIL E GANHE UM CUPOM PARA SUA PRIMEIRA COMPRA
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
                        <a href=""><img src="https://image.flaticon.com/icons/svg/1312/1312139.svg" alt="facebook" class="icono" ></a>
                    </div>
                    <div>
                        <a href=""><img src="https://image.flaticon.com/icons/svg/185/185961.svg" alt="twiter" class="icono"></a>
                    </div> 
                    <div>
                        <a href=""><img src="https://www.flaticon.es/premium-icon/icons/svg/2392/2392487.svg" alt="instagram" class="icono"></a>
                    </div>  
                    <div>
                        <a href=""><img src="https://image.flaticon.com/icons/svg/1409/1409936.svg" alt="youtube" class="icono"></a>
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
                    <a href="" ><h4>Quem Somos</h4> </a><br>
                    <a href=""><p class="estiloA">Trabalhe conosco</p></a><br>
                    <a href=""><p class="estiloA">Localizacao de lojas</p></a><br>
                    <a href=""><p class="estiloA">Teatro Eva Herz</p></a><br>
                    <a href=""><p class="estiloA">Vale Presente</p></a><br>
                    <a href=""><p class="estiloA">Recuperacao Judicial</p></a><br>
                </div> 
                <div  class="cuadrosPagamento">
                    <a href=""><h4>Entre em Contacto</h4></a><br>
                    <a href=""><p class="estiloA">Politica de entrega y devolucao</p></a><br>
                    <a href=""><p class="estiloA"> Politica de vendas</p></a><br>
                    <a href=""><p class="estiloA">Perguntas e respostas</p></a><br>
                    <a href=""><p class="estiloA">Atendimiento Kobo</p></a><br>
                </div>  
                <div  class="cuadrosPagamento">
                    <a href=""><h4>Mais leítores</h4></a><br>
                    <a href=""><p class="estiloA">Espalhe cultura</p></a><br>
                    <a href=""><p class="estiloA">Mais cultura</p></a><br>
                    <a href=""><p class="estiloA">Cultura itaucard</p></a><br>
                    <a href=""><p class="estiloA">Latam pass</p></a><br>
                    <a href=""><p class="estiloA">Solicitacao de evento</p></a><br>
                </div> 
                <div id="pagos">
                    <h4> FORMAS DE PAGAMENTO </h1>
                    <div id="pagoTargeta">
                        <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/visa.png?v=636991622524900000" alt="visa"></a>
                        <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/master.png?v=636991622505470000" alt="MasterCard"></a>
                        <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/american.png?v=636991622435270000" alt="American Express"></a>
                        <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/elo.png?v=636991622475730000" alt="Elo"></a>
                        <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/hiper.png?v=636991622495200000" alt="HiperCard"></a>
                        <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/pay.png?v=636991622515770000" alt="PayPall"></a>
                        <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/diners.png?v=636991622465430000" alt="Dinners"></a>
                        <a href=""><img src="https://www3.livrariacultura.com.br/arquivos/boleto.png?v=636991622455130000" alt="boleto"></a>
                    </div>    
                    <div id="bancosAcei">
                        <a href=""><img src="https://livrariacultura.vteximg.com.br/arquivos/bancos-paymee-footer.png?v=637073723029000000" alt="visa" width="100%" height="100%"></a>
                    </div>
                        <h4>  CERTIFICADOS  </h4>
                    <div>
                       
                    </div>
                </div>   
            </div> 
            <h5>
                Livraria Cultura, todos os direitos reservados. Copyrights 2020 <br>
                <br>Livraria Cultura S/A | Av. Paulista, 2300, 10° andar, São Paulo - SP - Brasil CEP 013110-300 | CNPJ 62.410.352/0001-72 | IE 111.133.781.116 | PABX 11 3056-4300<br>
                <br>Os preços, condições de pagamento e valores de frete são válidos exclusivamente para as compras efetuadas em nosso site, não valendo, necessariamente, para as nossas lojas físicas.

            </h5> 
        </footer>  
        <script type="text/javascript" src="js/javascriptperfil.js"></script>    
        </body>
    </html>       
