<?php
if (!(isset($_SESSION))) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title><?= $pagetitle ?></title>
    <link rel="stylesheet" type="text/css" href="<?php


    if (preg_match('/(Pages\/Commentaires)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Ardoise_Magique)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Moteur_SVG)/', $_SERVER['REQUEST_URI']) | preg_match('/(Pages\/Espace_Membre)/', $_SERVER['REQUEST_URI'])) {
        echo '../../../css/normalize.css';
    } else if (preg_match('/(Pages\/administration)/', $_SERVER['REQUEST_URI'])) {
        echo '../../../../css/normalize.css';
    } else {
        echo 'css/normalize.css';
    }

    ?>">
    <link rel="stylesheet" type="text/css" href="<?php
    if (preg_match('/(Pages\/Commentaires)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Ardoise_Magique)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Moteur_SVG)/', $_SERVER['REQUEST_URI']) | preg_match('/(Pages\/Espace_Membre)/', $_SERVER['REQUEST_URI'])) {
        echo '../../../css/style.css';
    } else if (preg_match('/(Pages\/administration)/', $_SERVER['REQUEST_URI'])) {
        echo '../../../../css/style.css';
    } else {
        echo 'css/style.css';
    } ?>">

    <script  src="<?php
    if (preg_match('/(Pages\/Commentaires)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Ardoise_Magique)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Moteur_SVG)/', $_SERVER['REQUEST_URI']) | preg_match('/(Pages\/Espace_Membre)/', $_SERVER['REQUEST_URI'])) {
        echo '../../../js/main.js';
    } else if (preg_match('/(Pages\/administration)/', $_SERVER['REQUEST_URI'])) {
        echo '../../../../js/main.js';
    } else {
        echo 'js/main.js';
    } ?>"></script>

