<html>

<head>
<title>commandes </title>
<meta charset="utf-8">
</head>

<body>
<h1>Gestion des commandes </h1>
<a href="ajoutcommande.html">Ajouter une commande</a> / <a href="index.html">Accueil</a>
<br>
<h1>Liste des commandes </h1>

<table width="700px">
<th align="left">Id.</th>
<th align="left">Numéro </th>
<th align="left">Date </th>
<th align="left">livreur</th>
<th align="left">client</th>
<?php

require_once __DIR__ . '/../src/functions.php';
$pdo = ConnectToBDD(); //Connexion a la BDD

listCommande($pdo);

?>
</table>
</body>
</html>