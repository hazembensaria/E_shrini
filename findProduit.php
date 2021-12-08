<?php
require_once "connexion.php";
class findProduit{
    private $pdo;
    function __construct()
    {  $cnx=new connexion();
        $this->pdo=$cnx->getConnexion();
    }


   function getFindproduit(){
    $sql="select name_prod , desc_prod, prix_prod,img_prod,qte_prod from produit ";
$obj=$this->pdo->query($sql);// objet PDOStatement
// var_dump($obj);
$res=$obj->fetchAll();
// print_r($res);
//  echo $res[0][1];
return($res);
   }



   function getFindOneproduit($name){
    $sql="select name_prod , desc_prod, prix_prod,img_prod,qte_prod from produit where name_prod='".$name."'";
$obj=$this->pdo->query($sql);// objet PDOStatement
// var_dump($obj);
$res=$obj->fetchAll();
// print_r($res);
//  echo $res[0][1];
return($res);
   }
}
