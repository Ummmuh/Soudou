<?php
// Connexion à la base de données
$conn = new mysqli('localhost', 'root', '', 'logement_db');

// Vérifier la connexion
if ($conn->connect_error) {
    die('Erreur de connexion : ' . $conn->connect_error);
}

// Récupérer les logements
$sql = "SELECT * FROM logements";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nos Services</title>
  <link rel="stylesheet" href="style/styles.css">
</head>
<body>
  <h1>Logements disponibles</h1>
  <div class="logements">
    <?php while($row = $result->fetch_assoc()): ?>
      <div class="logement">
        <img src="<?php echo $row['image']; ?>" alt="Image du logement">
        <h2><?php echo $row['titre']; ?></h2>
        <p><?php echo $row['description']; ?></p>
        <a href="details.php?id=<?php echo $row['id']; ?>">Voir plus</a>
      </div>
    <?php endwhile; ?>
  </div>
</body>
</html>
