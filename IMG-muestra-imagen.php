<?php
// Creamos conexion
//$conn = new mysqli("localhost", "rulo", "654321", "raulms");
$conn = new mysqli("localhost", "1129839_user", "1129839", "daw_1129839");
// Validamos la conexion
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
// hacemos el query

//verificamos si el id de la imagen es pasada del archivo IMG-extrae.php
if (isset($_GET['idViajes'])){
$idViajes=$_GET['idViajes'];
//hacemos el query
$sql = "SELECT Fotografias FROM exf_Viajes WHERE idViajes=$idViajes";
//echo $query;
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
{
$data=$row['imagen'];
//$type= $row['tipo'];
}
if ($type=="pjpeg") $type="jpeg";
Header ("Content-type:$type");
echo $data;
}
// Cerramos la conexion a la base de datos
$conn->close();


?>

