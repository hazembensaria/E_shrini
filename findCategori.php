<?php
//  require "connexion.php";


class findcategori{
    private $pdo;
    function __construct()
    {
        $cnx= new connexion();
        $this->pdo=$cnx->getConnexion();
    }
    

    function getFindcategori(){
        $sql="select name_categ,id_categ from categori";
    $obj=$this->pdo->query($sql);// objet PDOStatement
    // var_dump($obj);
    $res=$obj->fetchAll();
    // print_r($res);
    //  echo $res[0][1];
    return($res);
       }
}
// header('location:user.php?idCateg=8');