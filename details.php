<?php
// Connexion à la base de données
$conn = new mysqli('localhost', 'root', '', 'logement_db');

// Récupérer l'ID du logement
$id = $_GET['id'];
$sql = "SELECT * FROM logements WHERE id=$id";
$result = $conn->query($sql);
$logement = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Détails du Logement</title>
  <link rel="stylesheet" href="style/styles.css">
</head>
<body>
  <h1><?php echo $logement['titre']; ?></h1>
  <img src="<?php echo $logement['image']; ?>" alt="Image du logement">
  <p><?php echo $logement['description']; ?></p>
  <p>Prix : <?php echo $logement['prix']; ?> GNF</p>
</body>
</html>
