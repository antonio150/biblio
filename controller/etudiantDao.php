<?php

require_once('D:\xampp\htdocs\biblio\Model\Connexion.php');

// require_once('D:\xampp\htdocs\biblio\Model\Etudiant\gereEtudiant.php');

class EtudiantDAO extends Connexion{

        public function listEtudiant(){
                $con=new Connexion();
                $count = $con->afficher("SELECT * FROM Etudiant");

                return $count;
        }

        public static function oneEtudiant($id){
                $con = new Connexion();
                $cont = $con->afficher("SELECT * FROM Etudiant where id = $id");

                return $cont;
        }
        
        public function insertEtudiant($codeEtudiant,$nom,$prenom, $adresse,$classe ){
                $con = new Connexion();
               
                
                $con->actualiser("INSERT INTO Etudiant(CodeEtudiant, Nom,Prenom,Adresse,Classe) 
                VALUES( '$codeEtudiant', '$nom', '$prenom', '$adresse', '$classe') ");
        }
        public function editEtudiant($code,$nom,$prenom,$adresse,$classe ){
                $con=new Connexion();
                $con->actualiser("UPDATE Etudiant set Nom='$nom', Prenom='$prenom', Adresse='$adresse', Classe='$classe' where CodeEtudiant='$code'");
        }

        public function deleteEtudiant($id){
                $con = new Connexion();
                $con->actualiser("DELETE FROM Etudiant where CodeEtudiant = $id");
        }

        public static function searchEtudiant($critere, $val){
                $con = new Connexion();
                $cont = $con->afficher("SELECT * FROM Etudiant where $critere = '$val'");

                return $cont;
        }

        
}