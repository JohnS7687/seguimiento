
<?php  session_start();
    


require 'funciones.php';
$id = $_REQUEST['id'];


$conexion = conexion('bd_seguimiento','root','');
if (!$conexion) {
    die();
}

//echo $id;
try{
    $statement = $conexion->prepare("SELECT * FROM aula WHERE ID_AULA = '$id'");
    $statement->execute();
    $aulas = $statement->fetch(PDO::FETCH_ASSOC); // capturar datos cada columna de una consulta dada

}catch(PDOException $e) {
    echo $e->getMessage();
}
$conexion = null;

require 'views/modificarAula.view.php';


