<?php

include('../config/settings.php');

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('../includes/head.php'); ?>
        <link rel="stylesheet" href="../public/asset/css/style.css">
        <title>Prévot Matériaux</title>
    </head>
    <body id="login">
        <section>
            <div>
                <img src="../public/asset/image/logoPrevotMateriaux.jpg" alt="Logo">
            </div>
            <form method="POST" action="core/login.php">
                <p>
                    <label for="pseudo">Votre identifiant</label>
                    <input type="text" name="name" id="pseudo" required>
                </p>
                <p>
                    <label for="pass">Votre mot de passe</label>
                    <input type="password" name="password" id="pass" required>
                </p>
                <p class="none">
                    <button type="submit">Connection</button>
                </p>
            </form>
        </section>
    </body>
</html>