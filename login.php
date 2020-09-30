<?php
    $email = $_POST['email_login'];
    $password = md5($_POST['password_login']);
    $action = $_POST['action'];
?>


<?php
    $step = $_GET['step'];
    if ($step == 'inscrit') {
    //Si l'utilisateur vient de s'inscire il est déjà connecté, on le redirige donc directement vers le forum
        header('Location: listpost.php?step=Bienvenue sur le forum !');
    }

    else {
        if (!empty($email) && $password!=md5('')) {
        //Les champs email et password sont bien renseignés

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //Le format de l'adresse mail saisie est conforme

                //On se connecte au serveur
                $dbLink = mysqli_connect($_SERVER['dbHost'], $_SERVER['dbLogin'], $_SERVER['dbPass'])
                or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

                //on se connecte à la base de données
                mysqli_select_db($dbLink , $_SERVER['dbBd'])
                or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

                $query = 'SELECT email, password FROM user where admin=0 AND email=\'' . $email . '\'';
                //Seuls les utilisateurs (non admins) peuvent se connecter en tant qu'utilisateurs et on récupère les infos correspondant à $email

                //La requête est elle valide ?
                if (!($dbResult = mysqli_query($dbLink, $query))) {
                    echo 'Erreur de requête<br/>';
                    // Affiche le type d'erreur.
                    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
                    // Affiche la requête envoyée.
                    echo 'Requête : ' . $query . '<br/>';
                    exit();
                }

                if (mysqli_num_rows($dbResult)==0) {
                //L'adresse mail saisie n'existe pas dans la base de données
                    header('Location: forum.php?step=L\'email n\'existe pas !');
                }

                //L'email existe, et le mdp est-il correct ?
                else {
                    $dbRow = mysqli_fetch_assoc($dbResult);
                    if ("$password" == $dbRow['password']) {
                    //Le mot de passe est correct et l'utilisateur n'est pas un administrateur
                        session_start();
                        $_SESSION['active'] = 'oui';
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        //L'utilisateur est connecté !
                        header('location: listpost.php');
                    }
                    else {
                    //Le mot de passe n'est pas correct
                        header('location: forum.php?step=Mot de passe incorrect');
                    }
                }

            }

            else {
            //Le format de l'adresse mail saisie n'est pas conforme
                header('location: forum.php?step=mauvais format pour l\'adresse mail');
            }

        }

        else {
        //Les champs email et password ne sont pas bien renseignés
            header('location: forum.php?step=Attention les données utilisateur ne sont pas toutes renseignées.');
        }

    }
?>

