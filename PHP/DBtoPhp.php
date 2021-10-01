<?php 
require_once("pdo.php");


if(isset($_POST['name'])&& isset($_POST['email'])&&
 isset($_POST['password'])){
     $sql="INSERT INTO  users(name, email, password) VALUES (:name,:email,:password)";
     echo("<pre>\n".$sql."\n</pre>\n");
     $stmt=$pdo->prepare ($sql);
     $stmt->execute(array(':name'=>$_POST['name'],
     ':email'=>$_POST['email'],
     ':password'=>$_POST['password']));
 
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New user </title>
</head>
<body> <strong>
    <a style="text-decoration: none; color: blue;" 
    href="login.php">Login </a></strong>   

    <p>Add new user </p>
    <form method="POST">
        <p>name<input type="text" name="name" size="40"> </p>
        <p>email<input type="text" name="email" > </p>
        <p>password<input type="text" name="password" > </p>
        <p><input type="submit" name="" value="Add New"></p>
    </form>
 <strong><a style="text-decoration: none; color: blue;" href="delete.php">Delete a user </a></strong>   
</body>
</html>