<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodericksolana
 * Date: 30/11/16
 * Time: 04:59 PM
 */

require_once("config.php");
echo $_POST["Pwd"];
echo $_POST["login"];

//require_once("login.php");

if(isset($_POST["login"])){

    $Pwd=$_POST["Pwd"];
    $eMail=$_POST["eMail"];
    if(!empty($eMail) && !empty($Pwd)){
        $sql = "select count(*) from exf_Usuarios where eMail='$eMail'";
        echo $sql;
        $num = mysqli_query($con, $sql) or die ('Query incorrecto: ' . $sql);

        echo $num;
        if($num>0)
        echo "success";
               // header("Location:success.html");
            else
                //header("Location:error.html");
            echo "Fallo";
        }
        else
            //header("Location:error.html");
        echo "Falla3";
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
else  echo "No recibi nada";


?>
