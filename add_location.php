<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titre = $_POST['titre'];
  $description = $_POST['description'];
  $prix = $_POST['prix'];
  $image = $_POST['image']; // Lien de l'image

  // Connexion à la base de données
  $conn = new mysqli('localhost', 'root', '', 'logement_db');
  
  // Insertion dans la base de données
  $sql = "INSERT INTO logements (titre, description, prix, image) VALUES ('$titre', '$description', '$prix', '$image')";
  
  if ($conn->query($sql) === TRUE) {
    echo "Nouvelle location ajoutée avec succès !";
  } else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proposer une location</title>
  <link rel="stylesheet" href="style/styles.css">
</head>
<body>
  <h1>Proposer une location</h1>
  <form method="POST" action="add_location.php">
    <label for="titre">Titre :</label>
    <input type="text" id="titre" name="titre" required>
    
    <label for="description">Description :</label>
    <textarea id="description" name="description" required></textarea>
    
    <label for="prix">Prix :</label>
    <input type="number" id="prix" name="prix" required>
    
    <label for="image">Lien de l'image :</label>
    <input type="text" id="image" name="image" required>
    
    <button type="submit">Ajouter</button>
  </form>
</body>
</html>
