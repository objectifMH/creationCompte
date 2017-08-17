<!DOCTYPE html>
<?php
require('utilisateur.php');
  //var_dump($_POST); 
  if (count($_POST)>0){
    if ( isset($_POST['prenom']) and  $_POST['prenom'] !="" 
    and isset($_POST['nom']) and  $_POST['nom'] !="" 
    and isset($_POST['mail']) and  $_POST['mail'] !=""
    and isset($_POST['username']) and  $_POST['username'] !=""
    and isset($_POST['mdp']) and  $_POST['mdp'] !="")
        {
             $utilisateur = new utilisateur($_POST['prenom'],$_POST['nom'],$_POST['username'],$_POST['mail'],$_POST['mdp']);
                 echo " <h4 class='colorGreen'> $utilisateur </h4> ";

        }
        else {
            echo " <h4 class='colorRed'>L'utilisateur n'a pas été créé</h4> ";
        }
}
  
?>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Supported Form Controls</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    h1{
        margin: 30px 0;
        padding: 0 200px 15px 0;
        border-bottom: 1px solid #E5E5E5;
        color:;
    }
	.bs-example{
    	margin: 20px;
    }
    .colorBlue{
        color:#2e6da4;
    }
    .colorRed{
        border:2px solid red;
        color:red;
        padding: 8px;
        border-radius: 8px;
       
    }
    .colorGreen{
        border:2px solid green;
        color:green;
        padding: 8px;
        border-radius: 8px;
        
    }
    .colorGrey{
        background-color: grey;
    }
    .colorWhite{
        color:white;
    }

    label{
        color:#337ab7;
    }
    h4{
        text-align: center;
        width: 40%;
        transform:translate(75%);
        box-shadow: 8px 8px 12px #aaa;
    }
    .taille{
        transform:translate(35%);
        width: 55%;
    }
</style>
</head>
<body>
<div class="taille">
<div class="bs-example">
    <h1 class="colorBlue">Création de Compte</h1>
    <form class="form-horizontal" name="creationFormulaire" method="POST" id="idCreationFormulaire">
        <div class="form-group">
            <label class="control-label col-xs-3" for="firstName">Prénom :</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="firstName" name="prenom" placeholder="Prenom">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="lastName">Nom :</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="lastName" placeholder="Nom" name="nom">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="userName">Username :</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="lastName" placeholder="Username" name="username">
            </div>
        </div>
		<div class="form-group">
            <label class="control-label col-xs-3" for="inputEmail">Addresse Mail:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" id="inputEmail" placeholder="michael@jackson.fr" name="mail">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputPassword">Mot de passe:</label>
            <div class="col-xs-9">
                <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" name="mdp">
            </div>
        </div>
       
       
       <!--  <div class="form-group">
            <label class="control-label col-xs-3" for="postalAddress">Postal Address:</label>
            <div class="col-xs-9">
                <textarea rows="3" class="form-control" id="postalAddress" placeholder="Postal Address"></textarea>
            </div>
        </div> -->
      <!--   <div class="form-group">
            <label class="control-label col-xs-3" for="ZipCode">Zip Code:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="ZipCode" placeholder="Zip Code">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Gender:</label>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="genderRadios" value="male"> Male
                </label>
            </div>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="genderRadios" value="female"> Female
                </label>
            </div>
        </div> -->
        
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Créer un compte">
                <input type="reset" class="btn btn-default colorGrey colorWhite" value="Réinitialiser" onclick="location.href='creationCompte.php'">
            </div>
        </div>
    </form>
</div>
</div>
</body>
</html>                                		