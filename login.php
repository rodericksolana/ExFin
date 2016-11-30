<?php
/**
 * Created by IntelliJ IDEA.
 * User: rodericksolana
 * Date: 30/11/16
 * Time: 04:41 PM
 */

echo "Entre a login.php";
require_once("config.php");

class Database{

    public function closeDataBase(){
        $con=null;

    }
    /* this checks if the user exists
    @param email is users email
    @param $conn is the connection object
    */
    public function checkUserExist($eMail,$con){
        $sql="select count(*) from exf_Usuarios where eMail=:eMail";
        $st=$con->prepare($sql);
        $st->bindValue(':eMail',$eMail);
        $st->execute();
        $num=$st->fetchColumn();
        $st=null;
        if($num>0)
            return true;
        else
            return false;
    }
    /*
    This method authenticates the user
    @param email is users email
    @param password is the submitted password
    @param $conn is the connection object
    */
    public function authen($eMail,$Pwd,$con){
        $sql="select Pwd from exf_Usuarios where eMail=:eMail";
        $st=$con->prepare($sql);
        $st->bindValue(":eMail",$eMail);
        $res=$st->execute();
        $row=$st->fetchAll();
        if(password_verify($Pwd,$row[0]['Pwd']))
            return true;
        else
            return false;
    }

    public function register($eMail,$Pwd,$con){
        $hash=password_hash($Pwd,PASSWORD_DEFAULT);//we hash  our password
        $sql="INSERT INTO exf_Usuarios( eMail, Pwd, TipoUsuario ) VALUES ( :eMail, :Pwd ,0)";
        $st=$con->prepare($sql);
        $st->bindValue(":eMail",$eMail);
        $st->bindValue(":Pwd",$hash);
        $st->execute();
        $st=null;
    }
}
?>
