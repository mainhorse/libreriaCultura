<?php

require( __DIR__ . '/../modelo/class.Libro.php');
$accion = $_GET['accion'];

switch($accion){
    case 'inventario':
                inventario();
    break;   
    case 'esp':
                especifico();
    break; 
    case 'nuevo':
                nuevoProducto();
    break;
    case 'consultar':
                consultar();
    break;    
    case 'modificar':
                modificarProducto();
    break;
    case 'eliminar':
                eliminar();
    break;   
    case 'nuevoAdm':
                nuevoAdm();
    break;    
    case 'nuevaCategoria':
                nuevacategoria();
    break;
    case 'subCategoria':
                subCategoria();
    break;           
}

function inventario(){
    $libro = new Libro();
    $buscador = $_POST['dato'];
    $libro->buscarLibro($buscador);
}

function especifico(){
    $libro = new Libro();
    $columna = $_POST['colum'];
    $pri = $_POST['pri'];
    $seg = $_POST['seg'];
    $libro->busEspecifica($columna,$pri,$seg);
}

function nuevoProducto(){
    $libro = new Libro();
    $imagen = $_POST['imagen'];
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $edit = $_POST['editorial'];
    $exi = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $cate = $_POST['categoria'];
    $subCate = $_POST['subCategoria'];
    $estado = $_POST['estado'];
    
    $libro->nuevoProducto($imagen,$nombre,$autor,$edit,$exi,$precio,$cate,$subCate,$estado);
    header('location: ../sudo.php?value=ProductoNuevo');
}

function consultar(){
    $libro = new Libro();
    $busqueda = $_POST['buscar'];
    $libro->consulta($busqueda);
   
}

function modificarProducto(){
    $libro = new Libro();
    $idProducto = $_POST['id'];
    $columnaProducto = $_POST['columna'];
    $nuevoValor = $_POST['valor'];
    $libro->modificarProducto($idProducto,$columnaProducto,$nuevoValor);
    header('location: ../sudo.php?value=modificarProducto');

}

function eliminar(){
    $libro = new Libro();
    $fila = $_POST['fila'];
    $libro->eliminar($fila);
    header('location: ../sudo.php?value=productoEliminado');
}

function nuevoAdm(){
    $libro = new Libro();
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $libro -> nuevoAdm($nombre,$apellido,$correo,$telefono);
    header('location: ../sudo.php?value=nuevoAdministrador');
}

function nuevacategoria(){
    $libro = new Libro();
    $nueCategoria = $_POST['nombre'];
    $estado = $_POST['estado'];
    $libro->agregarCategoria($nueCategoria,$estado);
    header('location: ../sudo.php?value=nuevaCategoria');
}

function subCategoria(){
    $libro = new Libro();
    $nueCategoria = $_POST[''];
    $estado = $_POST[''];
    $libro->agregarsubCategoria($nueCategoria,$estado);
}

?>










