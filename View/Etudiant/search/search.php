<?php

?>
<style>
table, th, td {
  border: 1px solid;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div >
        <?php
      
        ?>
        <caption>Chercher Etudiant</caption>
		<fieldset style="border: none;">
              
         
			<label for="cars">Creitère:</label>
                                <select id="critere" name="carlist" form="carform">
                                <option value="CodeEtudiant">CodeEtudiant</option>
                                <option value="Nom">Nom</option>
                                <option value="Prenom">Prenom</option>
                                <option value="Adresse">Adresse</option>
                                <option value="Classe">Classe</option>
                                </select>
                                <div >
				Valeur
				<input type="text" name="val1" id="val1" placeholder="Saisir val" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px; font-size: 12px" >
			</div>
                        <a href="http://localhost/biblio/View/" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px;font-size: 12px">Annuler</a>
				<input type="button" value="Chercher" name="find" id="find" style="font-size: 20px;margin:16px;padding: 10px;border-radius: 6px;border-width: 1; background-color: rgb(0,128,255);width: 320px; border:none; color: white;font-size: 12px" >
               
			</div>
            

			
		</fieldset>

        <div id="table">


        </div>
	
	</div>

        <script>
        $(document).ready(function(){
        //     alert($("#critere").val())
            $("#find").click(function(){
             
                var critere=$("#critere").val();
                var val1=$("#val1").val();
                // alert(val1);
               
                $.ajax({
                    url:'searchEtud.php',
                    type:'GET',
                    dataType: 'json',

                    data:{
                    
                        critere:critere,
                        val1:val1,
                      
                    },
                   success:function(data){
                    console.log(data);
                //        alert("Etudiant modifier");
                    var table = [];
                for (let i = 0; i <6; i++) {
                        // codeetudiant = data[i].CodeEtudiant;
                        // nom = data[i].Nom ;
                        // prenom = data[i].Prenom;
                        // adresse = data[i].Adresse;
                        // classe = data[i].Classe;

                        table.push(data[i]);

                       
                }
                console.log(table);

           
                    $("#table").append("<table  class='tab'><tr><caption>Liste des etudiant</caption> <th style='width: 200px;'>Code</th><th style='width: 200px;'>Nom</th><th style='width: 200px;'>Prénom</th><th style='width: 200px;'>Adresse</th><th style='width: 200px;'>Classe</th></tr><tr>  <td>"+table[1]+"</td> <td>"+table[2]+"</td> <td>"+table[3]+"</td>  <td>"+table[4]+"</td> <td>"+table[5]+"</td> </tr></table>")
           
                   },
                   error : function(xhr, textStatus, errorThrown) {  
                                               alert(errorThrown); 
                   }
                });

            });
        });
    </script>