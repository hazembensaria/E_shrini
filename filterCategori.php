<?php
session_start();
// echo "hello from filter categori"
// echo $_SESSION['categ']=$_GET['categ'];
// require_once "connexion.php";
class filtercategori{
    private $pdo;
    function __construct()
    {  $cnx=new connexion();
        $this->pdo=$cnx->getConnexion();
    }
    function filtrer(){
    $sql="select name_prod , desc_prod, prix_prod,img_prod,qte_prod from produit where id_categori=".$_SESSION['categ'];
$obj=$this->pdo->query($sql);// objet PDOStatement
// var_dump($obj);
$res=$obj->fetchAll();
return ($res);
}}

// print_r($res);
//  echo $res[0][1];
   
// header('location:user.php?idCateg=8');
