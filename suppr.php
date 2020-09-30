<?php
    session_start();
    $message = $_POST['message'];
    $pseudo = $_POST['pseudo'];

    if ($_SESSION['activeAdmin'] != 'oui') {
        die('Erreur d\'authentification');
    }

    else {
        //On se connecte au serveur
        $dbLink = mysqli_connect($_SERVER['dbHost'], $_SERVER['dbLogin'], $_SERVER['dbPass'])
        or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
        //On se connecte à la base de données
        mysqli_select_db($dbLink , $_SERVER['dbBd'])
        or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));


        if (isset($message) AND $message != 'Message n°') {
        //Un messsage à bien été sélectionné
            $query = 'DELETE FROM post WHERE post_id=\'' . $message . '\'';
            $dbResult = mysqli_query($dbLink, $query);
            header('location: admin.php?step=Le message a bien été supprimé.');
        }

        elseif (isset($pseudo) AND $pseudo != 'Pseudo') {
        //un pseudo à bien été sélectionné
            $query = 'DELETE FROM user WHERE nickname=\'' . $pseudo . '\'';
            $dbResult = mysqli_query($dbLink, $query);
            header('location: admin.php?step=L\'utilisateur a bien été supprimé.');
        }

        else {
            header('location: admin.php?step=Veuillez sélectionner un élément');
        }

    }
?>

