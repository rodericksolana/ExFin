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
        $sql = "select idUsuario, TipoUsuario from exf_Usuarios where eMail='$eMail' and Pwd='$Pwd'";
        echo $sql;
        $nume = mysqli_query($con, $sql) or die ('Query incorrecto: ' . $sql);
        echo "Terminé el query";
        //echo $num;
        if(mysqli_num_rows($nume) > 0) {

echo"Adentro del if antes del while";
            while ($rows = $nume->fetch_assoc()) {

                echo"dentro del while";
                if($nume['TipoUsuario'] == 1) {
                    echo "while 1";
                    header("Location:admin.html");
                }

                else {
                    echo "while0";
                    header("Location:cliente.html");
                }

            }


        }
            else {

                echo '<script language="javascript">alert("Datos Incorrectos");
                    var url = "http://ubiquitous.csf.itesm.mx/~daw-1129839/ExFin/login.html";
                    window.location.href = url;</script>';

            }

        }
        else
            //header("Location:error.html");
        echo "Falta uno de los datos";
}
else if(isset($_POST["register"])){
    $eMail=$_POST['eMail'];
    $Pwd=$_POST['Pwd'];
    if(!empty($eMail) && !empty($Pwd)){

        $sql = "insert into exf_Usuarios (eMail, Pwd, TipoUsuario) values ('$eMail','$Pwd', 0)";

        $res = mysqli_query($con, $sql) or die ('Query incorrecto: ' . $sql);

        $sql = "select idUsuario from exf_Usuarios where eMail='$eMail' and Pwd= '$Pwd'";

        $res = mysqli_query($con, $sql) or die ('Query incorrecto: ' . $sql);

        echo "Tengo esto";
        while ($rows = $res->fetch_assoc()) {

        }

    /*
        echo '<script language="javascript">
                    var url = "http://ubiquitous.csf.itesm.mx/~daw-1129839/ExFin/registraCliente.html";
                    window.location.href = url;</script>';
    */

    }
}

?>
