<?php
// Creamos conexion
//$conn = new mysqli("localhost", "rulo", "654321", "raulms");
$conn = new mysqli("localhost", "1129839_user", "1129839", "daw_1129839");
// Validamos la conexion
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
// hacemos el query
$sql = "SELECT idViajes, NombreDestino, Fotografias FROM imagenes order by idViajes desc limit 5";
$result = $conn->query($sql);
while ($rows = $result->fetch_assoc()){
//echo $rows['id'];
echo "<br><br>";
echo "<img src=\"IMG-muestra-imagen.php?idViajes=".$rows['idViajes']."\">";
echo "<br><br>";
}
// Cerramos la conexion a la base de datos
$conn->close();


?>

