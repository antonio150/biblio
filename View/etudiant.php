<?php

// require('D:\xampp\htdocs\biblio\controller\etudiantDao.php');
require($_SERVER["DOCUMENT_ROOT"] . "/biblio/controller/etudiantDao.php");
$t = new EtudiantDAO();
   
    $t->insertEtudiant($_POST['code'],$_POST['nom'],$_POST['pnom'],$_POST['adresse'],$_POST['classe']);
    

//     $output = $t->GetTitle();
//     echo $output;