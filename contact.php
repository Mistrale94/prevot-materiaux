<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include('includes/head.php') ?>
        <title>Prévot Matériaux - Nous contacter</title>
    </head>
    <body>
        <?php include('includes/header.php') ?>

        <section id="map">
            <h2 class="title"><div class="cercle"></div>Où nous trouver</h2>

            <div>
                <img src="public/asset/image/prevot.JPG" alt="Dépôt Prévot Cartier">
                <div class="text">
                    <h5><div class="cercle"></div>Prévot Cartier</h5>
                    <a href="https://g.page/prevotcartier?share">97 Avenue Jean Mermoz,</br>93120 La Courneuve</a>
                    <span>01.48.36.34.01</span>
                    <p>Du lundi au vendredi</br>07H00-12H00</br>13H00-17H00</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2621.0973816867977!2d2.4054799156770312!3d48.932586979294854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66c79d72973e7%3A0xc431933a464e6a9a!2sPrevot%20Cartier!5e0!3m2!1sfr!2sfr!4v1619593551798!5m2!1sfr!2sfr" loading="lazy"></iframe>
            </div>
            <div>
                <img src="public/asset/image/montreuil.JPG" alt="Dépôt Montreuil Matériaux">
                <div class="text">
                    <h5><div class="cercle"></div>Montreuil Matériaux</h5>
                    <a href="https://g.page/montreuilmateriaux?share">188 Boulevard de la Boissière,</br>93100 Montreuil</a>
                    <span>01.45.28.53.91</span>
                    <p>Du lundi au vendredi</br>07H00-12H00</br>13H30-17H00</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d164.0011743105693!2d2.4634610595774373!3d48.87691836375713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e612cbc59ac43b%3A0x20b0edc08c69e6a8!2sMontreuil%20Mat%C3%A9riaux!5e0!3m2!1sfr!2sfr!4v1619594999659!5m2!1sfr!2sfr" loading="lazy"></iframe>
            </div>
            <div>
                <img src="public/asset/image/dock.jpg" alt="Dépôt Dock d'Annet">
                <div class="text">
                    <h5><div class="cercle"></div>Docks d'Annet</h5>
                    <a href="https://goo.gl/maps/bhSFdT8KRk1PqdvD8">21 Route de la Pomponnette,</br>77410 Villevaudé</a>
                    <span>01.60.94.89.40</span>
                    <p>Du lundi au vendredi</br>07H00-12H00</br>13H30-17H00</p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.683205694697!2d2.662358915854669!3d48.90237430556245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61a69d5ca10a7%3A0xa0f596fabc64037b!2sDocks%20d&#39Annet!5e0!3m2!1sfr!2sfr!4v1619596581704!5m2!1sfr!2sfr" loading="lazy"></iframe>
            </div>
        </section>
        <section id="media">
            <h2 class="title"><div class="cercle"></div>Nos réseaux sociaux</h2>
            <div>
                <a href="https://www.facebook.com/Pr%C3%A9vot-Mat%C3%A9riaux-100489468262207" target="_blank">
                    <img src="public/asset/image/logo-facebook.png" alt="Logo Facebook">
                    <h6>Facebook</h6>
                </a>
                <a href="https://www.linkedin.com/company/37421233/" target="_blank">
                    <img src="public/asset/image/logo-linkedin.png" alt="Logo Linkedin">
                    <h6>Linkedin</h6>
                </a>
                <a href="https://www.instagram.com/prevotmateriaux/" target="_blank">
                    <img src="public/asset/image/logo-instagram.png" alt="Logo Instagram">
                    <h6>Instagram</h6>
                </a>
                <a href="mailto:commercialpc@prevotmateriaux.fr" target="_blank">
                    <img src="public/asset/image/logo-mail.png" alt="Logo Mail">
                    <h6>Email</h6>
                </a>
            </div>
        </section>
        <section id="contact">
            <h2 class="title"><div class="cercle"></div>Nous contacter</h2>
            <form method="POST" action="admin/core/addContact.php">
                <div>
                    <p>
                        <span>Civilité * :</span>
                        <input type="radio" name="civ" id="madame" value="Madame">
                        <label for="madame" required>Madame</label>

                        <input type="radio" name="civ" id="monsieur" value="Monsieur">
                        <label for="monsieur" required>Monsieur</label>
                    </p>
                    <p>
                        <span>Vous êtes * :</span>
                        <input type="radio" name="job" id="pro" value="Professionnel">
                        <label for="pro" required>Professionel</label>

                        <input type="radio" name="job" id="particulier" value="Particulier" required>
                        <label for="particulier">Particulier</label>
                    </p>
                    <p>
                        <span>Dépôt * :</span>
                        <input type="radio" name="depot" id="pv" value="Prévot Cartier">
                        <label for="pv" required>Prévot Cartier</label>

                        <input type="radio" name="depot" id="mm" value="Montreuil Matériaux">
                        <label for="mm" required>Montreuil Matériaux</label>

                        <input type="radio" name="depot" id="da" value="Docks D'Annet">
                        <label for="da" required>Docks D'Annet</label>
                    </p>
                </div>
                <div>
                    <p class="form">
                        <label for="nom">Nom *</label>
                        <input type="text" name="surname" id="nom" required>
                    </p>
                    <p class="form">
                        <label for="prenom">Prénom *</label>
                        <input type="text" name="name" id="prenom" required>
                    </p>
                </div>
                <div>
                    <p class="form">
                        <label for="telephone">Téléphone *</label>
                        <input type="text" name="phone" id="telephone" required>
                    </p>
                    <p class="form">
                        <label for="email">Email *</label>
                        <input type="text" name="mail" id="email" required>
                    </p>
                </div>
                <p class="form">
                    <label for="message">Message *</label>
                    <textarea name="request" id="message" required></textarea>
                </p>
                <p>
                    <button type="submit" id="button">Envoyer</button>
                </p>
            </form>
        </section>

        <?php include('includes/footer.php') ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer></script>
        <script src="public/asset/js/script.js" defer></script>
        <script src="public/asset/js/menu.js" defer></script>
    </body>
</html>