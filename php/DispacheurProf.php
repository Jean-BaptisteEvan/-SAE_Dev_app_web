<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../css/style.css" />

    <meta charset="UTF-8">
    <title>Touiteur</title>
    <link rel="icon" type="image/x-icon" href="Image/Logotouiteur-removebg-preview.png" />

</head>
<body>



    <nav class="menuGauche">
        <ul>



            <li><a href="Dispacheur.php"><img src="Image/Logotouiteur-removebg-preview.png" class="imgheader"></a></li>
            <li><div class="container"><a href="Dispacheur.php"><img src="Image/house-solid-removebg-preview.png" class="imgheaderhome"></a> <h3>Home</h3></div></li>
            <li><div class="container"><a href="Recherche.asp"><img src="Image/glass-removebg-preview.png" class="imgheaderhome"></a> <h3>Search</h3></div></li>
            <li><div class="container"><a href="DispacheurProf.php"><img src="Image/user-removebg-preview.png " class="imgheaderhome"></a><h3>Profile</h3></div></li>
            <li><div class="contain"><a href="contact.asp" class="imgPost"><h4>Post</h4></a></div> </li>
        </ul>
    </nav>


<?php
use iutnc\touiteur\TouiteRenderer;
use iutnc\touiteur\TouiteSearch;
require_once "../vendor/autoload.php";
$listeTouites = TouiteSearch::GetTouitesPostedBy(1);
$touitesRendered = array();
foreach ($listeTouites as $k => $v) {
    array_push($touitesRendered, TouiteRenderer::renderLong($v));
    echo TouiteRenderer::renderCourt($v);
}
?>
<div class="PartieDroite" > <img src="Image/Logotouiteur-removebg-preview.png"></div>

</body>
</html>

