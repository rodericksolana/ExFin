<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodericksolana
 * Date: 3/12/16
 * Time: 12:48 PM
 */

session_start();

echo "Esto es lo que regreso:";

echo "<div class=\"intro-lead-in\"> HOLA  " .  $_SESSION["idSession"] . "</div>";
echo "Favorite animal is " . "algo más" . $_SESSION["idSession"] . ".";

?>
