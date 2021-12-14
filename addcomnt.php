<?php

session_start();
echo "hhhh";
$cmn=$_GET['comment'];

    require "connexion.php";
    $cnx=new connexion();
    $pdo=$cnx->getConnexion();
    $sql="insert into comment (cmnt,user,id_post) values('".$cmn."','".$_SESSION['username']."',".$_SESSION['id'].")";
    $res=$pdo->exec($sql);
    // echo var_dump($res);
    //  echo $_GET['cmn'];
    //  echo $_SESSION['username'];
    
header('location:prod_details.php?code='.$_SESSION['code']);