<?php

require 'config.php';




class Connexion{
        private $host = "localhost";
        private $db = "biblio";
        private $user= "root";
        private $password = "";
        private $connexion;

        public function __construct()
        {
                
                $dsn = "mysql:host=$this->host;dbname=$this->db;charset=UTF8";
                try {
                        $this->connexion = new PDO($dsn, $this->user, $this->password);
                
                        if ($this->connexion) {
                                // echo "Connected to the $this->db database successfully!";
                        }
                        // $n=$this->connexion->query("select * from etudiant");
                        // print_r($n->fetch());
                } catch (PDOException $e) {
                        echo $e->getMessage();
                }
        }

        public function afficher($sql){
                $contenue = $this->connexion->query($sql);
                return $contenue;
        }


        public function actualiser($sql){
                $q = $this->connexion->prepare($sql);
                $q->execute();
        }

      

}

