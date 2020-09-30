<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Projets</title>
        <meta charset="UTF-8">
        <script src="script.js"></script>
        <link rel="stylesheet" type="text/css" title="style" href="style.css"/>
        <link rel="alternate stylesheet" type="text/css" title="style2" href="style2.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="icon" type="image/jpg" href="Photos/shark.png"/>
        <meta name="description" content="Site Web personnel, projet de 3ème et 4ème année d'école d'ingénieur, filière génie biomédical, développement Web"/>
        <meta name="keywords" content="Johanna, Henry, projets, TIPE, MCOT, Intrabeam, biomédical"/>
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="CV.php">CV</a></li>
                    <li><a href="Projets.php" id="currentTab">Projets</a></li>
                    <li><a href="liens.php">Liens</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="Projets_english.php" title="Version anglaise"><i class="fas fa-language"></i></a></li>
                    <li><a class="style2" href="#" onclick="setActiveStyleSheet('style2'); return false;"><i class="fas fa-arrow-alt-circle-right"></i></a></li>
                    <li><a class="style" href="#" onclick="setActiveStyleSheet('style'); return false;"><i class="fas fa-arrow-alt-circle-left"></i></a></li>
                </ul>
            </nav>
        </header>

        <h2 class="haut">Projets réalisés au cours de ma formation</h2>
        <div class="ligne">
            <div class="image_text">
                <a href="Projets/Awele.pdf"><img src="Projets/Awele.PNG" alt="Awele"></a>
                <p class="contour">Projet informatique : codage en C de l'Awele</p>
            </div>
            <div class="image_text">
                <a href="Projets/TIPE.pdf"><img src="Projets/TIPE.png" alt="Tipe"/></a><br>
                <p class="contour">Projet TIPE 2ème année de classes préparatoires</p>
            </div>
            <div class="image_text">
                <a href="Projets/Robot_Falcon.pdf"><img src="Projets/Robot_Falcon.png" alt="Robot_Falcon"></a>
                <p class="contour">Robot Falcon : Etude des performances</p>
            </div>
        </div>
        <div class="ligne2">
            <div class="image_text">
                <a href="Projets/Intrabeam.pdf"><img src="Projets/Intrabeam.png" alt="Intrabeam"/></a>
                <p class="contour">Projet biomédical : l'Intrabeam et la radiothérapie</p>
            </div>
            <div class="image_text">
                <a href="Projets/MCOT.pdf"><img src="Projets/MCOT.jpg" alt="MCOT"></a>
                <p class="contour">MCOT : Mise en Cohérence des Objectifs du TIPE</p>
            </div>
            <div class="image_text">
                <a href="Projets/RLC.pdf"><img src="Projets/RLC.jpg" alt="RLC"></a>
                <p class="contour">Résolution numérique d'équations différentielles</p>
            </div>
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
                    <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fjohannahenry.alwaysdata.net%2FProjets.php&profile=css3svg&usermedium=all&warning=no&vextwarning=&lang=fr">
                        <img src="Photos/css.png" alt="Valid CSS3"/>
                    </a>
                    <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fjohannahenry.alwaysdata.net%2FProjets.php">
                        <img src="Photos/html.png" alt="Valid XHTML5"/>
                    </a>
                </div>
            </div>
        </footer>

    </body>
</html>