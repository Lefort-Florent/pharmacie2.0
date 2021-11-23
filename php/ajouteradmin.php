

<?php
      
      if ($_POST['numero'] != "") {
         if($_POST['choix'] == 'Supprimer') {
            $conn = mysqli_connect('localhost:8889', 'root', 'root','avispro');
            if($conn->connect_error){
               die('Erreur : ' .$conn->connect_error);
           }
           $requete= 'DELETE FROM utilisateur WHERE id = " '.$_POST['numero'].' "';
           
           $resultat = mysqli_query ($conn,$requete);
           mysqli_close($conn);

            echo '<meta http-equiv="refresh" content="0;url=avis.php">';
         }
         else {
            $conn = mysqli_connect('localhost:8889', 'root', 'root','avispro');
            if($conn->connect_error){
               die('Erreur : ' .$conn->connect_error);
           }
           $requete= 'UPDATE utilisateur SET reponse= " '.$_POST['reponse'].' " WHERE id = " '.$_POST['numero'].' "';
   
           $resultat = mysqli_query ($conn,$requete);
           mysqli_close($conn);

           echo '<meta http-equiv="refresh" content="0;url=avis.php">';
         
         }
      }

      else {
         echo '<meta http-equiv="refresh" content="0;url=avisadmin.php">';
      }

      
         


         
   ?>
         

