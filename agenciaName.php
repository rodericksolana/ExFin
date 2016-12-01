<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodericksolana
 * Date: 30/11/16
 * Time: 09:15 PM
 */


include_once("config.php");

$sql = "SELECT NombreAgencia  FROM exf_Agencia";
$result = $conn->query($sql);

while ($rows = $result->fetch_assoc()) {
//echo $rows['id'];
    echo "<div class=\"intro-lead-in\"> Bienvenido a $rows['id']!</div>";
    }

?>


