<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodericksolana
 * Date: 30/11/16
 * Time: 04:59 PM
 */

echo $_POST["Pwd"];

echo "Estoy en el submit";
require_once("login.php");
$db=new Database();
if(isset($_POST["login"])){
    $Pwd=$_POST["Pwd"];
    $eMail=$_POST["eMail"];
    if(!empty($eMail) && !empty($Pwd)){
        if($db->checkUserExist($eMail,$con)){//if this user exists
            if($db->authen($eMail,$Pwd,$con))
                echo "success";
               // header("Location:success.html");
            ELSE
                //header("Location:error.html");
            echo "Fallo";
        }
        else
            //header("Location:error.html");
        echo "Falla3";

    }
    $db->closeDataBase();
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
