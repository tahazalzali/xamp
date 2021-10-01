<?php

require_once("pdo.php");


if(isset($_POST['name1'])){
   $sql ="DELETE FROM users WHERE name=:name";
   echo "<pre>\n $sql \n</pre>";
   $stmt = $pdo->prepare($sql);

   $stmt->execute(array(':name'=>$_POST['name1']));
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
<form method="POST">
<p>Enter name to delete<input type="text" name="name1" size="40"> </p>

<p><input type="submit" value="Delete"></p>
</form>
</body>
</html>
