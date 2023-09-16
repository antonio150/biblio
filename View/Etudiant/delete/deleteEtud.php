<?php

// require('D:\xampp\htdocs\biblio\controller\etudiantDao.php');
require($_SERVER["DOCUMENT_ROOT"] . "/biblio/controller/etudiantDao.php");

$t = new EtudiantDAO();
   
$t->deleteEtudiant($_POST['code']);
    
