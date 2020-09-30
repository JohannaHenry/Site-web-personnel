<?php
    include 'utils.php';
    session_start();
    start_page('Admin');
?>

        <header>
            <nav>
                <ul>
                    <li><a href="forumAdmin.php?action=déconnexion"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>

                </ul>
            </nav>
        </header>
        <h2 class="haut">Bienvenue sur notre forum</h2>
        <div class="step">
            <?php $step=$_GET['step']; echo "$step"; ?>
        </div>

<?php
    if ($_SESSION['activeAdmin'] != 'oui') {
        die('Erreur d\'authentification');
    }

    else {

        //On se connecte au serveur
        $dbLink = mysqli_connect($_SERVER['dbHost'], $_SERVER['dbLogin'], $_SERVER['dbPass'])
        or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
        //on se connect à la base de données
        mysqli_select_db($dbLink , $_SERVER['dbBd'])
        or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

        //On sélectionne toutes les informations des tables user et post
        $query = 'SELECT * FROM post P, user U WHERE P.user_id = U.user_id ORDER BY date';

        $dbResult = mysqli_query($dbLink, $query);
?>

        <div id="legende">
            <div class="legende_post_id"><h3>N°</h3></div>
            <div class="legende_date"><h3>Date</h3></div>
            <div class="legende_pseudo"><h3>Pseudo</h3></div>
            <div class="legende_title"><h3>Titre</h3></div>
            <div class="legende_message"><h3>Message</h3></div>
        </div>

<?php

        echo'<div class="container">';
        //On affiche les messages et toutes les informations associées à un message donné
        while ($dbRow = mysqli_fetch_assoc($dbResult)) {
            echo'<div class="ligne_message">';
            echo'<div class="post_id">';
            echo $dbRow['post_id'];
            echo'</div>';
            echo'<div class="date">';
            echo date('d-m-Y H:i', strtotime($dbRow['date']));
            //dans la bdd la date est au format 'Y-m-d H:i:s' ici nous décidons de ne pas afficher les secondes
            echo'</div>';
            echo'<div class="nickname">';
            echo utf8_encode($dbRow['nickname']);
            echo'</div>';
            echo'<div class="title">';
            echo utf8_encode($dbRow['title']);
            echo'</div>';
            echo'<div class="message">';
            echo utf8_encode($dbRow['message']);
            echo'</div>';
            echo'</div>';
        }
        echo'</div>';

        //on sélectionne les numéros des messages supprimables, qu'ils aient été ajoutés par un utilisateur ou un administrateur
        $queryPost= 'SELECT post_id, date FROM post ORDER BY date DESC';
        $dbResultPost = mysqli_query($dbLink, $queryPost);

        //on sélectionne les pseudos supprimables, mais uniquement dans les utilisateurs
        $queryUser= 'SELECT nickname FROM user WHERE admin=0';
        $dbResultUser = mysqli_query($dbLink, $queryUser);

    }

?>
        <div id="forum">

            <div>
                <h2 class="connect_inscript"><strong>Ajouter un post</strong></h2>
                <form action="addA.php" method="post">
                    <input name="title" type="text" placeholder="*Titre (moins de 30 caractères)"/><br/><br/>
                    <textarea name="message" rows="5" cols="28" placeholder="*Contenu"></textarea><br/><br/>
                    <input type="submit" name="action" value="Enregistrer"/>
                </form>
            </div>
            <div>

                <h2 class="connect_inscript">Supprimer un message ou un utilisateur</h2>
                <form action="suppr.php" method="post">
                    <select name="message">
                        <option value="Message n°">Message n°</option>
                        <?php
                            while ($dbRowPost=mysqli_fetch_assoc($dbResultPost)){
                                echo '<option value="' . $dbRowPost['post_id'] . '">' . $dbRowPost['post_id'] . '</option>';
                            }
                        ?>
                    </select>
                    <input type="submit" value="Supprimer le message"/>
                </form>

                <form action="suppr.php" method="post">
                    <select name="pseudo">
                        <option value="Pseudo">Pseudo</option>
                        <?php
                            while ($dbRowUser=mysqli_fetch_assoc($dbResultUser)){
                                echo '<option value="' . $dbRowUser['nickname'] . '">' . $dbRowUser['nickname'] . '</option>';
                            }
                        ?>
                    </select>
                    <input type="submit" value="Supprimer l'utilisateur"/>
                </form>

            </div>

        </div>

<?php
    hautpage_infos_reseaux();
?>

        <div class="verif">
            <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fjohannahenry.alwaysdata.net%2Fadmin.php&profile=css3svg&usermedium=all&warning=no&vextwarning=&lang=fr">
                <img src="Photos/css.png" alt="Valid CSS3"/>
            </a>
            <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fjohannahenry.alwaysdata.net%2Fadmin.php">
                <img src="Photos/html.png" alt="Valid XHTML5"/>
            </a>
        </div>

<?php
    end_page();
?>