</head>
<body>
<header>
    <div class="topnav">
        <a class="active" href="<?php
        if (preg_match('/(Pages\/Commentaires)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Ardoise_Magique)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Moteur_SVG)/', $_SERVER['REQUEST_URI']) | preg_match('/(Pages\/Espace_Membre)/', $_SERVER['REQUEST_URI'])) {
            echo '../../../index.php';
        } else if (preg_match('/(Pages\/administration)/', $_SERVER['REQUEST_URI'])) {
            echo '../../../../index.php';
        } else {
            echo 'index.php';
        } ?>">Home</a>
        <a href="<?php if (preg_match('/(Pages\/Commentaires)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Ardoise_Magique)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Moteur_SVG)/', $_SERVER['REQUEST_URI']) | preg_match('/(Pages\/Espace_Membre)/', $_SERVER['REQUEST_URI'])) {
            echo '../../../includes/Pages/Ardoise_Magique/Ardoise_Magique.php';
        } else if (preg_match('/(Pages\/administration)/', $_SERVER['REQUEST_URI'])) {
            echo '../../../../includes/Pages/Ardoise_Magique/Ardoise_Magique.php';
        } else {
            echo 'includes/Pages/Ardoise_Magique/Ardoise_Magique.php';
        }  ?>">Dessin canvas</a>


        <a href="<?php if (preg_match('/(Pages\/Commentaires)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Ardoise_Magique)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Moteur_SVG)/', $_SERVER['REQUEST_URI']) | preg_match('/(Pages\/Espace_Membre)/', $_SERVER['REQUEST_URI'])) {
            echo '../../../includes/Pages/Moteur_SVG/Moteur_SVG.php';
        } else if (preg_match('/(Pages\/administration)/', $_SERVER['REQUEST_URI'])) {
            echo '../../../../includes/Pages/Moteur_SVG/Moteur_SVG.php';
        } else {
            echo 'includes/Pages/Moteur_SVG/Moteur_SVG.php';
        } ?>">Dessin SVG</a>

        <?php if (isset($_SESSION['user']) && isset($_SESSION['Pass']) && isset($_SESSION['droit'])) { ?>
            <a>Grade : <?php if ($_SESSION['droit'] == 1) {
                    echo 'membre';
                } else if ($_SESSION['droit'] == 2) {
                    echo 'Moderateur';
                } else if ($_SESSION['droit'] == 3) {
                    echo 'Administrateur';
                } ?></a>




            <?php if ($_SESSION['droit'] > 1) { ?>
                <a id="administration" href="<?php
                if (preg_match('/(Pages\/Commentaires)/', $_SERVER['REQUEST_URI']) | preg_match('/(Pages\/Ardoise_Magique)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Moteur_SVG)/', $_SERVER['REQUEST_URI']) | preg_match('/(Pages\/Espace_Membre)/', $_SERVER['REQUEST_URI'])) {
                    echo '../../../includes/Pages/administration/Accueil/administration.php';
                } else if (preg_match('/(Pages\/administration)/', $_SERVER['REQUEST_URI'])) {
                    echo '../../../../includes/Pages/administration/Accueil/administration.php';
                } else {
                    echo 'includes/Pages/administration/Accueil/administration.php';
                } ?>"><i class="fas fa-cogs"></i>Administration</a>
            <?php } ?>

            <div class="login-container" style="display:flex; justify-content: flex-end;">
            <a class="active" href="<?php
            if (preg_match('/(Pages\/Commentaires)/', $_SERVER['REQUEST_URI']) | preg_match('/(Pages\/Ardoise_Magique)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Moteur_SVG)/', $_SERVER['REQUEST_URI']) | preg_match('/(Pages\/Espace_Membre)/', $_SERVER['REQUEST_URI'])) {
                echo '../../../includes/Pages/Espace_Membre/deconnexion.php';
            } else if (preg_match('/(Pages\/administration)/', $_SERVER['REQUEST_URI'])) {
                echo '../../../../includes/Pages/Espace_Membre/deconnexion.php';
            } else {
                echo 'includes/Pages/Espace_Membre/deconnexion.php';
            } ?>">Deconexion</a>
             </div>
        <?php } else { ?>
            <div class="login-container" style="display:flex; justify-content: flex-end;">
                <a id="Inscription" href="<?php
                if (preg_match('/(Pages\/Commentaires)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Moteur_SVG)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Ardoise_Magique)/', $_SERVER['REQUEST_URI']) | preg_match('/(Pages\/Espace_Membre)/', $_SERVER['REQUEST_URI'])) {
                    echo '../../../includes/Pages/Espace_Membre/Inscription.php';
                } else if (preg_match('/(Pages\/administration)/', $_SERVER['REQUEST_URI'])) {
                    echo '../../../../includes/Pages/Espace_Membre/Inscription.php';
                } else {
                    echo 'includes/Pages/Espace_Membre/Inscription.php';
                } ?>"><i class="fas fa-pen"></i> Inscription</a>
                <a id="Connexion" href="#" class="active">Connexion</a>
<section  id="section_connexion" style="display: none">
                <form action="<?php
                if (preg_match('/(Pages\/Commentaires)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Moteur_SVG)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Ardoise_Magique)/', $_SERVER['REQUEST_URI']) | preg_match('/(Pages\/Espace_Membre)/', $_SERVER['REQUEST_URI'])) {
                    echo '../../../includes/Pages/Espace_Membre/Connexion.php';
                } else if (preg_match('/(Pages\/administration)/', $_SERVER['REQUEST_URI'])) {
                    echo '../../../../includes/Pages/Espace_Membre/Connexion.php';
                } else {
                    echo 'includes/Pages/Espace_Membre/Connexion.php';
                } ?>" method="post">
                    <input type="text" placeholder="Pseudo" name="Pseudo">
                    <input type="password" placeholder="MotDepasse" name="Pass">
                    <button class="active" type="submit" name="Connexion">Connexion</button>
                </form>
            </section>
            </div>
        <?php } ?>



    </div>


    <h1><a href="<?php
        if (preg_match('/(Pages\/Commentaires)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Moteur_SVG)/', $_SERVER['REQUEST_URI']) |preg_match('/(Pages\/Ardoise_Magique)/', $_SERVER['REQUEST_URI']) | preg_match('/(Pages\/Espace_Membre)/', $_SERVER['REQUEST_URI'])) {
            echo '../../../index.php';
        } else if (preg_match('/(Pages\/administration)/', $_SERVER['REQUEST_URI'])) {
            echo '../../../../index.php';
        } else {
            echo 'index.php';
        } ?>"><i class="fas fa-microphone"></i> Yaci's canvas / svg paint  </a></h1>


</header>


<main class="container"><?php require $tpl; ?></main>

<footer class="container">
    <p>Yaci</p>
</footer>
</body>
</html>
<!-- Made by chris -->