<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['idgroup']!=1 ){
header("location:login.php?etat=1");
}
echo "admin";
include "template/nav.php";
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
<a href="http://localhost/mes_traveaux/test/add_prod.php"><input type="button" value="add produit" class="btn btn-primary"></a>
<a href="http://localhost/mes_traveaux/test/user.php"><input type="button" value="go to user" class="btn btn-primary"></a>
</body>
</html>