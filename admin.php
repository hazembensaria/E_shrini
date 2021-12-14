<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['idgroup']!=1 ){
header("location:login.php?etat=1");
}

// include "template/nav.php";
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
<a href="http://localhost/mes_traveaux/test/add_prod.php"><input type="button" value="add produit" class="btn btn-primary"></a>
<a href="http://localhost/mes_traveaux/test/user.php"><input type="button" value="go to user" class="btn btn-primary"></a>
<a href="http://localhost/mes_traveaux/test/add_categori.php"><input type="button" value="add categori" class="btn btn-primary"></a>

<div class="progress">
  <div class="progress-bar bg-danger w-50" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</body>
</html>