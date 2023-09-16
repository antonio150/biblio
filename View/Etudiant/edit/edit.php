<?php
        // require('D:\xampp\htdocs\biblio\controller\etudiantDao.php');
        require($_SERVER["DOCUMENT_ROOT"] . "/biblio/controller/etudiantDao.php");
        
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div>

<div >
        <?php
      
        ?>
        <caption>Modifier Etudiant</caption>
		<fieldset style="border: none;">
              
          <div >
				Code
				<input type="text" name="code1" id="code1" placeholder="Saisir code" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px; font-size: 12px" >
			</div>
			<div >
				Nom
				<input type="text" name="nom1" id="nom1" placeholder="Saisir nom" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px; font-size: 12px" >
			</div>

			<div >
				Prenom
				<input type="text" name="pnom1" id="pnom1" placeholder="Saisir prenom" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;font-size: 12px" >
			</div>

			<div >
				Adresse
				<input type="text" name="adresse1" id="adresse1" placeholder="Saisir adresse" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;font-size: 12px" >
			</div>
			<div >
				Classe
				<input type="classe" name="classe1" id="classe1" placeholder="Saisir classe" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;font-size: 12px" >
			</div>

                        <div >
                        <a href="http://localhost/biblio/View/" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;font-size: 12px">Annuler</a>
				<input type="button" value="Editer" name="edit" id="edit" style="font-size: 20px;margin:16px;padding: 10px;border-radius: 6px;border-width: 1; background-color: rgb(0,128,255);width: 320px; border:none; color: white;font-size: 12px" >
               
			</div>
            

			
		</fieldset>
	
	</div>

        <script>
        $(document).ready(function(){
            // alert($("#code1").val())
            $("#edit").click(function(){
             
                var code1=$("#code1").val();
                var nom1=$("#nom1").val();
                var pnom1=$("#pnom1").val();
                var adresse1=$("#adresse1").val();
                var classe1=$("#classe1").val();
             


                $.ajax({
                    url:'editEtud.php',
                    method:'POST',
                    data:{
                    
                        code1:code1,
                        nom1:nom1,
                        pnom1:pnom1,
                        adresse1:adresse1,
                        classe1:classe1
                    },
                   success:function(data){
                       alert("Etudiant modifier");
                   },
                   error : function(xhr, textStatus, errorThrown) {  
                                               alert(errorThrown); 
                   }
                });
            });
        });
    </script>
