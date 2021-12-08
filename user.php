<?php
session_start();
if(!isset($_SESSION['username']) ){
header("location:login.php?etat=1");
}
if($_GET['etat']==1){
    echo " <script> alert( 'welcome for the first time')</script>";
    
}
// echo "user";
include "template/nav.php";

require "findProduit.php";
$find= new findProduit();
$prod= $find->getFindproduit($pdo);
//  echo var_dump($prod);
//  echo count($prod);
//  echo $prod[0][0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head >
<body style="background-color:rgba(235,235,235)">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- begin caroussel -->

<!-- end caroussel -->
<div style="background:linear-gradient(to left, #ff8008, #ffc837);position:absolute;top:0px;width:100%;height:6rem;display:flex;align-items:center;justify-content:space-around;padding-top:8px">
<div>
  <img src="./img/Flyer_A5_NS-921x1024.png" style="width: 10rem;height:10rem;">
</div>
<div style="background-color: white;border-radius:23px;width:20rem;display:flex;justify-content:center">

  <h4>prepare vous pour 2022</h4>
</div>
<div style="color: white;width:22rem"> 
  <h5><span style="font-weight: 800;font-size:x-large">jusqu'a 80% promotion!</span><br>des gros promossions sur votre favoris</h5>
</div>
<div style="background-color: white;border-radius:23px;width:10rem;display:flex;justify-content:center">
  <h4>decouvrire</h4>
</div>
<div>
  <img src="./img/les-shopping-3.png" style="width: 9rem;height:6rem;">
</div>
</div>

<div  style="width: 100%;height:25rem;position:relative;top:5rem ;margin-top: 0;">
<hr >
<img src="./img_caroussel/img2.jpg" style="width: 100%; height:100%;padding-top:1px">

</div>
<div style="margin:2rem;background-color:white;display:flex;flex-wrap:wrap;gap:90px;padding:1rem;border-radius:10px;position:relative;top:6rem">
    <?php foreach($prod as $key=> $value){
        $src="./img_prod/".$value[3];
         ?>
<div class="card" style="width: 18rem;display:inline-flex;box-shadow:1px 1px 5px black;border:none" >
  <img src=<?php echo'"'.$src.'"'?> class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $value[0]?></h5>
    <p class="card-text"><?php echo $value[1]?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo "<b>prix </b>".$value[2]." dt"?></li>
    <li class="list-group-item"><?php echo "<b>quantité </b>".$value[4]?></li>
  </ul>
  <div class="card-body">
    <a href="http://localhost/mes_traveaux/test/prod_details.php?code=<?php echo $value['0'] ?>" class="card-link"><input type="button" value="voire details" style="background-color: pink;outline:none;border-radius:10px;border:none;box-shadow:1px 1px 3px black"></a>
    <a href="#" class="card-link"><i class="far fa-heart" style="color:palevioletred ;font-size:large"></i></a>
  </div>
</div>

<?php } ?>
</div>
<footer style="display: flex;flex-direction:column;background: linear-gradient(30deg, black, rgba(0,0,0,0.7));align-items:center">
  <div style="display: flex;justify-content:center;padding:15px;margin:0 0 2px 0;height:10rem ;display:flex;justify-content:center;align-items:center;">
  <i class="fab fa-facebook" style="color: white;font-size:x-large;margin:5px"></i>
  <i class="fab fa-instagram" style="color: white;font-size:x-large;margin:5px"></i>
  <i class="far fa-envelope" style="color: white;font-size:x-large;margin:5px "></i>
  </div>
  <div style="color:lightgray">
  <i class="far fa-copyright" style="color: lightgray;margin:0 3px 25px 0"></i>industri poetique | Creation du site interne | 2020
  </div>
</footer>

</body>
</html>

