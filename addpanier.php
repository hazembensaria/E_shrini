<?php

 require "connexion.php";
//  echo $_POST['user'];
//  echo $_POST['id_p'];

 $cnx= new connexion();
$pdo=$cnx->getConnexion();
// echo "hello from panier";
  $_SESSION['user']=$_POST['user'];
 echo $_POST['id_p'];
// echo $img;
 $sql="insert into panier(user,id_prod) values('".$_POST['user']."',".$_POST['id_p'].")";
 $res=$pdo->exec($sql);
//  echo var_dump($res);
header('location:user.php');
 