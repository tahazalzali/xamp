<?php
// Note - cannot have any output before the session_statrt() function;
// otherwise, the session will not be started.
session_start();

if (!isset($_SESSION['pizza'])){
    echo ("<p> Session is empty </p>");
    $_SESSION['pizza']=0;
}
else if ($_SESSION['pizza']<3) {
$_SESSION['pizza']=$_SESSION['pizza']+1;
echo "<p>Added one ... </P>";}
else {
    session_destroy();
    session_start();
    echo("<p> Session Restarted </p> \n");
}

?>
<p><a href="#">CLICK ME</a></p>
<p>Our Session Is is : <?php echo session_id() ?></p>
<pre>
    <?php print_r($_SESSION)?>
</pre>