

<?php
      
      if ($_POST['nom'] != "") {
         if($_POST['nom'] == 'pharmacie' && $_POST['message'] == 'pharmacie') {
            echo '<meta http-equiv="refresh" content="0;url=avisadmin.php">';
         }
         else {
            $conn = mysqli_connect('localhost:8889', 'root', 'root','avispro');
            //On vérifie la connexion
             if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie';
            $dat = date("Y-m-d");
            
                   /*$requete="INSERT INTO Monteur (email,password,nom,prenom,adresse) VALUES (" '.$_POST['email'] . ' ", "  '. $_POST['password'] . ' ", " ' . $_POST['nom'] . ' ", " ' . $_POST['prenom'] . ' ", " ' .$_POST['adresse'] . ' ")";*/
                   /*$requete= 'INSERT INTO Monteur (Mail,mot_de_passe,Nom,Prenom,Adresse) VALUES ( " '.$_POST['email'].' " , " '.$_POST['password'].' "  ,  " '. $_POST['nom'].' "  , " '.$_POST['prenom'].' "  ,   " '.$_POST['adresse'].' " )';*/
                    $requete= 'INSERT INTO utilisateur VALUES (NULL," '.$_POST['nom'].' " , " '.$_POST['message'].' "  ,  " '.$dat.' ",NULL)';
                   /*$requete="select count(*) from Monteur";*/
                   echo $requete;

                    $resultat = mysqli_query ($conn,$requete);
                         
                       mysqli_close($conn);	
                       echo '<meta http-equiv="refresh" content="0;url=avis.php">';
             }
                               }
                               else {

                                 echo '<meta http-equiv="refresh" content="0;url=avis.php">';
                               }
             
             ?>
         

