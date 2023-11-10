<?php
require_once '../vendor/autoload.php';

use iutnc\touiteur\bdd\ConnectionFactory;
require_once './gestionBackOffice.php';
use iutnc\touiteur\Compte;

try {
    Compte::connexion();
} catch (Exception $e) {

}
//mise en place de la tete html pour lier le css
echo '<head>
                  <title>Back Office</title>
                  <link href="../css/backoffice.css" rel="stylesheet" />
             </head>';
if(isset($_SESSION['user'])){
    if($_SESSION['user']['admin'] == 1){
        ConnectionFactory::makeConnection();
        $bdd = ConnectionFactory::$bdd;
        gestionBackOffice::genererBackOffice($bdd);
        echo '<button id="deco"><a href="?action=deconnect">Se déconnecter</a></button>';
        if(isset($_GET['action']) and $_GET['action']==="deconnect"){
            Compte::deconnexion();
        }
    }else{
        echo 'access not granted please leave';
    }
}


