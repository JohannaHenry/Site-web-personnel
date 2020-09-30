<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Johanna Henry</title>
        <meta charset="utf-8"/>
        <meta name="description" content="Personnal Website project, 3rd year Master of biomedical engineering"/>
        <meta name="keywords" content="Johanna, Henry, Website, Polytech, biomedical"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" title="style" href="style.css"/>
        <link rel="alternate stylesheet" type="text/css" title="style2" href="style2.css"/>
        <link rel="icon" type="image/jpg" href="Photos/robot2.png"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="script.js"></script>
    </head>

    <body>
        <header>
            <div id="menu">
                <nav>
                    <ul>
                        <li><a href="index_english.php" id="currentTab">Home</a></li>
                        <li><a href="CV_english.php">CV</a></li>
                        <li><a href="Projets_english.php">Projects</a></li>
                        <li><a href="liens_english.php">Links</a></li>
                        <li><a href="contact_english.php">Contact</a></li>
                        <li><a href="forum.php">Forum</a></li>
                        <li><a href="index.php" title="French version"><i class="fas fa-language"></i></a></li>
                        <li><a class="style2" href="#" onclick="setActiveStyleSheet('style2'); return false;"><i class="fas fa-arrow-alt-circle-right"></i></a></li>
                        <li><a class="style" href="#" onclick="setActiveStyleSheet('style'); return false;"><i class="fas fa-arrow-alt-circle-left"></i></a></li>
                    </ul>
                </nav>
            </div>


            <div class="en-tête">
                <div>
                    <img id="portrait" src="Photos/Johanna_Henry" alt="Photo de Johanna Henry"/>
                </div>

                <div class="header_center">
                    <p>Johanna Henry<br>Personal Website</p>
                </div>

                <div>
                    <a href="https://polytech.univ-amu.fr/"><img id="logo_polytech" src="Photos/logo_polytech.png" alt="Polytech"></a>
                </div>
            </div>
        </header>


        <div class="Presentation">
            <p id="bienvenue">
                Welcome to my Website !
            </p>
            <p>
                I am Johanna Henry a 21 years old Polytech Marseille student. I am currently a second year Master student in biomedical engineering and I live in Marseille.<br>Before Polytech I have attended prepatory classes for two years in order to be enrolled in a french engineering school.<br>I conceived this Website within the framework of a Web development project. The aim was to learn how to code in HTML, CSS, JavaScript and PHP. It enables me to introduce myself especially through my résumé and several projects I realised during my engineering formation. You can give me your impression regarding this Website in the "forum" tab.
            </p>
            <p id="bonne_visite">
                Have a great visit !
            </p>
        </div>


        <!-- Bouton haut de page-->
        <div class=top>
            <a href="#top" title="top of page"><i class="fas fa-arrow-circle-up"></i></a><br><br>
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
                        <p>© Copyright 2018-2019</p>
                    </div>
                </div>

                <div class="verif">
                    <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fjohanna.henry.etu.perso.luminy.univ-amu.fr%2F&profile=css3svg&usermedium=all&warning=no&vextwarning=true&lang=fr">
                        <img src="Photos/css.png" alt="Valid CSS3"/>
                    </a>
                    <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fjohanna.henry.etu.perso.luminy.univ-amu.fr%2F">
                        <img src="Photos/html.png" alt="Valid XHTML5"/>
                    </a>
                </div>
            </div>
        </footer>

    </body>
</html>