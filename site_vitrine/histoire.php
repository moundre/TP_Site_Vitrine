<?php
    $resultat=require_once("connection.php");
    $id = $_GET['id'];
    $req=$pdo->prepare("SELECT * FROM personnage WHERE id=$id");
    $req->execute();
    $test=$req->fetch(); 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Historique</title>
</head>
<body>
    
        <p> 
        <?= $test['nom_complet'] ?><br>
        <img src="images/<?= $test['nom_image'] ?>" alt=""><br>
         <?= $test['historique'] ;?>
         
        </p> 
 
    
</body>
</html>