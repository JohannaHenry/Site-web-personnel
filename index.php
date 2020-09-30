<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Johanna Henry</title>
        <meta charset="UTF-8">
        <script src="script.js"></script>
        <link rel="stylesheet" type="text/css" title="style" href="style.css"/>
        <link rel="alternate stylesheet" type="text/css" title="style2" href="style2.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="icon" type="image/jpg" href="Photos/shark.png"/>
        <meta name="description" content="Site Web personnel, projet de 3ème et 4ème année d'école d'ingénieur, filière génie biomédical, développement Web"/>
        <meta name="keywords" content="Johanna, Henry, site, Web, Polytech, génie, biomédical"/>
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php" id="currentTab">Accueil</a></li>
                    <li><a href="CV.php">CV</a></li>
                    <li><a href="Projets.php">Projets</a></li>
                    <li><a href="liens.php">Liens</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="index_english.php" title="Version anglaise"><i class="fas fa-language"></i></a></li>
                    <li><a class="style2" href="#" onclick="setActiveStyleSheet('style2'); return false;"><i class="fas fa-arrow-alt-circle-right"></i></a></li>
                    <li><a class="style" href="#" onclick="setActiveStyleSheet('style'); return false;"><i class="fas fa-arrow-alt-circle-left"></i></a></li>
                </ul>
            </nav>
        </header>

        <div class="en-tête">
            <div>
                <img id="portrait" src="Photos/Johanna_Henry" alt="Photo de Johanna Henry"/>
            </div>
            <div class="header_center">
                <p>Johanna Henry<br>Site Web personnel</p>
            </div>
            <div>
                <a href="https://polytech.univ-amu.fr/"><img id="logo_polytech" src="Photos/logo_polytech.png" alt="Logo de Polytech"></a>
            </div>
        </div>

        <div class="Presentation">
            <p id="bienvenue">
                Bienvenue sur mon site Web !
            </p>
            <p>
                Je m'apelle Johanna Henry, j'ai 21 ans et j'habite à Marseille. Je suis actuellement étudiante en cinquième et dernière année de cycle ingénieur à Polytech Marseille. J'ai intégré la filière génie biomédical de Polytech après deux années de classes préparatoires aux grandes écoles. Ce site a été réalisé dans le cadre d'un projet de développement Web ayant pour but d'apprendre à coder en HTML, CSS, JavaScript et PHP. Vous y trouverez diverses informations me concernant, et vous pouvez vous inscrire sur mon forum pour y laisser des messages. N'hésitez pas à me donner votre avis concernant ce site Web.
            </p>
            <p id="bonne_visite">
                Bonne visite !
            </p>
        </div>

        <!-- Bouton haut de page-->
        <div class=top>
            <a href="#top" title="haut de page"><i class="fas fa-arrow-circle-up"></i></a><br><br>
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
                    <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fjohannahenry.alwaysdata.net%2Findex.php&profile=css3svg&usermedium=all&warning=no&vextwarning=&lang=fr">
                        <img src="Photos/css.png" alt="Valid CSS3"/>
                    </a>
                    <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fjohannahenry.alwaysdata.net%2Findex.php">
                        <img src="Photos/html.png" alt="Valid XHTML5"/>
                    </a>
                </div>
            </div>
        </footer>

    </body>
</html>