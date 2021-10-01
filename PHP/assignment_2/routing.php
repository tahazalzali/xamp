<?php
session_start();
if(isset($_POST['where'])){
    if($_POST['where']==1){

    }
    else if ($_POST['where']==2){
        header("Locaton: redir2.php?parm=123");
    }
    else{
        header("Location: https://www.google.com");
        return;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting</title>
</head>
<body style="font-family: sans-serif;">
    <p>I am a router too </p>
    <form action="" method="POST">

<p><label for="inp9">Where to go? </label>
<input type="text" name="where" id="inp9" size="5"></p>    
<input type="submit" >
</form>
</body>
</html>