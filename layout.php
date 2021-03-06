<?php
if (!(isset($_SESSION))) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <base href="/project/" >
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
          integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title><?= $pagetitle ?></title>
    <link rel="stylesheet" type="text/css" href="/project/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/project/css/style.css">
    <script  src="/project/js/main.js"></script>

</head>
<body>
<header>
    <div class="topnav">
        <a class="active" href="<?php echo 'home'; ?>">Home</a>
        <a href="Ardoise_Magique">Dessin canvas</a>
        <a href="Moteur_SVG">Dessin SVG</a>
        <?php if (isset($_SESSION['droit'])) { ?>
            <a>Grade : <?php if ($_SESSION['droit'] == 1) {
        echo 'membre';
    } elseif ($_SESSION['droit'] == 2) {
        echo 'Moderateur';
    } elseif ($_SESSION['droit'] == 3) {
        echo 'Administrateur';
    } ?></a>

            <?php if ($_SESSION['droit'] > 1) { ?> <a id="administration" href="administration"><i class="fas fa-cogs"></i>Administration</a> <?php } ?>
            <div class="login-container" style="display:flex; justify-content: flex-end;">
            <a class="active" href="deconnexion">Deconexion</a>
             </div>
        <?php
} else {
        ?>
            <div class="login-container" style="display:flex; justify-content: flex-end;">
                <a id="Inscription" href="Inscription"><i class="fas fa-pen"></i> Inscription</a>
                <a id="Connexion"  class="active">Connexion</a>
<section  id="section_connexion" style="display: none">
                <form action="Connexion" method="post">
                    <input type="text" placeholder="Pseudo" name="Pseudo">
                    <input type="password" placeholder="MotDepasse" name="Pass">
                    <button class="active" type="submit" name="Connexion">Connexion</button>
                </form>
            </section>
            </div>
        <?php
    } ?>



    </div>


    <h1><a href="home"><i class="fas fa-microphone"></i>  canvas / svg paint  </a></h1>


</header>


<main class="container"><?php require $tpl; ?></main>

<footer class="container">
    <p>Yaci</p>
</footer>
</body>
</html>
<!-- Made by chris -->