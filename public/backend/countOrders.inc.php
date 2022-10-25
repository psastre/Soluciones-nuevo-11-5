<?php


include_once 'backend/dbh.inc.php';
if(isset($_SESSION["userEmail"])){
  $userid= $_SESSION["userId"];

  $useridquery = "SELECT * FROM pedidos WHERE userid = '$userid'";
  $useridquery_result = mysqli_query($conn,$useridquery);
  
  $userpedidos = array();
  if(mysqli_num_rows($useridquery_result) > 0){
      while($row = mysqli_fetch_assoc($useridquery_result)){
          $userpedidos[] = $row;
      }
  }
  $numPedidos=  count($userpedidos);
 
  
  }

  ?>