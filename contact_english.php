<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Contact</title>
		<meta charset="utf-8"/>
		<meta name="description" content="Projet de 3ème année filière génie biomédical, initiation au développement Web : site Internet personnel"/>
		<meta name="keywords" content="Johanna, Henry, mail, adresse, avis"/>
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
					<li><a href="liens_english.php">Links</a></li>
					<li><a href="contact.php" id="currentTab">Contact</a></li>
                    <li><a href="forum.php">Forum</a></li>
					<li><a href="contact.php"><i class="fas fa-language"></i></a></li>
					<li><a class="style2" href="#" onclick="setActiveStyleSheet('style2'); return false;"><i class="fas fa-arrow-alt-circle-right"></i></a></li>
					<li><a class="style" href="#" onclick="setActiveStyleSheet('style'); return false;"><i class="fas fa-arrow-alt-circle-left"></i></a></li>
				</ul>
			</nav>
		</header>


        <h2 class="haut">Send me an email</h2>
        <div class="avis">
            <div id="form_avis">
                <form action="mailto:johanna.henry13@gmail.com?content-type=text/html&amp;subject=Site%20Web" method="post" enctype="text/plain">
                    <div id="milieu">
                        <label for="prenom"></label><input id="prenom" type="text" name="Votre prénom " placeholder="Firstname"/><br><br>
                        <label for="nom"></label><input id="nom" type="text" name="Votre nom " placeholder="Lastname"/><br><br>
                        <label for="email"></label><input id="email" type="text" name="Votre email " placeholder="Your email adress"/><br><br>
                        <input id="sexeFemme" type="radio" name="Your gender " value="femme"/><label for="sexeFemme">Woman</label>
                        <input id="sexeHomme" type="radio" name="Your gender " value="homme"/><label for="sexeHomme">Man</label><br/><br/>
                        Your age :<br>
                        <input type="radio" name="age" value="<18ans"/><label for="moins18">Under 18 yo</label><br>
                        <input type="radio" name="age" value="15-25"/><label for="medium18-25">18-25 yo</label><br>
                        <input type="radio" name="age" value="25-40"/><label for="medium25-40">25-40 yo</label><br>
                        <input type="radio" name="age" value=">40"/><label for="plus40">40 yo or more</label><br/><br/>
                    </div>
                    <div id="centre">
                        <textarea name="impression" rows="5" cols="35" placeholder="Your message..."></textarea><br/>
                        <input type="submit" value="Send by mail"/>
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
