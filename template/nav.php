<?php 
session_start();

require "connexion.php";
require "findUser.php";
$cnx= new connexion();
$pdo=$cnx->getConnexion();
$img = new find();
$res=$img->getFindimg($_SESSION['username'],$pdo);
$src="./img/".$res[0][0];
// echo $src;

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
<body >
    
    <nav class="navbar navbar-expand-lg " style="position: relative; top:6rem ;background-color:rgb(240,240,240);color:black;margin-bottom:0;border-bottom:1px solid lightgray" >
        <div class="container-fluid">
          <a class="navbar-brand" href="http://localhost/mes_traveaux/test/user.php" style="color:black;margin-left:20rem;font-weight:bold"><span style="color:goldenrod"><i class="fas fa-shopping-basket " style="margin-right:5px"></i>E_</span>shrini</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin: auto;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="color: black;">Home <span style="color: white;">|</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: black;">Link <span style="color: lightgray;">|</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" style="color: black;">Disabled</a>
              </li>
            </ul>
            <div style="width:7rem;height:40px;background:rgba(255, 255,255);border-radius:20px;padding:2px ;display:flex;justify-content:flex-end;align-items:center">
              <div style="color: black;display:inline;margin-right:5px;">
            <?php echo $_SESSION['username'] ?>
              </div>
              <a href="http://localhost/mes_traveaux/test/profil.php"> <img src=<?php echo '"'.$src.'"' ;?> style="width: 30px;height: 30px; border-radius: 50%;display:inline;margin-right:5px;"></a>
               
            </div >
            <div style="width: 40px;height:40px;border-radius:50% ;background:rgba(255, 255,255);display:flex;justify-content:center;align-items:center;margin-left:5px">
            <i class="far fa-user" style="color:black;font-size:large;position:relative">
            <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger  rounded-circle" >

            </i>
            </div>
            <div style="width: 40px;height:40px;border-radius:50% ;background:rgba(255, 255,255);display:flex;justify-content:center;align-items:center;margin-left:5px">
            <a href="http://localhost/mes_traveaux/test/panier.php"><i class="fas fa-shopping-cart" style="color:black;font-size:large;position:relative">
            <span class="position-absolute top-0 start-100 translate-middle p-1 bg-warning  rounded-circle" >
            </i></a>
            </div>
          </div>
        </div>
        
      </nav>
      <hr >
</body>
</html>