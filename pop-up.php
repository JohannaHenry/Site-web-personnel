<?php
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>CC</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <a type="button" id="btn_supp" data-target="#pop_up">Supprimer</a>


        <style>
            #pop_up {
                position: relative;
                display: flex;
                flex-direction: column;
                width: 100%;
                pointer-events: auto;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid rgba(0,0,0,.2);
                border-radius: .3rem;
                outline: 0;
            }
            #head {
                padding: 1rem;
                border-bottom: 1px solid #e9ecef;
            }
        </style>


        <div id="pop_up" aria-hidden="true">
            <div id="head">
                <p>SUPPRESSION UTILISATEUR</p>
            </div>
            <p>Vous allez supprimer : </p>
        </div>

    </body>
</html>
