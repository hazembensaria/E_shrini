<?php 

session_start();
 if(count($_POST)!=0){

  if(is_uploaded_file($_FILES['photo']['tmp_name'])){
    // var_dump($_FILES);
      move_uploaded_file($_FILES['photo']['tmp_name'],"img/".$_FILES['photo']['name']);
     echo "<img src=".$_FILES['photo']['name']." />";
 }







$_SESSION['username']=$_POST['username'];
$img=$_FILES['photo']['name'];
require "connexion.php";
$cnx=new connexion();
$pdo=$cnx->getConnexion();
$sql="insert into users(username,mail,password,idgroup,img) values('".$_POST['username']."','".$_POST['mail']."','".$_POST['pw']."',0,'".$img."')";
$res=$pdo->exec($sql);
// var_dump($res);
if($res){
  // echo var_dump($res);
    // echo "you are signes succesfuly";
    header('location:user.php?etat=1');
}
else{
    echo " <script> alert( 'this user is already signed in !')</script>";
}
// echo"you are not signed ";
// echo (var_dump($_POST));
 }


 



//     echo"you are not signed ";
//  echo(var_dump($_POST));

// '".$_POST['username']."','".$_POST['mail']."',".$_POST['pw'].",0)"




?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="sign_in.style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="height: 100vh;
    width: 100vw;
    display: flex;
    align-items:flex-end;
    justify-content:flex-end;
    overflow: hidden;
    box-sizing:border-box;">

<div style="background: linear-gradient(to right, #fd746c, #ff9068);
    width: 100rem;
    height: 200vh;
    border-radius: 50% 0 0 50%;
    position: absolute;
    left: 70rem;
    z-index: -1;">
    </div>
    
    <form action="sign_in.php" method="POST"  enctype="multipart/form-data" style=" transform: translateX(-20rem);">
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Email address</label>
  <input type="text" class="form-control" name="mail" require >
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">username</label>
  <input type="text" class="form-control" name="username" require>
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Password</label>
  <input type="password" class="form-control" name="pw" require>
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">profile img</label>
  <input type="file" class="form-control" name="photo" id="" placeholder="your image">
</div>
<button type="submit" class="btn btn-primary" id="b1">sign in</button>
    </form>
    
</body> 
</html>