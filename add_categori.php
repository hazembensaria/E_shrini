<?php

if(isset($_POST['ok'])){
require "connexion.php";
$cnx=new connexion();
$pdo=$cnx->getConnexion();
$sql="insert into categori (name_categ) values('".$_POST['name_categ']."')";
$res=$pdo->exec($sql);
echo var_dump($res);
if($res){
    echo "<script>alert('categori added succefully!')</script>";
}
else{
    echo "<script>alert('cant add this categori!')</script>";
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add_categori.php" method="post">
        <label for="">categorie</label>
        <input type="text" name="name_categ">
        <button type="submit" name="ok">add</button>
    </form>
</body>
</html>