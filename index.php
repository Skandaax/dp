<?php

var_dump($_GET["page"]);

//Article 1
$page1t = "Piratage";// Titre de l'articles
$page1s = "cybersecurité";//sous titre de l'article
$page1c = "Tout ordinateur connecté à un réseau informatique est potentiellement vulnérable à une attaque.
Une « attaque » est l'exploitation d'une faille d'un système informatique (système d'exploitation, logiciel ou bien même de l'utilisateur) à des fins non connues par l'exploitant du systèmes et généralement préjudiciables.
Sur internet des attaques ont lieu en permanence, à raison de plusieurs attaques par minute sur chaque machine connectée. Ces attaques sont pour la plupart lancées automatiquement à partir de machines infectées 
(par des virus, chevaux de Troie, vers, etc.), à l'insu de leur propriétaire. Plus rarement il s'agit de l'action de pirates informatiques.
Afin de contrer ces attaques il est indispensable de connaître les principaux types
d'attaques afin de mettre en oeuvre des dispositions préventives."; //contenue de l'article



$page =(isset($_GET["page"]))? $_GET{"page"} : "accueil";//securité

require "accueil.php";


?>