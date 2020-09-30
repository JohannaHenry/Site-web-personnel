<?php
    session_start();
    if ($_SESSION['active'] != 'oui' AND $_SESSION['activeAdmin'] != 'oui') {
        die('Erreur d\'authentification');
    }

    else {
        $title = $_POST['title'];
        $message = $_POST['message'];

        //On se connecte au serveur
        $dbLink = mysqli_connect($_SERVER['dbHost'], $_SERVER['dbLogin'], $_SERVER['dbPass'])
        or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
        //On se connecte à la base de données
        mysqli_select_db($dbLink , $_SERVER['dbBd'])
        or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));

        $query = 'SELECT user_id, admin FROM user WHERE email=\'' . $_SESSION['email'] . '\' AND password =\'' . $_SESSION['password'] . '\'';

        $dbResult = mysqli_query($dbLink, $query);
        $dbRow = mysqli_fetch_assoc($dbResult);

        if (!empty($title) && !empty($message)) {
        //Le message à ajouter a bien un titre et un contenu non vides
            if (strlen($title)>30) {
                if ($dbRow['admin'] == 0) {
                    //La personne est un utilisateur, on le redirige vers listpost
                    header('location: listpost.php?step=Merci d\'ajouter un titre de moins de 30 caractères');
                }
                else {
                    //La personne est un administrateur, on le redirige vers admin
                    header('location: admin.php?step=Merci d\'ajouter un titre de moins de 30 caractères');
                }
            }
            else { //Si la longueur du titre est inférieure à 30 caractères alors on peut ajouter ce titre à notre post

                //On insert dans notre table "post" un titre, un message, la date associée ainsi que la personne qui l'ajoute
                $query = 'INSERT INTO post (title, message, date, user_id) VALUES (\'' . $title . '\', \'' . $message . '\', \'' . date('Y-m-d H:i:s') . '\', \'' . $dbRow['user_id'] . '\')';
                $dbResult = mysqli_query($dbLink, $query);

                if ($dbRow['admin'] == 0) {
                    //La personne est un utilisateur, on le redirige vers listpost
                    header('location: listpost.php?step=Message envoyé sur le forum !');
                }
                else {
                    //La personne est un administrateur, on le redirige vers admin
                    header('location: admin.php?step=Message envoyé sur le forum !');
                }
            }

        }

        else {
            //Les champs titre et contenu ne sont pas bien renseignés
            if ($dbRow['admin'] == 0) {
                header('location: listpost.php?step=Erreur un champ n\'a pas été renseigné');
            }
            else {
                header('location: admin.php?step=Erreur un champ n\'a pas été renseigné');
            }
        }

    }
?>