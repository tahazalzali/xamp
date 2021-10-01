<!-- Error_3 -->
<?php
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try{
    $stmt=$pdo->prepare("SELECT *  FROM users  WHERE  user_id=:xyz");
  $stmt-> execute(array(":pizza"=>$_GET['user_id'])); 
} catch(Exception $e){
    echo"Inernal error, please contact support";
    error_log("error.php, SQL error= ".$e->getMessage());
   return;
}
$row= $stmt ->fetch(PDO::FETCH_ASSOC);
//Eroor_4
?>