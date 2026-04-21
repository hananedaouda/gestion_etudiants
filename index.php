<?php require_once 'connexion.php'; ?>
<?php
$stmt = $pdo->query("SELECT * FROM filieres");
$filieres = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des étudiants</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container">
    <h1>Gestion des étudiants</h1>

    <h2>Ajouter un étudiant</h2>
    <form action="traitement.php" method="POST" id="formAjout">
        <input type="text" name="nom" placeholder="Nom" />
        <input type="text" name="prenom" placeholder="Prénom" />
        <select name="filiere_id">
            <option value="">-- Choisir une filière --</option>
            <?php foreach ($filieres as $filiere): ?>
                <option value="<?= $filiere['id'] ?>"><?= $filiere['nom'] ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Ajouter</button>
    </form>
</div>

<script src="assets/js/script.js"></script>
</body>
</html>