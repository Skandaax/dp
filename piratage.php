<?php
    require "index.php"
?>

<!DOCTYPE html>
<html lang="fr">
<head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Piratage</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="header.css">

</head>

<!--Header-->
<header role="header">
    <!--Menu de navigation-->
    <nav class="menu" role="navigation">
        <div class="inner">
            <div class="m-left">
                <h1 class="logo"><?="$page1t"?></h1>
            </div>
            <div class="m-right">
                <a href="index.php?page=accueil" class="m-link">Accueil</a>
                <a href="piratage.php?page=piratage" class="m-link">Piratage informatique</a>
                <a href="cybersecurite.php?page=cybersecurite" class="m-link">Cybersécurité</a>
                <a href="cnil.php?page=cnil" class="m-link">CNIL</a>
            </div>
        </div>
    </nav>

</header>

<!--Body-->
<body role="body">
    <div class="t-body">
        <section>
            <h1 class="titre-texte"><?="$page1t"?></h1>
                &nbsp;
            <figcaption >
                <img src="../articles/img/Hackers-collection-1-fichier-pirate-mails.jpg" alt="Piratage" class="imgi">
            </figcaption>
            <p class="texte-left">
                <?="$page1c"?>
                </p>
        </section>
    </div>
</body>

<!--Footer-->
<footer role="footer" class="f-footer">
    <h6>Copyright &copy2020</h6></p>
</footer>

</body>
</html>