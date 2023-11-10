<?php
require_once '../vendor/autoload.php';
use iutnc\touiteur\Compte;
use iutnc\touiteur\Supression;
use iutnc\touiteur\Follow;
use iutnc\touiteur\Note;
use iutnc\touiteur\Narcissique;

echo '<a href="?action=create">Créer compte</a>'."<br>";
echo '<a href="?action=connect">Se connecter</a>'."<br>";
echo '<a href="?action=deconnect">Se déconnecter</a>'."<br>";
echo '<a href="?action=delete">Suprimer touite</a>'."<br>";
echo '<a href="?action=followuser">Suivre un utilisateur</a>'."<br>";
echo '<a href="?action=followtag">Suivre un tag</a>'."<br>";
echo '<a href="?action=noter">Noter un touite</a>'."<br>";
echo '<a href="?action=note">Voir la moyenne d un touite</a>'."<br>";
echo '<a href="?action=narc">Narcissique</a>'."<br>";

if(isset($_GET['action']) and $_GET['action']==="create"){
    Compte::creationCompte();
}
if(isset($_GET['action']) and $_GET['action']==="connect"){
    Compte::connexion();
}
if(isset($_GET['action']) and $_GET['action']==="deconnect"){
    Compte::deconnexion();
}
if(isset($_GET['action']) and $_GET['action']==="delete"){
    $idtouite=1;
    Supression::delete($idtouite);
}
if(isset($_GET['action']) and $_GET['action']==="followuser"){
    $pseudo="";
    Follow::followUser($pseudo);
}
if(isset($_GET['action']) and $_GET['action']==="followtag"){
    $tagLibelle="";
    Follow::followTag($tagLibelle);
}
if(isset($_GET['action']) and $_GET['action']==="noter"){
    Note::noter(4,-1);
}
if(isset($_GET['action']) and $_GET['action']==="note"){
        $idtouite=4;
        echo(Note::getMoyenne($idtouite));
}
if(isset($_GET['action']) and $_GET['action']==="narc"){
    Narcissique::displayUsers();
    Narcissique::displayTouiteNote();
}

?>