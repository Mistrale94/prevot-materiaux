<div class="navBack">
    <aside>
        <?php
            if(!empty($_SESSION['user']))
                echo '<p>Bonjour '.$_SESSION['user']['username'].' !</p>';
            flash_out(); ?>
    </aside>
    <a href="promoBack.php">
        <div class="cercle"></div>
        Promotions
    </a>
    <a href="actuBack.php">
        <div class="cercle"></div>
        Actualités
    </a>
    <a href="chantierBack.php">
        <div class="cercle"></div>
        Chantiers
    </a>
    <a href="contactBack.php">
        <div class="cercle"></div>
        Contact
    </a>
    <a href="core/logout.php" class="none">
        <div class="cercle"></div>
        Deconnexion
    </a>
</div>