<?php

include_once 'backend/dbh.inc.php';
    

$userquery = "SELECT * FROM rubros";
$userquery_result = mysqli_query($conn,$userquery);

$rubros = array();
if(mysqli_num_rows($userquery_result) > 0){
    while($row = mysqli_fetch_assoc($userquery_result)){
        $rubros[] = $row;
    }
}
?>