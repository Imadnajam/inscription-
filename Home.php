<?php
$host="localhost";
$user="root";
$password="";
$dbname="test1";

$dsn="mysql:host=".$host.";dbname=".$dbname;
$pdo=new PDO($dsn,$user,$password);
$stmt= $pdo->query('SELECT * FROM persson');
while($row = $stmt->fetch(PDO::FETCH_BOTH));
echo $row['numclient'] . '<br>';

?>
