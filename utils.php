<?php
    function start_page($title) {
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <script src="script.js"></script>
        <link rel="stylesheet" type="text/css" title="style" href="style.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="icon" type="image/jpg" href="Photos/shark.png"/>
        <meta name="description" content="Site Web personnel, projet de 3ème et 4ème année d'école d'ingénieur, filière génie biomédical, développement Web"/>
        <meta name="keywords" content="Johanna, Henry, site, Web, Polytech, génie, biomédical"/>
    </head>
    <body>
<?php
     }
     function hautpage_infos_reseaux() {
?>
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

<?php
    }
    function end_page() {
?>
            </div>
        </footer>
    </body>
</html>
<?php
    }
?>


