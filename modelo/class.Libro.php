<?php
// la carpeta donde esta el archivo de conexion.
require(__DIR__ . '/../config/class.Conexion.php');

class Libro {

   public function __construct(){

   }

   public function busEspecifica($campo,$valor1,$valor2){
        $db = new Conexion();
        $sql = "SELECT * FROM libros WHERE $campo BETWEEN '$valor1' AND '$valor2'";
        $result = $db->query($sql);
        $res = mysqli_fetch_all($result);
        $canDatos = $result->num_rows;
        for($i = 0 ; $i < $canDatos ; $i++){
          $id = $res[$i][0];
          $img = $res[$i][1];
          $nom = $res[$i][2];
          $aut = $res[$i][3];
          $edi = $res[$i][4];
          $exi = $res[$i][5];
          $pre = $res[$i][6];
          $idCat = $res[$i][7];
          $idSub = $res[$i][8];
          $idEst = $res[$i][9];
          echo " <script language='javascript' type='text/javascript'>
                  
                  Eid = 'Eid' + '$i';
                  Eimg = 'Eimg' + '$i';
                  Enom = 'Enom' + '$i';
                  Eaut = 'Eaut' + '$i';
                  Eedi = 'Eedi' + '$i';
                  Eexi = 'Eexi' + '$i';
                  Epre = 'Epre' + '$i';
                  EidCat = 'EidCat' + '$i';
                  EidSub = 'EidSub' + '$i';
                  EidEst = 'EidEst' + '$i';

                  localStorage.setItem(Eid,'$id');
                  localStorage.setItem(Eimg, '$img');
                  localStorage.setItem(Enom, '$nom');
                  localStorage.setItem(Eaut, '$aut');
                  localStorage.setItem(Eedi, '$edi');
                  localStorage.setItem(Eexi, '$exi');
                  localStorage.setItem(Epre, '$pre');
                  localStorage.setItem(EidCat, '$idCat');
                  localStorage.setItem(EidSub, '$idSub');
                  localStorage.setItem(EidEst, '$idEst');
                 </script>
               ";
        }  
        echo "<script>  window.location = '../sudo.php'  </script>  ";
        
   }  
   // inventario
   public function buscarLibro($datos){
        $db = new Conexion();
        $sql = "SELECT * FROM libros WHERE nombre  LIKE '%$datos%'";
        $result = $db->query($sql);
        $dato = mysqli_fetch_all($result);
        print_r($datos);
        print_r($dato);
             $id = $dato[0][0];
             $img = $dato[0][1];
             $nom = $dato[0][2];
             $autor = $dato[0][3];
             $edit = $dato[0][4];
             $exis = $dato[0][5];
             $prec = $dato[0][6];
             $idCat = $dato[0][7];
             $idSub = $dato[0][8];
             $idEst = $dato[0][9];
             echo "<script>
                   localStorage.setItem('id','$id');
                   localStorage.setItem('imagen','$img');
                   localStorage.setItem('nombre','$nom');
                   localStorage.setItem('autor','$autor');
                   localStorage.setItem('edit','$edit');
                   localStorage.setItem('exit','$exis');
                   localStorage.setItem('prec','$prec');
                   localStorage.setItem('idCat','$idCat');
                   localStorage.setItem('idSub','$idSub');
                   localStorage.setItem('idEst','$idEst');
                   window.location = '../sudo.php?portada';
                   </script>";
   }
   //producto nuevo 
   public function nuevoProducto($img,$nomLibro,$autLibro,$edi,$exiLibro,$preLibro,$categoria,$subCaLibro,$estado){
        $db = new Conexion();
        $nombreImg = $img;
        $carpeta = '../files/';
        $carpeta2 = 'files/';
        opendir($carpeta); #abrimos la carpeta donde queremos guardar los archivos
        $destino = $carpeta.$_FILES['imagen']['name'];#capturamos la imagen/files/imagen.png
        $destino2 = $carpeta2.$_FILES['imagen']['name'];
        move_uploaded_file($_FILES['imagen']['tmp_name'],$destino);
        $sql = "INSERT INTO libros (imagen,nombre,autor,editorial,existencias,precio,idCategoria,idSubcategoria,idEstado) VALUES ('$destino2','$nomLibro','$autLibro','$edi','$exiLibro','$preLibro','$categoria','$subCaLibro','$estado')";
        $db->query($sql);  
   }

   public function consulta($dato){
        $db = new Conexion();
        $sql = "SELECT * FROM libros WHERE nombre LIKE '%$dato'";
        $respuesta = $db->query($sql);
        $datos = mysqli_fetch_all($respuesta);
        $id = $datos[0][0];
        $imagen = $datos[0][1];
        $nombre = $datos[0][2];
        $autor = $datos[0][3];
        $editorial = $datos[0][4];
        $existencias = $datos[0][5];
        $precio = $datos[0][6];
        $idCat = $datos[0][7];
        $idSub = $datos[0][8];
        $estado = $datos[0][9];

        echo "<script>
               localStorage.setItem('id','$id');
               localStorage.setItem('imagen','$imagen');
               localStorage.setItem('nombre','$nombre');
               localStorage.setItem('autor','$autor');
               localStorage.setItem('editorial','$editorial');
               localStorage.setItem('existencias','$existencias');
               localStorage.setItem('precio','$precio');
               localStorage.setItem('idCat','$idCat');
               localStorage.setItem('idSub','$idSub');
               localStorage.setItem('estado','$estado');
               window.location=' ../sudo.php?value=ConsultaLibro';
              </script>";
   }

   // modificar producto
   public function modificarProducto($id,$campo,$valor){
        $db = new Conexion();
        $sql = "UPDATE libros SET $campo = '$valor' WHERE idLibro = '$id'";
        $db->query($sql);
   }

   // eliminar un libro

   public function eliminar($fila){
        $db = new Conexion();
        $sql = "DELETE FROM libros WHERE idLibro='$fila'";
        $db->query($sql);
   }

   // agregar nuevo admin

   public function nuevoAdm($nombre,$apellido,$correo,$telefono){
        $db = new Conexion();
        $sql = "INSERT INTO administradores (nombre,apellido,correo,telefono) VALUES ('$nombre','$apellido','$correo','$telefono')";
        $db->query($sql);
   }
   
   // agregar categoria  

   public function agregarCategoria($categoria,$estado){
        $db = new Conexion();
        $sql = "INSERT INTO categorias (descripcionCate,idEstado) Values ('$categoria','$estado')";
        $db->query($sql);

   }

   // agregar subCategoria

   public function agregarsubCategoria($subCate,$estado){
        $db = new Conexion();
        $sql = "INSERT INTO subcategorias (subcategoria,idEstado) Values ('$subCate','$estado')";
        $result = $db->query($sql);
   }
}
?>