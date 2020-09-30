<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Liens</title>
        <meta charset="UTF-8">
        <script src="script.js"></script>
        <link rel="stylesheet" type="text/css" title="style" href="style.css"/>
        <link rel="alternate stylesheet" type="text/css" title="style2" href="style2.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="icon" type="image/jpg" href="Photos/shark.png"/>
        <meta name="description" content="Site Web personnel, projet de 3ème et 4ème année d'école d'ingénieur, filière génie biomédical, développement Web"/>
        <meta name="keywords" content="Johanna, Henry, site, Web, Polytech, maths, physique, informatique"/>
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="CV.php">CV</a></li>
                    <li><a href="Projets.php">Projets</a></li>
                    <li><a href="liens.php" id="currentTab">Liens</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="liens_english.php" title="Version anglaise"><i class="fas fa-language"></i></a></li>
                    <li><a class="style2" href="#" onclick="setActiveStyleSheet('style2'); return false;"><i class="fas fa-arrow-alt-circle-right"></i></a></li>
                    <li><a class="style" href="#" onclick="setActiveStyleSheet('style'); return false;"><i class="fas fa-arrow-alt-circle-left"></i></a></li>
                </ul>
            </nav>
        </header>

        <h2 class="haut">Quelques sites intéressants</h2>
        <div class="liens">
            <div class="links">
                <a href="http://rebelles.gilles.free.fr/" title="Mathématiques" target="_blank"><i class="fas fa-calculator"></i></a>
                <a href="http://infojeanat.cluster005.ovh.net/PSIE.html" title="Informatique" target="_blank"><i class="fab fa-python"></i></a>
                <a href="http://gery.huvent.pagesperso-orange.fr/html/exos_kholle.htm" title="Exercices de maths" target="_blank"><i class="fas fa-square-root-alt"></i></a>
            </div>
            <div class="links">
                <a href="https://www.w3schools.com/" title="Tutoriels Web" target="_blank"><i class="fas fa-keyboard"></i></a>
                <a href="http://www.mickael-martin-nevot.com/" title="Développement Web" target="_blank"><i class="fas fa-desktop"></i></a>
                <a href="https://www.alsacreations.com/tuto/liste/1-html.html" title="Tutoriels html" target="_blank"><i class="fas fa-glasses"></i></a>
            </div>
            <div class="links">
                <a href="https://polytech.univ-amu.fr/formations/cycle-ingenieur/genie-biomedical" title="Polytech Marseille Génie Biomédical" target="_blank"><i class="fas fa-heartbeat"></i></a>
                <a href="https://www.univ-amu.fr/fr/universite" title="Aix-Marseille université" target="_blank"><i class="fas fa-book"></i></a>
                <a href="https://chimie-pcsi-jds.net/" title="Chimie" target="_blank"><i class="fas fa-atom"></i></a>
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
                    <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fjohannahenry.alwaysdata.net%2Fliens.php&profile=css3svg&usermedium=all&warning=no&vextwarning=&lang=fr">
                        <img src="Photos/css.png" alt="Valid CSS3"/>
                    </a>
                    <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fjohannahenry.alwaysdata.net%2Fliens.php">
                        <img src="Photos/html.png" alt="Valid XHTML5"/>
                    </a>
                </div>
            </div>
        </footer>

    </body>
</html>