<?php

class Insert {
    protected $db;

    function __construct(Db $db) {
        $this->db = $db;
    }   

    function add_teacher($idProf, $nom, $prenom, $discipline) {
        $connexion = $this->db->connexion();
        $stmt = $connexion->prepare("INSERT INTO prof (idProf, nom, prenom, discipline) VALUES(:idProf, :nom, :prenom, :discipline)");

        $stmt->bindParam(':idProf', $idProf);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':discipline', $discipline);
        $stmt->execute();
    }

}
?>