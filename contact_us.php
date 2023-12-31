<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/contact_us.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/logo_fav.svg">
    <link rel="mask-icon" href="assets/img/logo_fav.svg">
    <title>Accueil</title>
</head>

<?php require_once('header.php'); ?>

<main>
    <div id="mainPage">
        <div id="rightSide">
            <div id="informationSocietyBlock">
                <section id="informationSociety">
                    <h1>Contactez-nous</h1>
                    <img src="/assets/img/blog-e-boulga-small-logo-black.svg" alt="small logo black">
                    <address>
                        <p>Blog-e-boulga Inc.</p>
                        <p>15 rue de la truffe <br />12345 Chat-City WORLD</p>
                        <p>Tel: 0123456789</p>
                        <p>Mail us: contact@blogeboulga.com</p>
                    </address>
                </section>
            </div>
        </div>

        <div id="contactUsBlock">

            <form action="controller/contact_form.php" method="post" class="contactUsForm">
                <p id="header-form">Contacter l’équipe e-Boulga</p>
                <div>
                    <label for="firstname">Votre prénom :<span class="asterix"> *</span></label>
                    <input id="prenom" class="input_form" type="text" name="firstname" placeholder="John" />
                    <small style="display: none;">Champs obligatoire</small>
                </div>
                <div>
                    <label for="name">Votre nom :<span class="asterix"> *</span></label>
                    <input id="nom" class="input_form" type="text" name="name" placeholder="Doe" />
                    <small style="display: none;">Champs obligatoire</small>
                </div>
                <div>
                    <label for="mail">Votre adresse mail :<span class="asterix"> *</span></label>
                    <input id="mail" class="input_form" type="email" name="mail" placeholder="john@doe.com" />
                    <small style="display: none;">Adresse valide requise</small>
                </div>
                <div>
                    <label for="subject">Sujet de votre message :<span class="asterix"> *</span></label>
                    <input id="subject" class="input_form" type="text" name="subject" placeholder="Propostion d'article" />
                    <small style="display: none;">Champs obligatoire</small>
                </div>
                <div>
                    <label for="message">Votre message :<span class="asterix"> *</span></label>
                    <textarea class="input_form" id="message" rows="5"></textarea>
                    <small style="display: none;">Champs obligatoire</small>
                </div>
                <div id="validationCheck">
                    <input class="input_form" type="checkbox" name="validation" id="validation" />
                    <label class="labelMod" for="validation">En cochant cette case, vous acceptez nos <a href="#">modalités et conditions</a> d'utilisation ainsi que notre <a href="#">politique de confidentitalité</a> pour la gestion des données fournies dans ce formulaire.<span class="asterix"> *</span></label>
                </div>
                <p id="msg_sent">Votre message a bien été envoyé !</p>
                <div id="validationButton">
                    <button name="envoyer" id="btn_submit" type="submit">Envoyer</button>
                </div>

            </form>
        </div>
    </div>
</main>
<script src="assets/js/header.js" defer></script>
<script src="assets/js/contact.js" defer></script>
</body>
<?php require_once('footer.php'); ?>

</html>