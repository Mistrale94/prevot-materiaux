<?php

include('../config/settings.php');

if(!isset($_SESSION['user'])){
    flash_in('error', 'Tu n\'as pas le droit d\'être là');
    header('Location:../index.php');
    exit();
}

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('../includes/head.php'); ?>
        <title>Prévot Matériaux</title>
    </head>
    <body>
        <form method="POST" action="core/addUsers.php">
            <p>
                <label for="pseudo">Votre identifiant</label>
                <input type="text" name="name" placeholder="Votre identifiant" id="pseudo" required>
            </p>
            <p>
                <label for="pass">Votre mot de passe</label>
                <input type="password" name="password" placeholder="Votre mot de passe" id="pass" required>
            </p>
            <p>
                <label for="confirm">Confirmer votre mot de passe</label>
                <input type="password" name="confirmation" placeholder="Confirmer votre mot de passe" id="confirm" required>
            </p>
            <p>
                <button type="submit">Créer le compte</button>
            </p>
        </form>
    </body>
</html>