<?php

session_start();
 if(isset($_POST['name'])){

  if(is_uploaded_file($_FILES['img']['tmp_name'])){
    // var_dump($_FILES);
      move_uploaded_file($_FILES['img']['tmp_name'],"img_prod/".$_FILES['img']['name']);
     
 }





require "connexion.php";
$cnx= new connexion();
$pdo=$cnx->getConnexion();
$img=$_FILES['img']['name'];
// echo $img;
 $sql="insert into produit(name_prod,desc_prod,prix_prod,img_prod,qte_prod) values('".$_POST['name']."','".$_POST['desc']."',".$_POST['prix'].",'".$img."',".$_POST['qte'].")";
 $res=$pdo->exec($sql);
//  echo var_dump($res);
 if($res){
//  echo var_dump($_POST);
    echo "<script> alert('product added succesfuly !')</script>";
   
 }
 else{
    echo " cant add this product";
 }
 }












?>














<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <form action="add_prod.php" method="POST"  enctype="multipart/form-data" >
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">name</label>
  <input type="text" class="form-control" name="name" require >
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">desc</label>
  <input type="text" class="form-control" name="desc" require>
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">prix</label>
  <input type="password" class="form-control" name="prix" require>
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">prduct img</label>
  <input type="file" class="form-control" name="img" id="" placeholder="your image">
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">quantite</label>
  <input type="text" class="form-control" name="qte" id="" placeholder="your image">
</div>
<button type="submit" class="btn btn-primary" id="b1">add</button>
    </form>
</body>
</html>