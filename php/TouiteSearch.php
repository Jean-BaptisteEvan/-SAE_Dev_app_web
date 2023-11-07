<?php

namespace iutnc\touiteur;

/**
 * Class used to search touites, e.g : every touite posted by someone
 * or every touite with a specific tag
 */
class TouiteSearch {

    /**
     * Return every touites made by a specific user
     * @param int $idUser the id of the user in question
     * @return array the array containing the touites
     */
    public static function getTouitesPostedBy(int $idUser) : array {
        \iutnc\touiteur\bdd\ConnectionFactory::makeConnection();
        $bdd = \iutnc\touiteur\bdd\ConnectionFactory::$bdd;

        $listeTouites = array();

        $requete = "SELECT Touite.texte, Publier.user, Publier.datePublication FROM Touite
                        INNER JOIN Publier ON Publier.idTouite = Touite.idTouite
                        WHERE idUser = ?";
        $rep = $bdd->query($requete);
        $rep->bindParam(1, $idUser);

        while($ligne=$rep->fetch(PDO::FETCH_NUM)) {
            echo "$ligne[0]";
        }
        $rep->closeCursor();

        return $listeTouites;
    }
}