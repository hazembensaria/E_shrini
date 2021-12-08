<?php 
session_start();
include "./template/nav.php";
require "findProduit.php";

$obj= new findProduit();
// echo "hello from produit details !!!";
$prod=$obj->getFindOneproduit($_GET['code']);

// echo var_dump($prod);

   $src="./img_prod/".$prod[0][3];

// echo $_GET['code'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="width: 25rem;position:absolute;top:3rem;left:6rem">
  <img src=<?php echo'"'.$src.'"'?> class="card-img-top" alt="...">
  
</div>
  
  
  
  <div>
    <h5 class="card-title"><?php echo $prod[0][0]?></h5>
  </div>
  <div  style="width: 20rem;position:absolute;top:3rem;left:33rem ;
  background: linear-gradient(to right, #fd746c, #ff9068);
  border-radius:5px;
  margin-left:2rem;
  box-sizing:border-box">
    <p style="padding:5px 10px;box-sizing:border-box"><?php echo $prod[0][1]?></p>
  </div>
  <!-- </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $prod[0][2]?></li>
    <li class="list-group-item"><?php echo $prod[0][4]?></li>
  </ul>
  
</div>  -->

<input type="button" value="add to panier" style="width: 10rem;position:absolute;top:30rem;left:33rem ;
  background: linear-gradient(to right, #fd746c, #ff9068);
  border-radius:5px;">

</body>
</html>