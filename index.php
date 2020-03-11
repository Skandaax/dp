<?php

var_dump($_GET["page"]);

$page =(isset($_GET["page"]))? $_GET{"page"} : "accueil";//securité

//Article 1
$page1t = "Piratage";// Titre de l'articles
$page1s = "Piratage";//sous titre de l'article
$page1c = "Tout ordinateur connecté à un réseau informatique est potentiellement vulnérable à une attaque.
Une « attaque » est l'exploitation d'une faille d'un système informatique (système d'exploitation, logiciel ou bien même de l'utilisateur) à des fins non connues par l'exploitant du systèmes et généralement préjudiciables.
Sur internet des attaques ont lieu en permanence, à raison de plusieurs attaques par minute sur chaque machine connectée. Ces attaques sont pour la plupart lancées automatiquement à partir de machines infectées 
(par des virus, chevaux de Troie, vers, etc.), à l'insu de leur propriétaire. Plus rarement il s'agit de l'action de pirates informatiques.
Afin de contrer ces attaques il est indispensable de connaître les principaux types
d'attaques afin de mettre en oeuvre des dispositions préventives."; //contenue de l'article

//Article 2
$page2t = "cybersecurite";// Titre de l'articles
$page2s = "la plupart des développeurs ne connaissent pas ce qu'est la sécurité";//sous titre de l'article
$page2c = "La sécurité de nos systèmes d'information revêt un caractère très important, 
car les conséquences liées à une mauvaise sécurisation des données peuvent être 
très fâcheuses ; cela aussi bien pour les entreprises que pour les particuliers. 
En effet, les conséquences d'une mauvaise sécurisation se traduisent souvent par 
la diffusion d'informations confidentielles à l'instar des coordonnées bancaires, 
de la situation patrimoniale, des codes confidentiels, etc. La sécurité est donc 
l'affaire de tous et tout un chacun doit être au moins initié sur les différentes 
conduites ou précautions à adopter afin d'assurer la sécurité des données. Cependant, 
une attention particulière est portée à l'endroit des développeurs, car ces derniers 
ont en charge le développement des différents outils que nous utilisons dans la vie de 
tous les jours. Du fait de leur rôle, ces derniers devraient être à l'aise sur les différents 
aspects liés à la sécurité afin de les intégrer dans les outils qu'ils mettent en place."; //contenue de l'article



//Article 3
$page3t = "Garantir la sécurité des données";// Titre de l'articles
$page3s = "Une approche par les risques";//sous titre de l'article
$page3c = "Le responsable du fichier doit identifier les risques sur la vie privée
des personnes concernées  engendrés par son traitement avant de déterminer 
les moyens adéquats pour les réduire. Pour ce faire, il convient d'adopter une
vision globale et d'étudier les conséquences sur les personnes concernées."; //contenue de l'article


require "accueil.php";


?>