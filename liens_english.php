<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Liens</title>
		<meta charset="utf-8"/>
		<meta name="description" content="Projet de 3ème année filière génie biomédical, initiation au développement Web : site Internet personnel"/>
		<meta name="keywords" content="Johanna, Henry, site, Web, Polytech, maths, physique, informatique"/>
		<link rel="stylesheet" type="text/css" title="style" href="style.css"/>
		<link rel="alternate stylesheet" type="text/css" title="style2" href="style2.css"/>
		<link rel="icon" type="image/png" href="Photos/robot2.png"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="script.js"></script>
	</head>

	<body>
		<header>
			<nav>
				<ul>
					<li><a href="index_english.php">Home</a></li>
					<li><a href="CV_english.php">CV</a></li>
					<li><a href="Projets_english.php">Projects</a></li>
					<li><a href="liens_english.php" id="currentTab">Links</a></li>
					<li><a href="contact_english.php">Contact</a></li>
                    <li><a href="forum.php">Forum</a></li>
					<li><a href="liens.php"><i class="fas fa-language"></i></a></li>
					<li><a class="style2" href="#" onclick="setActiveStyleSheet('style2'); return false;"><i class="fas fa-arrow-alt-circle-right"></i></a></li>
					<li><a class="style" href="#" onclick="setActiveStyleSheet('style'); return false;"><i class="fas fa-arrow-alt-circle-left"></i></a></li>
				</ul>
			</nav>
		</header>


        <h2 class="haut">Some interesting websites</h2>
        <div class="liens">
            <div class="links">
                <a href="http://rebelles.gilles.free.fr/" title="Mathematics" target="_blank"><i class="fas fa-calculator"></i></a>
                <a href="http://infojeanat.cluster005.ovh.net/PSIE.html" title="Computer science" target="_blank"><i class="fab fa-python"></i></a>
                <a href="http://gery.huvent.pagesperso-orange.fr/html/exos_kholle.htm" title="Maths exercices" target="_blank"><i class="fas fa-square-root-alt"></i></a>
            </div>
            <div class="links">
                <a href="https://www.w3schools.com/" title="Web tutorials" target="_blank"><i class="fas fa-keyboard"></i></a>
                <a href="http://www.mickael-martin-nevot.com/" title="Web development" target="_blank"><i class="fas fa-desktop"></i></a>
                <a href="https://www.alsacreations.com/tuto/liste/1-html.html" title="HTML tutorials" target="_blank"><i class="fas fa-glasses"></i></a>
            </div>
            <div class="links">
                <a href="https://polytech.univ-amu.fr/formations/cycle-ingenieur/genie-biomedical" title="Polytech Marseille Biomedical Engineering" target="_blank"><i class="fas fa-heartbeat"></i></a>
                <a href="https://www.univ-amu.fr/fr/universite" title="Aix-Marseille University" target="_blank"><i class="fas fa-book"></i></a>
                <a href="https://chimie-pcsi-jds.net/" title="Chemistry" target="_blank"><i class="fas fa-atom"></i></a>
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
						<a href="https://discordapp.com/"><i class="fab fa-discord"></i></a>
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