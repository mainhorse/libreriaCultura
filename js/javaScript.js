
function ver(dato){
}

function mostrar(posicion){
	var dato = posicion;
	document.getElementById(posicion).style.display = "block";
}

function esconder(posicion){
	var dato = posicion;
	document.getElementById(posicion).style.display = "none";
}

/* ---------------- esta funcion es la que cambia las imagenes en el carrusel---------------*/

var carruPos = 0;

function trocarPantalla(){
	var carru = ["img/carrusel_1.png","img/carrusel_2.png","img/carrusel_3.png",
	               "img/carrusel_4.png","img/carrusel_5.png"];	

    if(carruPos < carru.length){
	document.getElementById("carrusel").style.backgroundImage = 'url("'+ carru[carruPos] +'")';
	carruPos++;
    } if (carruPos == carru.length) {
    	carruPos = 0;
    }
}             

setInterval(trocarPantalla, 5000);

/*----------------------- loading de la barra izquierda de publicidad-----------------------*/

var llena = 10;
function llenar(){
	
	if(llena <= 100){
	let cambiar = llena + "%";

    document.getElementById("subizqPubliuno").style.width = cambiar ;
    llena += 5;
    } else{
    	llena = 0;
    }
}

setInterval(llenar,100);

/*-------------------------------------------usemos DOM para colocar los libros-------------------*/


