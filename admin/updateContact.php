<?php

include('../config/settings.php');

if(!isset($_SESSION['user'])){
    flash_in('error', 'Tu n\'as pas le droit d\'être là');
    header('Location:../index.php');
    exit();
}

$read = $db->prepare('SELECT * FROM contact WHERE id = :id');
$read->execute([
    ':id' => $_GET['id']
]);
$modif = $read->fetch();

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('../includes/head.php') ?>
        <link rel="stylesheet" href="../public/asset/css/reset.css">
        <link rel="stylesheet" href="../public/asset/css/style.css">
        <title>Prévot Matériaux</title>
    </head>
    <body>
        <section class="addBack">
            <?php include('../includes/navBack.php') ?>
            <div id="formContact">
                <h1 class="title"><div class="cercle"></div>Message de <?=$modif['civ']?> <?=$modif['surname']?></h1>
                <div id="contactBack">
                    <figcaption><label>Civilité:</label> <?= $modif['civ'] ?></figcaption>
                    <figcaption><label>Vous êtes:</label> <?= $modif['job'] ?></figcaption>
                    <figcaption><label>Point de vente concerné par la demande:</label> <?= $modif['depot'] ?></figcaption>
                    <figcaption><label>Nom:</label> <?= $modif['surname'] ?></figcaption>
                    <figcaption><label>Prénom:</label> <?= $modif['name'] ?></figcaption>
                    <figcaption><label>Téléphone:</label> <?= $modif['phone'] ?></figcaption>
                    <figcaption><label>Courriel:</label> <?= $modif['mail'] ?></figcaption>
                    <figcaption><label>Message:</label> <?= $modif['request'] ?></figcaption>
                </div>
            </div>
        </section>
    </body>
</html>