<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodericksolana
 * Date: 3/12/16
 * Time: 12:48 PM
 */

session_start();


include_once("config.php");
$idS = $_SESSION["idSession"];
$sql = "select eMail from exf_Usuarios where idUsuario= $idS";

        $nume = mysqli_query($con, $sql) or die ('Query incorrecto: ' . $sql);


echo "<div class=\"intro-lead-in\"> HOLA  " .  "rsolana" . "</div>";

?>
