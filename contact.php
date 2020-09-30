<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <script src="script.js"></script>
        <link rel="stylesheet" type="text/css" title="style" href="style.css"/>
        <link rel="alternate stylesheet" type="text/css" title="style2" href="style2.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="icon" type="image/jpg" href="Photos/shark.png"/>
        <meta name="description" content="Site Web personnel, projet de 3ème et 4ème année d'école d'ingénieur, filière génie biomédical, développement Web"/>
        <meta name="keywords" content="Johanna, Henry, mail, adresse, avis"/>
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="CV.php">CV</a></li>
                    <li><a href="Projets.php">Projets</a></li>
                    <li><a href="liens.php">Liens</a></li>
                    <li><a href="contact.php" id="currentTab">Contact</a></li>
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="contact_english.php" title="Version anglaise"><i class="fas fa-language"></i></a></li>
                    <li><a class="style2" href="#" onclick="setActiveStyleSheet('style2'); return false;"><i class="fas fa-arrow-alt-circle-right"></i></a></li>
                    <li><a class="style" href="#" onclick="setActiveStyleSheet('style'); return false;"><i class="fas fa-arrow-alt-circle-left"></i></a></li>
                </ul>
            </nav>
        </header>

        <h2 class="haut">Contactez-moi par mail</h2>
        <div class="avis">
            <div id="form_avis">
                <form action="mailto:johanna.henry13@gmail.com?content-type=text/html&amp;subject=Site%20Web" method="post" enctype="text/plain">
                    <div id="milieu">
                        <label for="prenom"></label><input id="prenom" type="text" name="Votre prénom " placeholder="Votre prénom"/><br><br>
                        <label for="nom"></label><input id="nom" type="text" name="Votre nom " placeholder="Votre nom"/><br><br>
                        <label for="email"></label><input id="email" type="text" name="Votre email " placeholder="Votre adresse mail"/><br><br>
                        <input id="sexeFemme" type="radio" name="Votre genre " value="femme"/><label for="sexeFemme">Femme</label>
                        <input id="sexeHomme" type="radio" name="Votre genre " value="homme"/><label for="sexeHomme">Homme</label><br/><br/>
                        Votre âge :<br>
                        <input type="radio" name="age" id="<18ans" value="<18ans"/><label for="moins18">Moins de 18 ans</label><br>
                        <input type="radio" name="age" id="15-25" value="15-25"/><label for="medium18-25">18-25 ans</label><br>
                        <input type="radio" name="age" id="25-40" value="25-40"/><label for="medium25-40">25-40 ans</label><br>
                        <input type="radio" name="age" id=">40" value=">40"/><label for="plus40">40 ans et plus</label><br/><br/>
                    </div>
                    <div id="centre">
                        <textarea name="impression" rows="5" cols="35" placeholder="Votre message..."></textarea><br/>
                        <input type="submit" value="Envoyer par mail"/>
                    </div>
                </form>
            </div>

            <div class=map>
                <iframe id="frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2906.928887713793!2d5.4409146153137!3d43.231950587585914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9b9abbf021187%3A0xee2fc84070e209f5!2s%C3%89cole%20polytechnique%20universitaire%20de%20Marseille!5e0!3m2!1sfr!2sfr!4v1601368396868!5m2!1sfr!2sfr" allowfullscreen=""></iframe>
            </div>
        </div>


        <!-- Pied de page-->
        <footer>
            <div class="pied_page">
                <div class="contact">
                    <p id="infos">
                        <i class="fas fa-female"></i>Johanna Henry<br>
                        <i class="fas fa-envelope"></i>johanna.henry13@gmail.com<br>
                        <i class="fas fa-phone"></i>06.30.26.49.84<br>
                        <i class="fas fa-home"></i>41 Boulevard de la Concorde<br>
                        <i class="fas fa-home"></i>13009 Marseille<br>
                    </p>
                    <div class=reseaux>
                        <a href="https://www.facebook.com/Johanna.Hnry"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/johanna_hnry/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/johanna-henry-64b775193/"><i class="fab fa-linkedin"></i></a>
                        <p>© Copyright 2019-2020</p>
                    </div>
                </div>
                <div class="verif">
                    <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fjohannahenry.alwaysdata.net%2Fcontact.php&profile=css3svg&usermedium=all&warning=no&vextwarning=&lang=fr">
                        <img src="Photos/css.png" alt="Valid CSS3"/>
                    </a>
                    <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fjohannahenry.alwaysdata.net%2Fcontact.php">
                        <img src="Photos/html.png" alt="Valid XHTML5"/>
                    </a>
                </div>
            </div>
        </footer>

    </body>
</html>
