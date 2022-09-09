<?php

include('config/settings.php');

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('includes/head.php') ?>
        <title>Prévot Matériaux</title>
    </head>
    <body>
        <?php include('includes/header.php') ?>

        <section id="serv">
            <div class="services">
                <div class="cardActu">
                    <div class="titleActu">
                        <img src="public/asset/image/stock.jpg" alt="Image du stock">
                        <div class="bandeauActu">
                            <div>
                                <div class="ligne"></div>
                                <h4>Stock</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardActu">
                    <div class="titleActu">
                        <img src="public/asset/image/livraison.jpg" alt="Image de livraison">
                        <div class="bandeauActu">
                            <div>
                                <div class="ligne"></div>
                                <h4>Livraison</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services">
                <div class="cardActu">
                    <div class="titleActu">
                        <img src="public/asset/image/gravat.jpg" alt="Image de gravat">
                        <div class="bandeauActu">
                            <div>
                                <div class="ligne"></div>
                                <h4>Reprise des déchets et gravats</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardActu">
                    <div class="titleActu">
                        <img src="public/asset/image/devis.jpeg" alt="Image de devis">
                        <div class="bandeauActu">
                            <div>
                                <div class="ligne"></div>
                                <h4>Devis gratuits</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services">
                <div class="cardActu">
                    <div class="titleActu">
                        <img src="public/asset/image/ls.JPG" alt="Image du libre-service">
                        <div class="bandeauActu">
                            <div>
                                <div class="ligne"></div>
                                <h4>Libre-service</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include('includes/footer.php') ?>

        <script src="public/asset/js/menu.js" defer></script>
    </body>
</html>