class libros{
	constructor(image,title,author,type,price){
    	this.image = image;
    	this.title = title;
    	this.author =  author;
    	this.type = type;
    	this.price = price;
	}
}	
liv_nov = [['https://livrariacultura.vteximg.com.br/arquivos/ids/16548370-300-300/2112256622.jpg?v=637205778671900000',"Aprendendo a vicer","Luis Boudakia","Livros","R$39,90"],
          ['./img/florestaEncantada.jpg',"Floresta encantada","Online Editorial","Livro","R$17,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16548349-300-300/2112256608.jpg?v=637205778548130000',"Cartas de MANÚ","Monica Palacios","Livro","R$35,00"],
          ['./img/A_viagem_De_Cilka.jpg',"A viagem De Cilka","Heather Morris","Livro","R$49,90"],
          ["./img/A_viagem_De_Cilka.jpg","A viagem De Cilka","A viagem De Cilka","Heather Morris","Livro","R$49,90"]];

ebo_nov = [['./img/tercerizacao.jpg',"A Tercerizacao E seus Detalhe","Valter Fernandez","eBook","R$20.00"],
          ['./img/olhar.jpg',"Em seu calido olhar","Bruno Rodriguez","eBook","R$25,00"],
          ['./img/EntreOAmorESacrificio.jpg',"Entre o Amor E O Sacrificio","Gisele de assis","eBook","R$9,33"],
          ['./img/AterraAmeacada.jpg',"01 A terra Ameacada","Luis Mergulhado","eBook","R$10,90"],
          ['./img/AterraAmeacada.jpg',"01 A terra Ameacada","Luis Mergulhado","eBook","R$10,90"]];

fil_nov = [['./img/aMontanhaDo7Atres.jpg',"A montanha dos 7 abutres","Billy Wilder","Filmes","R$39.99"],
          ['./img/laMala.jpg',"La Mala del cuento","Vinix","Filmes","R$39,99"],
          ['./img/franCapra.jpg',"Frank Capra","Frank Capra","Filmes","R$58,90"],
          ['./img/CaxaDoBruxas.jpg','Caca as Bruxas no cinema',"Keiichi Yammamoto","Filmes","R$49,99"],
          ['./img/CaxaDoBruxas.jpg','Caca as Bruxas no cinema',"Keiichi Yammamoto","Filmes","R$49,99"]];

mus_nov = [['./img/BennyGoodman.jpg',"LP Bennin Goodman","Benni Goodman","Música","R$199,99"],
          ['./img/ondasDaNoite.jpg',"Nas Ondas Da Anoite","Celsinho Silva","Música","R$22,90"],
          ['./img/maes.jpg',"Obatalá- Uma homenagem a Mae","Grup ofa","Música","R$189,90"],
          ['./img/AdemasDelTiempo.jpg','Além do Tempo',"Larissa Manoela","Música","R$19,73"],
          ['./img/AdemasDelTiempo.jpg','Além do Tempo',"Larissa Manoela","Música","R$19,73"]];


cards = 0; // esta variable se usa para decirle al programa cuantas card debe hacer
cat_opc = [];
/*-------------------------------------------------------------- creacao da parte de novedades---------------------------*/        
function novCreate(value){
	switch(value){
		case "livros":
		        document.getElementById("novedades").innerHTML = "";
                cat_opc = liv_nov;
                cards = 0;
		break;
		case "ebooks":
				document.getElementById("novedades").innerHTML = "";
				cat_opc = ebo_nov;
				cards = 0;		
		break;
		case "filmes":
				document.getElementById("novedades").innerHTML = "";
				cat_opc = fil_nov;
                cards = 0;
		break;
		case "musica":
				document.getElementById("novedades").innerHTML = "";
				cat_opc = mus_nov;
                cards = 0;
		break;
		default:
                cat_opc = liv_nov;
                cards = 0;
		break;
	}

do {

cont_card = new libros(cat_opc[cards][0],cat_opc[cards][1],cat_opc[cards][2],cat_opc[cards][3],cat_opc[cards][4]);
	cards++;
	id = "id" + cards;
card = document.createElement("div");

contImg = document.createElement("img");
img = document.createTextNode("");
contImg.appendChild(img);

conTit = document.createElement("p");
tit = document.createTextNode(cont_card.title);
conTit.appendChild(tit);

conAut = document.createElement("p");
aut = document.createTextNode(cont_card.author);
conAut.appendChild(aut);

conCat = document.createElement("p");
cat = document.createTextNode(cont_card.type);
conCat.appendChild(cat);

conPre = document.createElement("p");
pre = document.createTextNode(cont_card.price);
conPre.appendChild(pre);

botCom = document.createElement("button");
compBot = document.createTextNode("Comprar");
botCom.appendChild(compBot);

card.appendChild(contImg);
card.appendChild(conTit);
card.appendChild(conAut);
card.appendChild(conCat);
card.appendChild(conPre);
card.appendChild(botCom);

contenedor = document.getElementById("novedades");
contenedor.appendChild(card);

card.setAttribute("class","estilos");
card.setAttribute("id",id);
contImg.setAttribute("class", "cardImg");
contImg.setAttribute('src', cont_card.image);
contImg.setAttribute("alt","novidades");
contImg.setAttribute("width", "100%");
conTit.setAttribute("class","cardTexto");
conAut.setAttribute("class","cardTexto");
conCat.setAttribute("class","cardTexto");
conPre.setAttribute("class","cardTexto");
botCom.setAttribute("id","botCompra");

}
while(cards < 5);
}

setTimeout(novCreate(),100);
/*--------------------------------------------terminacao e comenco do Experencias do culturas------------------------------------*/
expEve =["https://statics.livrariacultura.net.br/assets/static/images/banners-5/2018/Exp/Set/exp-eventos.gif"]; // imagem de eventos em Experiencias do cultura
expCenofer = ["https://statics.livrariacultura.net.br/assets/static/images/banners-5/2020/experiencias/bexp-central-de-ofertas-2.gif"];
expMaiven = ["https://statics.livrariacultura.net.br/assets/static/images/banners-5/2018/Exp/Jul/exp-mais-vendidos.jpg"];
expTeat = ["https://statics.livrariacultura.net.br/assets/static/images/banners-5/2018/Exp/Set/exp-teatro.gif"];
expCul = ["https://statics.livrariacultura.net.br/assets/static/images/banners-5/2018/Exp/Jan/bexp-mais-cultura.jpg"];
expCirculo = [expEve,expCenofer,expMaiven,expTeat,expCul];
circul = 0;
do{
contExp = document.createElement("div");
img = document.createElement("img");
contExp.appendChild(img);

container = document.getElementById("expeDecultura");
container.appendChild(contExp);

contExp.setAttribute("class","estilosExp");
img.setAttribute("src",expCirculo[circul]);
img.setAttribute("alt","circulo Experiencia");
img.setAttribute("width","100%");
circul++;
}while(circul < 5);

/*--------------------------------- terminou e comenco de mais Vendidos-------------------------------------------------------------*/
liv_mais = [['https://livrariacultura.vteximg.com.br/arquivos/ids/16548370-300-300/2112256622.jpg?v=637205778671900000',"Aprendendo a vicer","Luis Boudakia","Livros","R$39,90"],
          ['./img/florestaEncantada.jpg',"Floresta encantada","Online Editorial","Livro","R$17,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16548349-300-300/2112256608.jpg?v=637205778548130000',"Cartas de MANÚ","Monica Palacios","Livro","R$35,00"],
          ['./img/A_viagem_De_Cilka.jpg',"A viagem De Cilka","Heather Morris","Livro","R$49,90"],
          ["./img/A_viagem_De_Cilka.jpg","A viagem De Cilka","A viagem De Cilka","Heather Morris","Livro","R$49,90"]];

ebo_mais = [['./img/tercerizacao.jpg',"A Tercerizacao E seus Detalhe","Valter Fernandez","eBook","R$20.00"],
          ['./img/olhar.jpg',"Em seu calido olhar","Bruno Rodriguez","eBook","R$25,00"],
          ['./img/EntreOAmorESacrificio.jpg',"Entre o Amor E O Sacrificio","Gisele de assis","eBook","R$9,33"],
          ['./img/AterraAmeacada.jpg',"01 A terra Ameacada","Luis Mergulhado","eBook","R$10,90"],
          ['./img/AterraAmeacada.jpg',"01 A terra Ameacada","Luis Mergulhado","eBook","R$10,90"]];

fil_mais = [['./img/aMontanhaDo7Atres.jpg',"A montanha dos 7 abutres","Billy Wilder","Filmes","R$39.99"],
          ['./img/laMala.jpg',"La Mala del cuento","Vinix","Filmes","R$39,99"],
          ['./img/franCapra.jpg',"Frank Capra","Frank Capra","Filmes","R$58,90"],
          ['./img/CaxaDoBruxas.jpg','Caca as Bruxas no cinema',"Keiichi Yammamoto","Filmes","R$49,99"],
          ['./img/CaxaDoBruxas.jpg','Caca as Bruxas no cinema',"Keiichi Yammamoto","Filmes","R$49,99"]];

mus_mais = [['./img/BennyGoodman.jpg',"LP Bennin Goodman","Benni Goodman","Música","R$199,99"],
          ['./img/ondasDaNoite.jpg',"Nas Ondas Da Anoite","Celsinho Silva","Música","R$22,90"],
          ['./img/maes.jpg',"Obatalá- Uma homenagem a Mae","Grup ofa","Música","R$189,90"],
          ['./img/AdemasDelTiempo.jpg','Além do Tempo',"Larissa Manoela","Música","R$19,73"],
          ['./img/AdemasDelTiempo.jpg','Além do Tempo',"Larissa Manoela","Música","R$19,73"]];
function expCreate(value){
	switch(value){
		case "livros":
		        document.getElementById("masVendidos").innerHTML = "";
                cat_opc = liv_mais;
                cards = 0;
		break;
		case "ebooks":
				document.getElementById("masVendidos").innerHTML = "";
				cat_opc = ebo_mais;
				cards = 0;		
		break;
		case "filmes":
				document.getElementById("masVendidos").innerHTML = "";
				cat_opc = fil_mais;
                cards = 0;
		break;
		case "musica":
				document.getElementById("masVendidos").innerHTML = "";
				cat_opc = mus_mais;
                cards = 0;
		break;
		default:
                cat_opc = liv_mais;
                cards = 0;
		break;
	}

do {

cont_card = new libros(cat_opc[cards][0],cat_opc[cards][1],cat_opc[cards][2],cat_opc[cards][3],cat_opc[cards][4]);
	cards++;
	id = "id" + cards;
card = document.createElement("div");

contImg = document.createElement("img");
img = document.createTextNode("");
contImg.appendChild(img);

conTit = document.createElement("p");
tit = document.createTextNode(cont_card.title);
conTit.appendChild(tit);

conAut = document.createElement("p");
aut = document.createTextNode(cont_card.author);
conAut.appendChild(aut);

conCat = document.createElement("p");
cat = document.createTextNode(cont_card.type);
conCat.appendChild(cat);

conPre = document.createElement("p");
pre = document.createTextNode(cont_card.price);
conPre.appendChild(pre);

botCom = document.createElement("button");
compBot = document.createTextNode("Comprar");
botCom.appendChild(compBot);

card.appendChild(contImg);
card.appendChild(conTit);
card.appendChild(conAut);
card.appendChild(conCat);
card.appendChild(conPre);
card.appendChild(botCom);

contenedor = document.getElementById("masVendidos");
contenedor.appendChild(card);

card.setAttribute("class","estilos");
card.setAttribute("id",id);
contImg.setAttribute("class", "cardImg");
contImg.setAttribute('src', cont_card.image);
contImg.setAttribute("alt","novidades");
contImg.setAttribute("width", "100%");
conTit.setAttribute("class","cardTexto");
conAut.setAttribute("class","cardTexto");
conCat.setAttribute("class","cardTexto");
conPre.setAttribute("class","cardTexto");
botCom.setAttribute("id","botCompra");

}while(cards < 5);
}

setTimeout(expCreate(),100);

/*---------------------------------------------------- acá empeca Mais Visitados----------------------------------------*/
liv_vis = [['https://livrariacultura.vteximg.com.br/arquivos/ids/16548370-300-300/2112256622.jpg?v=637205778671900000',"Aprendendo a vicer","Luis Boudakia","Livros","R$39,90"],
          ['./img/florestaEncantada.jpg',"Floresta encantada","Online Editorial","Livro","R$17,99"],
          ['https://livrariacultura.vteximg.com.br/arquivos/ids/16548349-300-300/2112256608.jpg?v=637205778548130000',"Cartas de MANÚ","Monica Palacios","Livro","R$35,00"],
          ['./img/A_viagem_De_Cilka.jpg',"A viagem De Cilka","Heather Morris","Livro","R$49,90"],
          ["./img/A_viagem_De_Cilka.jpg","A viagem De Cilka","A viagem De Cilka","Heather Morris","Livro","R$49,90"]];

ebo_vis = [['./img/tercerizacao.jpg',"A Tercerizacao E seus Detalhe","Valter Fernandez","eBook","R$20.00"],
          ['./img/olhar.jpg',"Em seu calido olhar","Bruno Rodriguez","eBook","R$25,00"],
          ['./img/EntreOAmorESacrificio.jpg',"Entre o Amor E O Sacrificio","Gisele de assis","eBook","R$9,33"],
          ['./img/AterraAmeacada.jpg',"01 A terra Ameacada","Luis Mergulhado","eBook","R$10,90"],
          ['./img/AterraAmeacada.jpg',"01 A terra Ameacada","Luis Mergulhado","eBook","R$10,90"]];

fil_vis = [['./img/aMontanhaDo7Atres.jpg',"A montanha dos 7 abutres","Billy Wilder","Filmes","R$39.99"],
          ['./img/laMala.jpg',"La Mala del cuento","Vinix","Filmes","R$39,99"],
          ['./img/franCapra.jpg',"Frank Capra","Frank Capra","Filmes","R$58,90"],
          ['./img/CaxaDoBruxas.jpg','Caca as Bruxas no cinema',"Keiichi Yammamoto","Filmes","R$49,99"],
          ['./img/CaxaDoBruxas.jpg','Caca as Bruxas no cinema',"Keiichi Yammamoto","Filmes","R$49,99"]];

mus_vis = [['./img/BennyGoodman.jpg',"LP Bennin Goodman","Benni Goodman","Música","R$199,99"],
          ['./img/ondasDaNoite.jpg',"Nas Ondas Da Anoite","Celsinho Silva","Música","R$22,90"],
          ['./img/maes.jpg',"Obatalá- Uma homenagem a Mae","Grup ofa","Música","R$189,90"],
          ['./img/AdemasDelTiempo.jpg','Além do Tempo',"Larissa Manoela","Música","R$19,73"],
          ['./img/AdemasDelTiempo.jpg','Além do Tempo',"Larissa Manoela","Música","R$19,73"]];
function visCreate(value){
	switch(value){
		case "livros":
		        document.getElementById("masVisitados").innerHTML = "";
                cat_opc = liv_vis;
                cards = 0;
		break;
		case "ebooks":
				document.getElementById("masVisitados").innerHTML = "";
				cat_opc = ebo_vis;
				cards = 0;		
		break;
		case "filmes":
				document.getElementById("masVisitados").innerHTML = "";
				cat_opc = fil_vis;
                cards = 0;
		break;
		case "musica":
				document.getElementById("masVisitados").innerHTML = "";
				cat_opc = mus_vis;
                cards = 0;
		break;
		default:
                cat_opc = liv_vis;
                cards = 0;
		break;
	}

do {

cont_card = new libros(cat_opc[cards][0],cat_opc[cards][1],cat_opc[cards][2],cat_opc[cards][3],cat_opc[cards][4]);
	cards++;
	id = "id" + cards;
card = document.createElement("div");

contImg = document.createElement("img");
img = document.createTextNode("");
contImg.appendChild(img);

conTit = document.createElement("p");
tit = document.createTextNode(cont_card.title);
conTit.appendChild(tit);

conAut = document.createElement("p");
aut = document.createTextNode(cont_card.author);
conAut.appendChild(aut);

conCat = document.createElement("p");
cat = document.createTextNode(cont_card.type);
conCat.appendChild(cat);

conPre = document.createElement("p");
pre = document.createTextNode(cont_card.price);
conPre.appendChild(pre);

botCom = document.createElement("button");
compBot = document.createTextNode("Comprar");
botCom.appendChild(compBot);

card.appendChild(contImg);
card.appendChild(conTit);
card.appendChild(conAut);
card.appendChild(conCat);
card.appendChild(conPre);
card.appendChild(botCom);

contenedor = document.getElementById("masVisitados");
contenedor.appendChild(card);

card.setAttribute("class","estilos");
card.setAttribute("id",id);
contImg.setAttribute("class", "cardImg");
contImg.setAttribute('src', cont_card.image);
contImg.setAttribute("alt","novidades");
contImg.setAttribute("width", "100%");
conTit.setAttribute("class","cardTexto");
conAut.setAttribute("class","cardTexto");
conCat.setAttribute("class","cardTexto");
conPre.setAttribute("class","cardTexto");
botCom.setAttribute("id","botCompra");

}while(cards < 5);
}

setTimeout(visCreate(),100);