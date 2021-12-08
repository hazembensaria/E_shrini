<?php
class connexion{
function getConnexion(){
 $db="mysql:dbname=mydb;host=localhost";
 $user="root";
 $pw='root';
 $cnx=new PDO($db,$user,$pw);
 return $cnx;
 

}
}