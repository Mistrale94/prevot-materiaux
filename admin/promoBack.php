<?php

include('../config/settings.php');

if (!isset($_SESSION['user'])){
    flash_in('error', 'Tu n\'as pas le droit d\'être là.');
    header('Location:../index.php');
    exit();
}

$promo = $db->prepare('SELECT * FROM promotion');
$promo->execute();

$tPromo = $promo->fetchAll(PDO::FETCH_ASSOC);

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
            <div>
                <div class='heading'>
                    <h2><div class="cercle"></div>Promotions</h2>
                    <a href="addPromoBack.php">Poster</a>
                </div>
                <?php foreach ($tPromo as $value) { ?>
                <figure>
                    <img src="data/<?= $value['file']?>" alt="Image promotion">
                    <figcaption><?= $value['title'] ?></figcaption>
                    <figcaption><?= $value['description'] ?></figcaption>
                    <figcaption class='date'><?= $value['date'] ?></figcaption>
                    <div class='icon'>
                        <a href="updatePromo.php?id=<?= $value['id']?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M1.439 16.873l-1.439 7.127 7.128-1.437 16.873-16.872-5.69-5.69-16.872 16.872zm4.702 3.848l-3.582.724.721-3.584 2.861 2.86zm15.031-15.032l-13.617 13.618-2.86-2.861 10.825-10.826 2.846 2.846 1.414-1.414-2.846-2.846 1.377-1.377 2.861 2.86z"/></svg></a>
                        <a href="core/deletPromo.php?id=<?= $value['id']?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3 6v18h18v-18h-18zm5 14c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm4-18v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.315c0 .901.73 2 1.631 2h5.712z"/></svg></a>
                    </div>
                </figure>
                <?php } ?>
            </div>
        </section>
        
    </body>
</html>