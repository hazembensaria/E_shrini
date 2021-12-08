<?php
class find{

   function getFinf($username,$pw,$pdo){
    $sql="select username , idgroup from users where username='".$username."'and password='".$pw."'";
$obj=$pdo->query($sql);// objet PDOStatement
// var_dump($obj);
$res=$obj->fetchAll();
// print_r($res);
//  echo $res[0][1];
return($res);
   }

   function getFindimg($username,$pdo){
      $sql="select img from users where username='".$username."'";
  $obj=$pdo->query($sql);// objet PDOStatement
  // var_dump($obj);
  $res=$obj->fetchAll();
  // print_r($res);
  //  echo $res[0][1];
  return($res);
     }




   
}