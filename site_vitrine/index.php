<?php
    $resultat=require_once("connection.php");
  
    //recuperation des donnes de la base de donnees
    $recup=$pdo->prepare("SELECT * FROM personnage");
    $recup->execute();
    // var_dump($resultat); ce code permet de retourner tout les lignes de la base de donnes 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Accueil</title>
</head>
<body>
    <header><h1>Quelques Grandes Personnalités dans le domaine du Numérique</h1></header>
<div  class="container mt-5">

    <div class="row col-md-12">
        <?php while($historique=$recup->fetch()){ ?>

        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <a href="histoire.php?id=<?= $historique['id'] ?>" >
                <img src="images/<?= $historique['nom_image']?>" alt="">
                <div class="card-body">
                </a>
                <h5 class="card-title"><strong><?= $historique['nom_complet'] ?></strong></h5>
            </div> 
        </div>
        </div>
        <?php } ?> 
 </div>    
        
</div>
    
    
</body>
</html>