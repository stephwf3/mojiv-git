<?php

    require_once 'connexion.php';


    if($_POST)
    {      
        $resultat = $connexion->prepare("INSERT INTO user VALUES (NULL, :username, :password, :email ,:firstname, :lastname)");

        $_POST['mdp'] = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        $resultat->bindValue(':username', $_POST['pseudo'], PDO::PARAM_STR);
        $resultat->bindValue(':password', $_POST['mdp'], PDO::PARAM_STR);
        $resultat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $resultat->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
        $resultat->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
     
       
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

  <form method="post" action="" class="col-md-8 col-md-offset-2">
  <h2 class="alert alert-info text-center">Inscription</h2>
  <div class="form-group">
      <label for="lastname">Nom :</label>
      <input type="text" class="form-control" id="lastname" name="lastname">
  </div>
  <div class="form-group">
      <label for="firstname">Prénom :</label>
      <input type="text" class="form-control" id="firstname" name="firstname">
  </div>
  <div class="form-group">
      <label for="pseudo">Pseudo :</label>
      <input type="text" class="form-control" id="pseudo" name="pseudo">
  </div>
  <div class="form-group">
      <label for="mdp">Mot de passe :</label>
      <input type="password" class="form-control" id="mdp" name="mdp">
  </div>
  <div class="form-group">
      <label for="email">Email :</label>
      <input type="text" class="form-control" id="email" name="email">
  </div>
  <br/>
  <button type="submit" class="btn btn-success col-md-6 col-md-offset-3">Créer son compte</button>
</form>
    </body>
</html>
