<?php
    $name = $_POST['name'];
    $first_name = $_POST['first_name'];
    $nick_name = $_POST['nick_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirm = md5($_POST['confirm']);
    $action = $_POST['action'];

    if (!empty($name) && !empty($first_name) && !empty ($nick_name) && !empty($email) && $password!=md5('') && $confirm!=md5('')) {
    //Les champs ont bien tous été renseignés

        if ($password == $confirm) {
        //La confirmation de mot de passe est identique au mot de passe

            //On se connecte au serveur
            $dbLink = mysqli_connect($_SERVER['dbHost'], $_SERVER['dbLogin'], $_SERVER['dbPass'])
            or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

            //On se connecte à la base de données
            mysqli_select_db($dbLink , $_SERVER['dbBd'])
            or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

            //On regarde dans la bdd si il y a des user_id qui correspondent à l'email d'isncription saisit
            $query1 = 'SELECT user_id FROM user WHERE email = \'' . $email . '\'';
            $dbResult1 = mysqli_query($dbLink, $query1);

            //On regarde dans la bdd si il y a des user_id qui correspondent au pseudo d'isncription saisit
            $query2 = 'SELECT user_id FROM user WHERE nickname = \'' . $nick_name . '\'';
            $dbResult2 = mysqli_query($dbLink, $query2);

            if (mysqli_num_rows($dbResult1)>0) {
            //L'adresse mail saisie existe déjà dans la base de données
                header('Location: forum.php?step=Email déjà utilisé !');
            }
            elseif (mysqli_num_rows($dbResult2)>0) {
            //Le pseudo saisi existe déjà dans la base de données
                header('Location: forum.php?step=Pseudo déjà utilisé !');
            }
            elseif ( empty(filter_var($email, FILTER_VALIDATE_EMAIL)) ) { // filter_var($email, FILTER_VALIDATE_EMAIL) est vide si l'adresse mail n'est pas conforme
            //Le format de l'adresse mail saisie n'est pas conforme
                header('location: forum.php?step=mauvais format pour l\'adresse mail');
            }

            else {
            //L'adresse mail et le pseudo saisis sont disponibles
                $query = 'INSERT INTO user (name, firstname, nickname, email, password) VALUES (\'' . $name . '\', \'' . $first_name . '\', \'' . $nick_name . '\', \'' . $email . '\', \'' . $password . '\')';
                $dbResult = mysqli_query($dbLink, $query);
                $message = 'Votre inscription a été validée' . PHP_EOL;
                $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
                $message .= 'Email : ' . $email . PHP_EOL;
                $message .= 'Mot de passe : '  . $_POST['password'] . PHP_EOL; //On envoie au nouvel utilisateur un mail avec son mot de passe non encodé
                $to=$email;
                $subject='Inscription';
                mail($to, $subject, $message);
                //Mail d'inscription envoyé !
                session_start();
                $_SESSION['active'] = 'oui';
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('Location: login.php?step=inscrit');
            }

        }

        else {
        //La confirmation de mot de passe est erronée
            header('Location: forum.php?step=Les deux mots de passe saisis ne sont pas les mêmes.');
        }

    }

    else {
    //Les champs n'ont pas tous été bien renseignés
        header('Location: forum.php?step=Attention les données nécessaires ne sont pas toutes renseignées.');
    }
?>