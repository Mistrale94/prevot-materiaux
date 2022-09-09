<?php

include('../config/settings.php');

if (!isset($_SESSION['user'])){
    flash_in('error', 'Tu n\'as pas le droit d\'être là.');
    header('Location:../index.php');
    exit();
}

$conta = $db->prepare('SELECT * FROM contact');
$conta->execute();

$tConta = $conta->fetchAll(PDO::FETCH_ASSOC);

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
                <div class='heading'>
                    <h2><div class="cercle"></div>Contact</h2>
                </div>
                <?php foreach ($tConta as $value) { ?>
                <figure>
                    <figcaption><?= $value['civ'] ?></figcaption>
                    <figcaption><?= $value['surname'] ?></figcaption>
                    <figcaption><?= $value['name'] ?></figcaption>
                    <figcaption><?= $value['depot'] ?></figcaption>
                    <div class='icon'>
                        <a href="../admin/updateContact.php?id=<?= $value['id']?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z"/></svg></a>
                        <a href="core/deletContact.php?id=<?= $value['id']?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3 6v18h18v-18h-18zm5 14c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-10c0-.552.448-1 1-1s1 .448 1 1v10zm4-18v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.315c0 .901.73 2 1.631 2h5.712z"/></svg></a>
                    </div>
                </figure>
                <?php } ?>
            </div>
        </section>

        <?php include('../includes/footer.php') ?>
        
    </body>
</html>