<?php
    include 'utils.php';
    start_page('Forum Administrateur');
    if ($_GET['action'] == "déconnexion") {
    //On déconnecte l'administrateur
        session_start();
        $_SESSION['activeAdmin'] = 'non';
    }
?>

        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="CV.php">CV</a></li>
                    <li><a href="Projets.php">Projets</a></li>
                    <li><a href="liens.php">Liens</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="forum.php" id="currentTab">Forum</a></li>
                    <li><a class="style" href="#" onclick="setActiveStyleSheet('style'); return false;"><i class="fas fa-arrow-alt-circle-left"></i></a></li>
                </ul>
            </nav>
        </header>

        <h2 class="haut">Visitez notre forum !</h2>
        <div class="step">
            <?php $step=$_GET['step']; echo "$step"; ?>
        </div>
        <div id="forum">
            <div>
                <h2 class="connect_inscript">Connection administrateur</h2>
                <form action="loginAdmin.php" method="post">
                    <input name="email_login" type="text" placeholder="*Email"/><br/><br/>
                    <input name="password_login" type="password" placeholder="*Mot de passe"/><br/><br/>
                    <input type="submit" name="action" value="Se connecter"/><br/><br/>
                </form>
            </div>
        </div>
        <a href="forum.php" id="changer_connexion">← Retour</a>

<?php
    hautpage_infos_reseaux();
?>

<div class="verif">
    <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fjohannahenry.alwaysdata.net%2FforumAdmin.php&profile=css3svg&usermedium=all&warning=no&vextwarning=&lang=fr">
        <img src="Photos/css.png" alt="Valid CSS3"/>
    </a>
    <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fjohannahenry.alwaysdata.net%2FforumAdmin.php">
        <img src="Photos/html.png" alt="Valid XHTML5"/>
    </a>
</div>

<?php
    end_page();
?>
