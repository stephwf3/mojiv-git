<?php

    require_once 'connexion.php';


    if($_POST)
    {      
        $resultat = $connexion->prepare("INSERT INTO game VALUES (NULL, :title, :description, 'photo' ,:category, 1)");

        //$content .= '<div class="alert alert-success col-md-8 col-md-offset-2 text-center">Produit enregistré !</div>';
   
        // on définit les valeurs des marqueurs que l'on va rentrer dans la base
        $resultat->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
        $resultat->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
        $resultat->bindValue(':category', $_POST['category'], PDO::PARAM_STR);
     
       
        $resultat->execute(); // on exécute la requête SQL       
    }
?> 



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Moi JV</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <form method="post" action="" enctype="multipart/form-data" class="col-md-4 col-md-offset-4">
        <h2 class="alert alert-info text-center">Enregistrement d'un jeu</h2>
            
            <div class="form-group">
                <label for="title">Titre :</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <textarea class="form-control" rows="3" id="description" name="description" placeholder="Entrez la description du jeu" style="resize: none;"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image :</label>
                <input type="file" id="image" name="image"><br>
            </div>
            <div class="form-group">
                <label for="category">Catégorie :</label>
                <select type="text" class="form-control" id="category" name="category">
                    <option>FPS</option>
                    <option>RPG</option>
                    <option>Puzzle Game</option>
                </select>
            </div>
            <br/>
            <button type="submit" class="btn btn-success col-md-6 col-md-offset-3">Enregistrer le jeu</button>
        </form>
    </body>
</html>
