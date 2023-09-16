<?php

// require('D:\xampp\htdocs\biblio\controller\etudiantDao.php');
require($_SERVER["DOCUMENT_ROOT"] . "/biblio/controller/etudiantDao.php");

$t = new EtudiantDAO();
   
$v = $t->editEtudiant($_POST['code1'],$_POST['nom1'],$_POST['pnom1'],$_POST['adresse1'],$_POST['classe1']);

    

//     $output = $t->GetTitle();
//     echo $output;