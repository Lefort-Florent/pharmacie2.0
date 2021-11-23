<?php
include 'top.php'; ?>


<main>


 <?php
		$conn = new mysqli('localhost:8889', 'root', 'root','avispro');
    if($conn->connect_error){
      die('Erreur : ' .$conn->connect_error);
  }
    $requete = "SELECT COUNT(*) AS nb FROM utilisateur";
    $nombre = mysqli_query ($conn,$requete);
    $lig = $nombre -> fetch_assoc();
    if ($lig['nb'] == 0){
      echo "Aucun Commentaire";
    }
    else {
		$requete = "SELECT * FROM utilisateur ORDER BY date DESC";
		$resultat = mysqli_query ($conn,$requete);
    while ($ligne = $resultat -> fetch_assoc()) {
      echo "<tr>";
      echo "<div class='tableau'>";
      echo "<h4>";
			echo  $ligne['nom'] . 'le ' . $ligne['date'];
      echo "</h4>";
      echo "<br>";
      echo $ligne['message'];
      echo "</tr>";
      echo "<br>";
        if($ligne['reponse'] != NULL){
          echo "Notre réponse";
          echo "<br>";
          echo $ligne['reponse'];
        }
        echo "</div>";
		}
         }
		mysqli_close($conn);

		?> 
    
 
<!-- $conn = new mysqli('localhost:8889', 'root', 'root','avispro');
echo "int i = 0";
while ($row['id']+i!=0){
echo "<tr>";
echo "<p>";
echo "<h2>" . $row['nom'] . "</h2>";
echo  $row['message'];
echo "</p>";
echo "</tr>";
echo "i=i+1";
}
-->

    <div id="vertical"></div>
    


  <button id="btnPopup" class="btnPopup">Avis</button>
    <div id="overlay" class="overlay">
      <div id="popup" class="popup">
        <h2>
          Exemple simple de popup 
          <span id="btnClose" class="btnClose">&times;</span>
        </h2>
        <form method="post">
          <div id="from">
            <label for="name">Votre Prenom:</label>
            <input type="text" id="name" name="nom">
          </div>

          <div id="message">
            <label for="msg">Votre message :</label>
            <textarea id="msg" name="message"></textarea>
          </div>

          <div class="button">
            <button type="submit" value="Ajouter">Poster le message</button>
          </div>
        </form>
      </div>
    </div>
     <?php
		if (isset($_POST['nom'])) {
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
              }
              
             ?>
               
    <script src="../asset/avis.js"></script>

    
</main>

<?php
include 'bot.php'; 
?>