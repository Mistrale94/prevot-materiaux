<?php

include('config/settings.php');

$const = $db->prepare('SELECT * FROM construction');
$const->execute();

$tConst = $const->fetchAll(PDO::FETCH_ASSOC);

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('includes/head.php') ?>
        <title>Prévot Matériaux</title>
    </head>
    <body>
        <?php include('includes/header.php') ?>
        
        <section id="nous">
            <img src="public/asset/image/bannieresite.png" alt="Bannière">
            <div class="banner-us">
                <h2 class="title"><div class="cercle"></div>Qui sommes-nous ?</h2>
                <p>Entreprise familiale fondée en 1913, nous commercialisons tous types de matériaux en gros œuvre et second œuvre pour vos projets de construction et de rénovation. Nos points forts : Accueil, sens de l'écoute, conseil, réactivité, flexibilité et suivi.</p>
            </div>
            
        </section>
        
        <section id="chantier">
            <h2 class="title">
                <div class="cercle"></div>
                Nos chantiers
            </h2>
            <div class="container">
                <?php foreach ($tConst as $value) { ?>
                <div class="img">
                    <img src="admin/data/<?= $value['file']?>" alt="Image de chantier">
                    <div class="bandeau">
                        <div class="text">
                            <div>
                                <div class="ligne"></div>
                                <h4><?= $value['title']?></h4>
                            </div>
                            <p><?= $value['description']?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
        <section id="catalogue">
            <h2 class="title"><div class="cercle"></div>Notre catalogue</h2>
            <div>
                <img src="public/asset/image/negoguide2020site.jpg" alt="Catalogue Starmat 2020">
                <div class="com">
                    <p>
                        Découvrez notre catalogue NEGOGUIDE dans plus de 428 pages de produits et de fournisseurs répartis dans 10 familles métiers ainsi que des points « réglementation – norme » et des conseils de mise en œuvre.
                    </p>
                    <div class="cercle"></div>
                    <div id="stats">
                        <div>
                            <h3>38 000</h3>
                            <h4>références</h4>
                        </div>
                        <div>
                            <h3>428</h3>
                            <h4>pages</h4>
                        </div>
                        <div>
                            <h3>10</h3>
                            <h4>familles de métiers</h4>
                        </div>
                    </div>
                    <a href="https://starmat.negoguide.fr/" target="_blank">Consultez notre catalogue NEGOGUIDE et nos NEGOCONSEILS</a>
                </div>
            </div>
        </section>
        <section id="partenaires">
            <h2 class="title">
                <div class="cercle"></div>
                Nos partenaires
            </h2>
            <div id="carrou">
                <div>
                    <div class="part">
                        <figure>
                            <img src="public/asset/image/partenaires/calcia.svg" alt="Partenaires">
                        </figure>
                        <figure>
                            <img src="public/asset/image/partenaires/fabemi.svg" alt="Partenaires">
                        </figure>
                        <figure>
                            <img src="public/asset/image/partenaires/fusco.png" alt="Partenaires">
                        </figure>
                        <figure>
                            <img src="public/asset/image/partenaires/geofennel.png" alt="Partenaires">
                        </figure>
                        <figure>
                            <img src="public/asset/image/partenaires/isolava.png" alt="Partenaires">
                        </figure>
                        <figure>
                            <img src="public/asset/image/partenaires/knauf.svg" alt="Partenaires">
                        </figure>
                        <figure>
                            <img src="public/asset/image/partenaires/lafarge.svg" alt="Partenaires">
                        </figure>
                        <figure>
                            <img src="public/asset/image/partenaires/lanko.svg" alt="Partenaires">
                        </figure>
                        <figure>
                            <img src="public/asset/image/partenaires/projahn.png" alt="Partenaires">
                        </figure>
                        <figure>
                            <img src="public/asset/image/partenaires/richter.jpg" alt="Partenaires">
                        </figure>
                        <figure>
                            <img src="public/asset/image/partenaires/scierie-renaud.webp" alt="Partenaires">
                        </figure>
                        <figure>
                            <img src="public/asset/image/partenaires/sidamo.svg" alt="Partenaires">
                        </figure>
                        <figure>
                            <img src="public/asset/image/partenaires/taliaplast.svg" alt="Partenaires">
                        </figure>
                        <figure>
                            <img src="public/asset/image/partenaires/weber.png" alt="Partenaires">
                        </figure>
                        <figure>
                            <img src="public/asset/image/partenaires/wienerberger.svg" alt="Partenaires">
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <?php include('includes/footer.php') ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>
        <script src="public/asset/js/script.js" defer></script>
        <script src="public/asset/js/menu.js" defer></script>
    </body>
</html>