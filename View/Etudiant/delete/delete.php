<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div >
        <caption>Supprimer un Etudiant</caption>
        <div>Veuillez remplir les champs suivants</div>
		<fieldset style="border: none;">
                        <div >Code
				
				<input type="text" name="code" id="code" placeholder="Saisir code" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius: 6px;border-width: 1px; font-size: 12px" onkeyup="verif_Char(this)" required>
			</div>
			
                        <div >
                        <a href="http://localhost/biblio/View/" style="font-size: 16px; margin:10px;padding: 10px;width: 300px; border-radius:
                         6px;border-width: 1px;font-size: 12px">Annuler</a>
				
				<input type="submit" value="Executer" name="delete" id="delete" style="font-size: 20px;margin:16px;padding: 10px;border-radius: 6px;border-width: 1; background-color: rgb(0,128,255);width: 320px; border:none; color: white;font-size: 12px" required>
			</div>

                       

			
		</fieldset>
		
	</div>
        <script>
        $(document).ready(function(){
                // alert($("#code1").val())
            $("#delete").click(function(){
              
                var code=$("#code").val();
                      
                $.ajax({
                    url:'deleteEtud.php',
                    method:'POST',
                    data:{
                     
                        code:code,
                       
                    },
                   success:function(data){
                       alert("Etudiant effacé");
                   },
                   error : function(xhr, textStatus, errorThrown) {  
                        alert(errorThrown); 
                   }
                });
            });
        });
    </script>
