<?php
    include 'utils.php';
    start_page('Forum');
    if ($_GET['action'] == "déconnexion") {
    //On déconnecte l'utilisateur
        session_start();
        $_SESSION['active'] = 'non';
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

        <h2 class="haut">Donnez votre avis sur ce site !</h2>
        <div class="step">
            <?php $step=$_GET['step']; echo "$step"; ?>
        </div>

        <div id="forum">
            <div id="forumC">
                <h2 class="connect_inscript">Connection</h2>
                <form action="login.php" method="post">
                    <input name="email_login" type="text" placeholder="*Email"/><br/><br/>
                    <input name="password_login" type="password" placeholder="*Mot de passe"/><br/><br/>
                    <input type="submit" name="action" value="Se connecter"/><br/><br/><br/>
                </form>
                <a href="forumAdmin.php">→ Se connecter en tant qu'administrateur</a>
            </div>

            <div id="forumI">
                <h2 class="connect_inscript">Inscription</h2>
                <form action="subscribe.php" method="post">
                    <input name="name" type="text" placeholder="*Nom"/><br/><br/>
                    <input name="first_name" type="text" placeholder="*Prénom"/><br/><br/>
                    <input name="nick_name" type="text" placeholder="*Pseudo"/><br/><br/>
                    <input name="email" type="text" placeholder="*Email"/><br/><br/>
                    <input name="password" type="password" placeholder="*Mot de passe"/><br/><br/>
                    <input name="confirm" type="password" placeholder="*Confirmez le mot de passe"/><br/><br/>
                    <input type="submit" name="action" value="S'inscrire"/><br/><br/><br/>
                </form>
            </div>

        </div>

<?php
    hautpage_infos_reseaux();
?>

<div class="verif">
    <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fjohannahenry.alwaysdata.net%2Fforum.php&profile=css3svg&usermedium=all&warning=no&vextwarning=&lang=fr">
        <img src="Photos/css.png" alt="Valid CSS3"/>
    </a>
    <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fjohannahenry.alwaysdata.net%2Fforum.php">
        <img src="Photos/html.png" alt="Valid XHTML5"/>
    </a>
</div>

<?php
    end_page();
?>
