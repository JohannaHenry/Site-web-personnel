<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Projets</title>
		<meta charset="utf-8"/>
		<meta name="description" content="Projet de 3ème année filière génie biomédical, initiation au développement Web : site Internet personnel"/>
		<meta name="keywords" content="Johanna, Henry, site, Web, projets, tipe, genie, biomedical"/>
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
					<li><a href="Projets_english.php" id="currentTab">Projects</a></li>
					<li><a href="liens_english.php">Links</a></li>
					<li><a href="contact_english.php">Contact</a></li>
                    <li><a href="forum.php">Forum</a></li>
					<li><a href="Projets.php"><i class="fas fa-language"></i></a></li>
					<li><a class="style2" href="#" onclick="setActiveStyleSheet('style2'); return false;"><i class="fas fa-arrow-alt-circle-right"></i></a></li>
					<li><a class="style" href="#" onclick="setActiveStyleSheet('style'); return false;"><i class="fas fa-arrow-alt-circle-left"></i></a></li>
				</ul>
			</nav>
		</header>

        <h2 class="haut">Few projects I realised during my formation</h2>
		<div class="ligne">
			<div class="image_text">
				<a href="Projets/TIPE.pdf"><img src="Projets/TIPE.png" alt="Tipe"/></a><br>
				<p class="contour">TIPE project : 2nd year of prepatory classes</p>
			</div>
			<div class="image_text">
				<a href="Projets/Tipe_pcsi.pdf"><img src="Projets/Tipe_pcsi.png" alt="Tipe"/></a>
				<p class="contour">TIPE project : 1st year of prepatory classes</p>
			</div>
			<div class="image_text">
				<a href="Projets/PPE.pdf"><img src="Projets/PPE.png" alt="PPE"></a>
				<p class="contour">PPE : Remote circuit breaker, final year of High School</p>
			</div>
			<div class="image_text">
				<a href="Projets/Robot_Falcon.pdf"><img src="Projets/Robot_Falcon.png" alt="Robot_Falcon"></a>
				<p class="contour">Falcon robot : Performances review</p>
			</div>
		</div>
		<div class="ligne2">
			<div class="image_text">
				<a href="Projets/biomedical.pdf"><img src="Projets/biomedical.png" alt="Intrabeam"/></a>
				<p class="contour">Biomedical project : the Intrabeam and the radiotherapy</p>
			</div>
			<div class="image_text">
				<a href="Projets/MCOT.pdf"><img src="Projets/MCOT.jpg" alt="MCOT"></a>
				<p class="contour">MCOT : Mise en Cohérence des Objectifs du TIPE</p>
			</div>
			<div class="image_text">
				<a href="Projets/RLC.pdf"><img src="Projets/RLC.jpg" alt="RLC"></a>
				<p class="contour">Résolution numérique d'équations différentielles</p>
			</div>
			<div class="image_text">
				<a href="Projets/TPE_ITER.pdf"><img src="Projets/TPE_ITER.png" alt="TPE_ITER"/></a>
				<p class="contour">TPE : Travaux Personnels Encadrés Iter 1ère S</p>
			</div>
		</div>

		<!-- Bouton haut de page-->
		<div class=top>
			<a href="#top" title="top of page"><i class="fas fa-arrow-circle-up"></i></a>
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
					<a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fjohanna.henry.etu.perso.luminy.univ-amu.fr%2Fcontact.html&profile=css3svg&usermedium=all&warning=no&vextwarning=true&lang=fr">
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
