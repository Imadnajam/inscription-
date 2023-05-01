



<?php
 
// cet code pour insérer les donnée dans une table :

$host="localhost";
$user="root";
$password="";
$dbname="test1";

$dsn="mysql:host=".$host.";dbname=".$dbname;
$pdo=new PDO($dsn,$user,$password);
$stmt= $pdo->query('SELECT * FROM persson');




// on va fait l' ensértion !

$numclient=$_GET['numclient'];
$nomclient=$_GET['nomclient'];
$adresse=$_GET['adresse'];
$Tel=$_GET['Tel'];

$sql='INSERT INTO persson(numclient,nomclient,adresse,Tel) VALUES(:numclient,:nomclient,:adresse,:Tel)';

$stmt=$pdo->prepare($sql);
$stmt->execute(["numclient"=>$numclient ,"nomclient"=>$nomclient ,"adresse" =>$adresse ,"Tel"=>$Tel]);




    
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stule.css">
    <title>Inscription</title>
</head>
<body>
    <form action="">
    <div id="d1">
        <span><h2>Registration</h2></span>
        <div id="d2">
            
                <label id="l1" for="Name">Name :</label><br><br>
                    <input type="text" placeholder="Entrer your name " required name="nomclient">
                  <br><br>
                <label id="l1" for="Email">Email :</label><br><br>
                    <input type="email" placeholder="Entrer your email " required>
                <br><br>
                <label id="l1" for="password">password :</label><br><br>
                    <input type="password" required>
                <br><br>
       
        </div>
        <div id="d3">
            
                <label id="l2" for="adresse">Adresse   :</label><br><br> <input type="text" placeholder="Entre your adresse" name="adresse"><br><br>
                <label id="l2" for="Tel" >Phone Numbre :</label><br><br><input type="tel" placeholder="Entre your numbre" name="Tel"><br><br>
                <label id="l2" for="numclient">Num :</label><br><br><input type="number" placeholder="confirm your num"  name="numclient"><br><br>
          
           
        </div>
        <br>
    
        <h2 id="h3">Gender :</h2>
        <div id="d4">
        <label for="Gender">
            <input type="radio" name="Gender" value="Home">Male<input type="radio" name="Gender" value="Femme">Female<input type="radio" name="Gender" value="outre">Prefer not to say
        </label>
        <br><br>
        <input id="b1" type="submit" value="Register" formmethod="$_POST">
    </div>
    </div>
    </form>
    
</body>
</html>