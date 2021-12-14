<?php
session_start();

if($_GET['etat']==1){
    echo " <script> alert( 'welcome for the first time')</script>";
    
}
// echo "user";
include "template/nav.php";
require "findCategori.php";
require "findProduit.php";
$findprod= new findProduit();
$prod= $findprod->getFindproduit();
$findcateg= new findcategori();
$categ= $findcateg->getFindcategori();

// echo var_dump($categ);


if (isset($_GET['categ'])){
  $prod1=$findprod->getFindproduitbycategori($_GET['categ']);
 $_SESSION['prod'] =$prod=$prod1;
// require "filterCategori.php";
//  echo "hh";

  
  }
  // $_SESSION['id']=$prod[0]
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="./style.user.css"> 
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head >
<body style="background-color:rgba(235,235,235);display:flex;flex-direction:column">
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
<!-- dynamique body -->

<div style="display: flex; flex-direction:column;align-items:center;position:relative;top:5rem">
<div style="display: flex;width:80%;justify-content:space-between">
        <div style="color: black;width:100%;height:30rem;background:linear-gradient(to left, #ff8008, #ffc837);align-self:flex-start; margin-left:2rem;border-radius:10px;display:flex">
        <div style="width: 15%;height:90%; background:white;margin:1rem;border-radius:5px">
            <header style="display: flex;justify-content:flex-start;background:rgb(245,245,245);align-items:center">
            <i class="fas fa-list-ul" style="margin:4px"></i>categories
            </header>
            
            <?php foreach($categ as $value){?>
              <form action="user.php" method="get">
              <div  style="display: flex;justify-content:flex-start ;align-items:center;color:gray">
                <input type="text"   name="categ" style="display: none;" value=<?php echo'"'.$value[1].'"' ?>>
                <button  type="submit" name="ok" value="" style="outline: none;border:none;background:none;">
                    <i class="fas fa-caret-right" style="margin: 4px;"></i><?php echo$value[0]?>
                </button>
              </div>
              </form>
                <?php } ?>
              
          </div>
          <div style="width:45%; height:90% ;border-radius:10px;margin:1rem 0.5rem 1rem 0.5rem;">






                
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img_caroussel/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img_caroussel/img1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img_caroussel/img3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
          <!-- <img src="./img_caroussel/img2.jpg" style="width: 100%; height:100%;padding-top:1px;"> -->
        






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

</div>
<div style="margin:1rem 2rem 0 2rem;background-color:white;display:flex;flex-wrap:wrap;gap:90px;padding:1rem;border-radius:10px;">
    <?php foreach($prod as $key=> $value){  
        $src="./img_prod/".$value[3];
         ?>
<a class="a1"href="http://localhost/mes_traveaux/test/prod_details.php?code=<?php echo $value['0'] ?>" style="text-decoration:none;color:black; "><div class="card" style="width: 18rem;display:inline-flex;border:none;height:36rem" >
  <img src=<?php echo'"'.$src.'"'?> class="card-img-top" alt="..." style="height:40%">
  <div class="card-body">
    <h5 class="card-title"><?php echo $value[0]?></h5>
    <p class="card-text"><?echo $value[1]?></p>
  </div>
  <hr style="width: 70%;margin:auto;">
  <ul class="list-group list-group-flush"style="max-height:4rem">
    <li class="list-group-item"><?php echo "<b>prix </b>".$value[2]." dt"?></li>
    
  </ul>
  <div class="card-body" style="display: flex;justify-content:space-around;max-height:4rem">

      <form action="addpanier.php" method="post">
      <input type="text"   name="id_p" style="display: none;" value=<?php echo'"'.$value[5].'"' ?>>
      <input type="text"   name="user" style="display: none;" value=<?php echo'"'.$_SESSION['username'].'"' ?>>
        <button type="submit" name="panier" style="background: none;border:none;font-size:large;color:#ff4747;"><i class="fas fa-cart-plus" style="margin-right: 3px;"></i> ajouter</button>
      </form>

    
    <i class="far fa-heart categori" style="color:palevioletred ;font-size:large"></i>
  </div>
</div></a>

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
</div>
<script src="./script.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

