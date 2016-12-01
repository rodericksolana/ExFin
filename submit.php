<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodericksolana
 * Date: 30/11/16
 * Time: 04:59 PM
 */

include_once("config.php");

//require_once("login.php");

if(isset($_POST["login"])){

    $Pwd=$_POST["Pwd"];
    $eMail=$_POST["eMail"];
    if(!empty($eMail) && !empty($Pwd)){
        $sql = "select idUsuario from exf_Usuarios where eMail='$eMail' and Pwd= '$Pwd'";

        $nume = mysqli_query($con, $sql) or die ('Query incorrecto: ' . $sql);
        //echo "Terminé el query";
        //echo $num;
        if(mysqli_num_rows($nume) > 0) {
            echo "success";

           // header("Location:cliente.html");
        }
               // header("Location:success.html");
            else {

                echo '<script language="javascript">alert("Datos Incorrectos");</script>';
                 //header("Location:login.html");
                //echo "Fallo";
            }

            //echo "saliendo del if";
        }
        else
            //header("Location:error.html");
        echo "Falta uno de los datos";
}
else if(isset($_POST["register"])){
    $eMail=$_POST['eMail'];
    $Pwd=$_POST['Pwd'];
    if(!empty($eMail) && !empty($Pwd)){
        $db->register($eMail,$Pwd,$con);
        header("Location:success.html");

    }
    $db->closeDataBase();
}

?>
