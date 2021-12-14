<?php 
session_start();
   
    require "crudpanier.php";
  $pan= new crudpanier();
  $res= $pan->getFindpanier();
  if(isset($_POST['sup'])){
    $res=$pan->deletepanier($_GET['h']);
    header('location:panier.php');
  }

// print_r($res);
//  echo $res[0][1];
//  echo var_dump($res);
    // SELECT panier.user, produit.name_prod, produit.desc_prod, produit.prix_prod FROM panier INNER JOIN produit ON panier.id_prod=produit.id WHERE panier.user='hazem'
   ?> <!DOCTYPE html>
   <html lang="en">
   <head>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
   </head>
   <body style="background: rgb(240, 240, 240);">

   <div style="background:linear-gradient(to left, #ff8008, #ffc837);width:100%;height:6rem;display:flex;align-items:center;justify-content:space-around;padding-top:8px">
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



   
   <div style="margin:1rem 2rem 0 2rem;display:flex;flex-wrap:wrap;gap:1rem;padding:1rem;border-radius:10px;justify-content:center">
   
    <?php foreach($res as $key=> $value){  
        $src="./img_prod/".$value[4];
         ?>
<div  style="display:flex; width: 70%;display:inline-flex;border:none;height:8rem;background:white" >
<div style="display:flex; align-items:center;width:10%;justify-content:center">
  <img src=<?php echo'"'.$src.'"'?> class="card-img-top" alt="..." style="height:3rem;width:3rem;padding:5px">
</div>

  <div style="display: flex;width:40%;flex-direction:column;height:90% ;margin:2px;line-height:1.5em;justify-content:space-between">
  <span style="color: lightgray;">vendeur :</span>
   <b> <?echo $value[1]?></b>
    <span style="color: lightgray;">taille : </span>
    <div>
      <form action="panier.php?h=<?php echo $value[6]?>" method="post">
        <button type="submit" name="sup" style="border: none; color:crimson;background:none"><i class="fas fa-trash-alt" style="margin-right: 3px;"></i>supprimer</button>
       
        <button type="submit" style="border: none; color:crimson;background:none"><i class="far fa-heart"  style="margin-right: 3px;"></i>mettre de coté</button>
      </form>
    </div>
  </div>
  <div style="display:flex;flex-direction:column;justify-content:center;align-items:center; width: 12%;border-right:2px  rgb(240, 240, 240) solid;border-left:2px  rgb(240, 240, 240) solid;padding:10px">
  <select id="cars" style="border:none;width:3rem">
  <option value="1" selected>1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4" >4</option>
</select>
    <hr style="width: 75%; ">
  </div>
  <div style="border-right: 2px  rgb(240, 240, 240) solid;width:15%;display:flex;justify-content:center;align-items:center;flex-direction:column;font-size:1.2em">
    <?php echo $value[3]." DT"?>
    <hr>
  </div>
  <div style="display:flex; justify-content:center;align-items:center;flex-direction:column;width:23%;font-size:1.2em;color:crimson">
  <?php echo $value[3]*$value[5]?>
  <hr>
  </div>
  
</div>

<?php } ?>
</div>
<a href="user.php"><input type="button" value="home"></a>
   </body>
   </html>