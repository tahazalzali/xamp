<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
date_default_timezone_set('Amertica/New__York');
$nexWeek= time()+(7*24*60*60);
echo "Now:     ".date('Y-m-d')."\n <br>";
echo "Next Week: ".date('Y-m-d',$nexWeek)."\n <br>";
echo ("=====\n");
$now =new DateTime();
$nexWeek =new DateTime('today +1 week');
echo "Now:     ".$now->format('Y-m-d')."\n <br>";
echo "Next Week: ".$nexWeek->format('Y-m-d')."\n <br>";
 
?>
</body>
</html>