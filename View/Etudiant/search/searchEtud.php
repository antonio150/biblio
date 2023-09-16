<?php

// require('D:\xampp\htdocs\biblio\controller\etudiantDao.php');
require($_SERVER["DOCUMENT_ROOT"] . "/biblio/controller/etudiantDao.php");

$t = new EtudiantDAO();
   
$v = $t->searchEtudiant($_GET['critere'],$_GET['val1'])->fetch();


echo json_encode($v);
    