<?php
// echo $_SERVER["DOCUMENT_ROOT"];
        // require('D:\xampp\htdocs\biblio\Controller\ControllerEtudiant.php');
        // require('D:\xampp\htdocs\biblio\controller\etudiantDao.php');
        require($_SERVER["DOCUMENT_ROOT"] . "/biblio/controller/etudiantDao.php");
        // require("biblio/controller/etudiantDao.php");
        
?>
<style>
table, th, td {
  border: 1px solid;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div>

<div >
        <caption>Nouveau Etudiant</caption>
		<fieldset style="border: none;">
                        <div >
				Code
				<input type="text" name="code" id="code" placeholder="Saisir code" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px; font-size: 12px" onkeyup="verif_Char(this)" >
			</div>
			<div >
				Nom
				<input type="text" name="nom" id="nom" placeholder="Saisir nom" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px; font-size: 12px" onkeyup="verif_Char(this)" >
			</div>

			<div >
				Prenom
				<input type="text" name="pnom" id="pnom" placeholder="Saisir prenom" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;font-size: 12px" >
			</div>

			<div >
				Adresse
				<input type="text" name="adresse" id="adresse" placeholder="Saisir adresse" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;font-size: 12px" >
			</div>
			<div >
				Classe
				<input type="classe" name="classe" id="classe" placeholder="Saisir classe" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;font-size: 12px" >
			</div>

                        <div >
				<input type="submit" value="ajouter" name="add" id="add" style="font-size: 20px;margin:16px;padding: 10px;border-radius: 6px;border-width: 1; background-color: rgb(0,128,255);width: 320px; border:none; color: white;font-size: 12px" >
			</div>

            <div >
			<a href="http://localhost/biblio/View/Etudiant/edit/edit.php"> Modifier Etudiant</a>	
            </div>       
            <div >
			<a href="http://localhost/biblio/View/Etudiant/delete/delete.php"> Delete etudiant</a>	
            </div>  
            <div >
			<a href="http://localhost/biblio/View/Etudiant/search/search.php"> Chercher Etudiant</a>	
            </div>  

			
		</fieldset>
		
	</div>

        <script>
        $(document).ready(function(){
            $("#add").click(function(){
                var code=$("#code").val();
                var nom=$("#nom").val();
                var pnom=$("#pnom").val();
                var adresse=$("#adresse").val();
                var classe=$("#classe").val();


                $.ajax({
                    url:'etudiant.php',
                    type:'POST',
                    data:{
                        code:code,
                        nom:nom,
                        pnom:pnom,
                        adresse:adresse,
                        classe:classe
                    },
                   success:function(data){
                       alert("Etudiant ajouté");
                   },
                   error : function(xhr, textStatus, errorThrown) {  
                                               alert(errorThrown); 
                   }
                   
                });
            });
        });
    </script>

<table  class="tab">
		<tr><caption>Liste des etudiant</caption>
                        <th style="width: 200px;">Code</th>
			<th style="width: 200px;">Nom</th>
			<th style="width: 200px;">Prénom</th>
			<th style="width: 200px;">Adresse</th>
			<th style="width: 200px;">Classe</th>
			
		
		</tr>
		 <?php 
		 	$obj = new EtudiantDAO();
    
     
       foreach ($obj->listEtudiant() as $liste) {  
      ?>
       <tr>
       <td><?= $liste['CodeEtudiant'] ; ?></td>
      <td><?= $liste['Nom'] ; ?></td>
      <td><?= $liste['Prenom'] ; ?></td>
      <td><?= $liste['Adresse'] ; ?></td>
      <td><?= $liste['Classe'] ; ?></td>
     
     
     </tr>
  <?php }             
     ?>
    
    
	</table>

    