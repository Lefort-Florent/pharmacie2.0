<?php
include 'top.php'; ?>


<main>


<button id="btnPopup" class="btnPopup"> Ecrire un Avis</button>
    <div id="overlay" class="overlay">
      <div id="popup" class="popup">
        <h2>
          Exemple simple de popup 
          <span id="btnClose" class="btnClose">&times;</span>
        </h2>
        <form method="post" action="ajouter.php">
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
          
    <script src="../asset/avis.js"></script>


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
		$requete = "SELECT * FROM utilisateur ORDER BY date DESC, id DESC LIMIT 5";
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
          echo "Notre réponse :";
          echo $ligne['reponse'];
        }
        echo "</div>";
		}
         }
		mysqli_close($conn);

		?> 
    

    <a href= "avistotal.php"> Plus d'avis </a>
 


    <div id="vertical"></div>
    


    
</main>

<?php
include 'bot.php'; 
?>