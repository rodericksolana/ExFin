<?php
// Creamos conexion
//$conn = new mysqli("localhost", "rulo", "654321", "raulms");
$conn = new mysqli("localhost", "1129839_user", "1129839", "daw_1129839");
// Validamos la conexion
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
// hacemos el query
$sql = "SELECT idViajes, NombreDestino, Fotografias FROM exf_Viajes order by idViajes desc limit 5";
$result = $conn->query($sql);
while ($rows = $result->fetch_assoc()){
//echo $rows['id'];
    echo "<div class=\"col-md-6 col-sm-6 portfolio-item\">
            <a href=\"#portfolioModal6\" class=\"portfolio-link\" data-toggle=\"modal\">
                <div class=\"portfolio-hover\">
                            <div class=\"portfolio-hover-content\">
                                <i class=\"fa fa-plus fa-3x\"></i>
                            </div>
                        </div>";
//echo "<br><br>";
echo "<img class="imagenViaje" src=\"".$rows['Fotografias']."\">";
  //  echo "<img src =\"http://mediawiki.talentum.natware.mx/images/thumb/c/c6/Quechulachiapas.2.jpg/400px-Quechulachiapas.2\">";
//echo "<br><br>";
// var_dump ($rows);
// var_dump ($rows['Fotografias']);

    echo "</a>
                    <div class=\"portfolio-caption\">
                        <h4> \"".$rows['NombreDestino']."\" </h4>
                        <p class=\"text-muted\">Website Design</p>
                    </div>
                </div>";
}
// Cerramos la conexion a la base de datos
$conn->close();


?>

