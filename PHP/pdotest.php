 <?php
 $pdo=new PDO('mysql:host=localhost;port=3306;dbname=misc','root','');

 $stmt=$pdo->query('select * from users ');
 while($row =$stmt->fetch(PDO::FETCH_ASSOC)){
     //fetch assoc means fetching the result as associate array
     print_r($row);
 };

echo "</pre>\n";
$stmt2=$pdo->query('SELECT name, email, password FROM users' );
echo '<table border="1">'."\n";
while($row =$stmt2->fetch(PDO::FETCH_ASSOC)){
    echo "<tr><td>";
    echo($row['name']);
    echo("</td><td>");
    echo($row['email']);
    echo("</td><td>");
    echo($row['password']);
    echo("</td></tr>\n");
}
echo "</table>\n";
// output (at table ) taha tahazalzali51@gmail.com 123
$pdo ->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
?>
