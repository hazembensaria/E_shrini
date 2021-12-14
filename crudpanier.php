<?php
require "connexion.php";
class crudpanier{
    private $pdo;
    function __construct()
    {
        $cnx= new connexion();
        $this->pdo=$cnx->getConnexion();
    }
    

    function getFindpanier(){
    $sql=" select panier.user, produit.name_prod, produit.desc_prod, produit.prix_prod,produit.img_prod,produit.qte_prod,panier.id_prod FROM panier INNER JOIN produit ON panier.id_prod=produit.id WHERE panier.user='".$_SESSION['username']."'";
$obj=$this->pdo->query($sql);// objet PDOStatement
// var_dump($obj);
$res=$obj->fetchAll(); 
        return $res;
       }

       function deletepanier($p){
           // echo $_GET['h'];
 $sql="delete from panier where id_prod=".$p;
 $res=$this->pdo->exec($sql);
 return $res;
       }
}