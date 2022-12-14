<?php

include('config/settings.php');

$promo = $db->prepare('SELECT * FROM promotion');
$promo->execute();

$tPromo = $promo->fetchAll(PDO::FETCH_ASSOC);

$actu = $db->prepare('SELECT * FROM actuality ORDER BY date DESC');
$actu->execute();

$tActu = $actu->fetchAll(PDO::FETCH_ASSOC);

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('includes/head.php') ?>
        <title>Prévot Matériaux</title>
    </head>
    <body>
        <?php include('includes/header.php') ?>

        <section id="img">
            <div id="carousel-head">
                <img src="public/asset/image/accueil1.jpg" alt="Image accueil">
                <img src="public/asset/image/accueil2.JPG" alt="Image accueil">
                <img src="public/asset/image/accueil3.JPG" alt="Image accueil">
            </div>
            <div class="text-head">
                <div class="ligne"></div>
                <div class="text">
                    <h1>Négoces de Matériaux de Construction</h1>
                    <h2>Prévot Matériaux</h2>
                </div>
            </div>
        </section>
        <section id="actu">
            <h2 class="title"><div class="cercle"></div>Nos actualités</h2>
            <div class="container">
                <?php foreach ($tActu as $values) { ?>
                <div class="cardActu">
                    <div class="titleActu">
                        <img src="admin/data/<?= $values['file']?>" alt="Image actualité">
                        <div class="bandeauActu">
                            <div>
                                <div class="ligne"></div>
                                <h4><?= $values['title'] ?></h4>
                            </div>
                        </div>
                    </div>
                    <h6><?= $values['date']?></h6>
                    <p><?= $values['description']?></p>
                </div>
                <?php } ?>
            </div>
        </section>
        <section id="promo">
            <h2 class="title"><div class="cercle"></div>Nos promotions</h2>
            <div id="card-slider">
                <?php 
                    if($tPromo == null){
                        echo '<p class="promo-null">Pas de promotion pour l\'instant</p>';
                    }else{
                        foreach ($tPromo as $valuesp) { ?>
                        <div class="card">
                            <img src="admin/data/<?= $valuesp['file'] ?>" alt="Image promotion">
                            <div class="card-text">
                                <h2><?= $valuesp['title'] ?></h2>
                                <p>Jusqu'au <?= $valuesp['date'] ?></p>
                                <p><?= $valuesp['description'] ?></p>
                            </div>
                        </div>    
                    <?php
                        } 
                    } 
                    ?>
            </div>
        </section>
        
        <?php include('includes/footer.php') ?>

        <script>
            window.axeptioSettings = {
            clientId: "631b40e80133e9e5bfa6b59c",
            cookiesVersion: "prevotmateriaux-fr",
            };
            
            (function(d, s) {
            var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
            e.async = true; e.src = "//static.axept.io/sdk.js";
            t.parentNode.insertBefore(e, t);
            })(document, "script");
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>
        <script src="public/asset/js/script.js" defer></script>
        <script src="public/asset/js/menu.js" defer></script>
    </body>
</html>