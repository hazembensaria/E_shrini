<?php 


//check post
session_start();
if(isset($_GET['etat']))
{
switch ($_GET['etat']) {
    case '1' :
        echo " <script> alert( 'vous n\'êtes pas autorisée')</script>";
        break;
    case '2' :
        echo " <script> alert( 'merci pour votre connexion')</script>";
        break; 
    case '3' :
        echo " <script> alert( 'login et/ou mt passe incorrects')</script>";
       break;
   
}}

if(isset($_POST['username'])){
  $username=$_POST['username'];
 $pw=$_POST['pw'];
$_SESSION['username']=$_POST['username'];
require "connexion.php";
require "findUser.php";
$cnx=new connexion();
$pdo=$cnx->getConnexion();
$find= new find();

$res=$find->getFinf($username,$pw,$pdo);
$signed=false;

// $sql="select username , idgroup from users where username='".$username."'and password='".$pw."'";
// $obj=$pdo->query($sql);// objet PDOStatement
// // var_dump($obj);
// $res=$obj->fetchAll();
// echo var_dump($res);
echo $res[0][1];
$_SESSION['idgroup']=$res[0][1];
if($res[0][1]==1 && $res[0][0]==$_SESSION['username']){
    // echo "ha";
    // echo $res[0][0];

    header('Location:admin.php');
}
else if($res[0][1]==0 && $res[0][0]==$_SESSION['username']) {
     header('Location:user.php');
//     echo "h2";
//     echo $res[0][0];
}
else{
    // header('Location:login.php');
    echo " <script> alert( 'you have to signe up')</script>";
    // echo $res[0][1];
}


}












?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
<div class="contenaire">
</div>
<form action="login.php" method="POST" class="form1">
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Email address</label>
  <input type="text" class="form-control" name="username" >
</div>
<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Password</label>
  <input type="password" class="form-control" name="pw">
</div>
<button type="submit" class="btn btn-primary" id="b1">login</button>
<a href="http://localhost/mes_traveaux/test/sign_in.php"><input type="button" value="sign in" class="btn btn-primary"></a>
<script src="scripts.js"></script>
</form>

</body>
</html>
