<?php

require_once("pdo.php");


if(isset($_POST['email'])&&isset($_POST['password']) ){

   $sql ="SELECT name FROM users WHERE email=:e
    AND password=:p";
   echo "<pre>\n $sql \n</pre>";
   $stmt = $pdo->prepare($sql);
   $stmt->execute(array(
    ':e'=>$_POST['email'],

   
   ':p'=>$_POST['password']//define placeholder p //define placeholder e
));

 $row=$stmt->fetch(PDO::FETCH_ASSOC);
 var_dump($row);
  echo "Taha checking row: $row";
  if($row==FALSE){
  echo "<h1>Login failed</h1>";

}else{
echo "<h1>Login success</h1>";
};
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form method="POST">
<p>Enter email and password to Login </p>
<form method="POST">
           <p>email<input type="text" name="email" > </p>
        <p>password<input type="text" name="password" size="40"> </p>
        <p><input type="submit" name="" value="login"></p>
    </form>

</form>
</body>
</html>
