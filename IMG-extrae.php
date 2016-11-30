<?php
// Creamos conexion
//$conn = new mysqli("localhost", "rulo", "654321", "raulms");
$conn = new mysqli("localhost", "1129839_user", "1129839", "daw_1129839");
// Validamos la conexion
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
// hacemos el query
$sql = "SELECT id, imagen FROM imagenes order by id desc limit 5";
$result = $conn->query($sql);
while ($rows = $result->fetch_assoc()){
//echo $rows['id'];
echo "<br><br>";
echo "<img src=\"IMG-muestra-imagen.php?id=".$rows['id']."\">";
echo "<br><br>";
}
// Cerramos la conexion a la base de datos
$conn->close();


?>

