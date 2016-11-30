<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodericksolana
 * Date: 30/11/16
 * Time: 04:17 AM
 */

define ('HOST', 'localhost');
define ('USER', '1129839_user');
define ('PASS', '1129839');
define ('DB', 'daw_1129839');

$con = mysqli_connect(HOST, USER, PASS, DB) or die ('Imposible conectarse');

?>
