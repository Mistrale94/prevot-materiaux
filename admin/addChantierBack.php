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
        <?php include('../includes/head.php') ?>
        <link rel="stylesheet" href="../public/asset/css/reset.css">
        <link rel="stylesheet" href="../public/asset/css/style.css">
        <title>Prévot Matériaux</title>
    </head>
    <body>
        <section class="addBack">
            <?php include('../includes/navBack.php') ?>
            
            <div class="formAdd">
                <h1 class="title"><div class="cercle"></div>Ajouter un chantier</h1>
                <div>
                    <form method="POST" action="core/addChantier.php" enctype="multipart/form-data">
                        <p class="addFile">
                            <label for="more"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z"/></svg></label>
                            <input type="file" name="fichier" id="more" onchange="getImage(this.value);" required>
                            <div id="display-image"></div>
                        </p>
                        <p>
                            <input type="text" name="title" placeholder="Nom du chantier" required>
                        </p>
                        <p>
                            <input type="date" name="date" class="date" required>
                        </p>
                        <p>
                            <textarea type="text" name="description" placeholder="Description du chantier" required></textarea>
                        </p>
                        <p>
                            <button type="submit">Validate</button>
                        </p>
                    </form>
                </div>
            </div>
        </section>

        <script>
            function getImage(imageName){
            var newimg=imageName.replace(/^.*\\/,"");
            $('#display-image').html(newimg);
            }
        </script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    </body>
</html>