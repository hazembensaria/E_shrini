<?php 
session_start();

// require "./template/nav.php";
require "findProduit.php";
//  include "template/nav.php"; 
$obj= new findProduit();
// echo "hello from produit details !!!";
$_SESSION['code']=$_GET['code'];

$prode=$obj->getFindOneproduit($_GET['code']);
$findprod= new findProduit();
$prod= $findprod->getFindproduit();
 $_SESSION['id']=($prode[0][5]);
//  echo var_dump($_SESSION['id']);
 $comnts=$findprod->getFindcmnt();
//  <?php foreach($comnts as $key=> $value){
  // echo var_dump($comnts);
// }
// 
//  echo var_dump($prode);

   $src="./img_prod/".$prode[0][3];

// echo $_GET['code'];

// $prod=$_SESSION['prod']
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



<body style="display: flex; justify-content:space-around;flex-direction:column;">
  <div>
  <!-- <nav class="navbar navbar-expand-lg " style=" background-color:rgb(240,240,240);color:black;border-bottom:1px solid lightgray" >
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
              <a href="http://localhost/mes_traveaux/test/profil.php"> <img src=<?php echo '"'.$sr.'"' ;?> style="width: 30px;height: 30px; border-radius: 50%;display:inline;margin-right:5px;"></a>
               
            </div >
            <div style="width: 40px;height:40px;border-radius:50% ;background:rgba(255, 255,255);display:flex;justify-content:center;align-items:center;margin-left:5px">
            <i class="far fa-user" style="color:black;font-size:large;position:relative">
            <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger  rounded-circle" >

            </i>
            </div>
            <div style="width: 40px;height:40px;border-radius:50% ;background:rgba(255, 255,255);display:flex;justify-content:center;align-items:center;margin-left:5px">
            <i class="fas fa-shopping-cart" style="color:black;font-size:large;position:relative">
            <span class="position-absolute top-0 start-100 translate-middle p-1 bg-warning  rounded-circle" >
            </i>
            </div>
          </div>
        </div>
        
      </nav>
      
  </div> -->










  <div style="color: black;width:100;height:40rem;background:linear-gradient(to left, #ff8008, #ffc837); margin:1rem 2rem;border-radius:10px;display:flex">
        <div style="width: 40%;height:90%; background:white;margin:1rem;border-radius:5px">
            
            
           
              
          <img src=<?php echo'"'.$src.'"'?> class="card-img-top" alt="...">
              
          </div>
          <div style="width:45%; height:90% ;border-radius:10px;margin:1rem 0.5rem 1rem 0.5rem;display:flex;flex-direction:column;background:white;align-items:center">
          <p style="padding:5px 10px;box-sizing:border-box"><?php echo $prode[0][1]?></p>
          <hr style="width: 80%;">
          <input type="checkbox">
          </div>  
         
          <div style="width:30%; height:90% ;border-radius:10px;margin:1rem 0.5rem 1rem 0.5rem;display:flex;flex-direction:column">
            <div style="width: 100%;height:50%;border-radius:10px;background:whitesmoke;margin-bottom:0.5rem;display:flex;flex-direction:column;align-items:center;justify-content:space-around">
            <a href="login.php"><i class="fas fa-user-circle" style="font-size:xxx-large;color:#ff4747"></i></a>
            <p style="color:black;font-size:large">bienvenue chez E_shrini</p>
            <div style="display: flex;align-items:center;"><a href="sign_in.php"><input type="button" value="devenir" style="margin-right: 0.5rem;border-radius:23px;border:none;background:#ff4747;color :white;height:2rem;font-size:smaller;width:5rem"></a>
                                                           <a href="login.php"><input type="button" value="se connecter"style="margin-left: 0.5rem;border-radius:23px;border:none;background:rgb(230,230,230);color :gray;height:2rem;font-size:smaller;width:6rem"></a></div>
            </div>
            <div style="width: 100%;height:50%;border-radius:10px;background:whitesmoke"></div>
          </div>  
        </div>
        <div style="margin:0 2rem ;border-radius:10px;display:flex;flex-direction:column;justify-content:flex-start">
        <?php foreach($comnts as $key=> $value){?><div style="height: 4rem;width:50%;background:linear-gradient(to right, lightblue, rgba(255,255,255));border-radius:5px;margin-bottom:1rem;padding:0.5rem">
              <?php echo $value[1][0]."***".$value[1][strlen($value)-1].':' .$value[0].'<br>';?> </div><?php }?>
            <form action="addcomnt.php" action="get">
              <input type="text" name="comment" placeholder="ajouter un commentaire"style=" border-radius: 23px;width:40%;height:3rem;margin:1rem 0">
              <button type="submit" name="ok" style="border: none;background:transparent;font-size:2em;color:#ff4747"><i class="fas fa-paper-plane"></i></button>
            </form>
            

        </div>


        <div style="margin:1rem 2rem 0 2rem;background-color:gray;display:flex;flex-wrap:wrap;gap:90px;padding:1rem;border-radius:10px;">
        <?php foreach($prod as $key=> $value){
            $src="./img_prod/".$value[3];
            ?>
    <div class="card" style="width: 18rem;display:inline-flex;box-shadow:1px 1px 5px black;border:none;max-height:32rem" >
      <img src=<?php echo'"'.$src.'"'?> class="card-img-top" alt="..." style="height:40%">
      <div class="card-body">
        <h5 class="card-title"><?php echo $value[0]?></h5>
        <p class="card-text"><?php echo $value[1]?></p>
      </div>
      <ul class="list-group list-group-flush"style="max-height:4rem">
        <li class="list-group-item"><?php echo "<b>prix </b>".$value[2]." dt"?></li>
        <li class="list-group-item"><?php echo "<b>quantité </b>".$value[4]?></li>
      </ul>
      <div class="card-body" style="display: flex;justify-content:space-around;max-height:4rem">
        <a href="http://localhost/mes_traveaux/test/prod_details.php?code=<?php echo $value['0'] ?>" class="card-link"><input type="button" value="voire details" style="background-color: pink;outline:none;border-radius:10px;border:none;box-shadow:1px 1px 3px black"></a>
        <a href="#"><i class="far fa-heart categori" style="color:palevioletred ;font-size:large"></i></a>
      </div>
      </div>

      <?php } ?>
</div>
<footer style="display: flex;flex-direction:column;background: linear-gradient(30deg, black, rgba(0,0,0,0.7));align-items:center;width:100%">
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