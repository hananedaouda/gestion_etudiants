<?php
require_once 'connexion.php';

// Récupérer l'étudiant à modifier
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM etudiants WHERE id = ?");
    $stmt->execute([$id]);
    $etudiant = $stmt->fetch();
}

// Récupérer toutes les filières
$stmt2 = $pdo->query("SELECT * FROM filieres");
$filieres = $stmt2->fetchAll();

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $filiere_id = $_POST['filiere_id'];

    if (!empty($nom) && !empty($prenom) && !empty($filiere_id)) {
        $stmt = $pdo->prepare("UPDATE etudiants SET nom=?, prenom=?, filiere_id=? WHERE id=?");
        $stmt->execute([$nom, $prenom, $filiere_id, $id]);
    }

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un étudiant</title>
    <link rel="stylesheet" href="Assets/css/style.css">
</head>
<body>
<div class="container">
    <h1>Modifier un étudiant</h1>

    <form action="update.php" method="POST" id="formUpdate">
        <input type="hidden" name="id" value="<?= $etudiant['id'] ?>">
        <input type="text" name="nom" value="<?= $etudiant['nom'] ?>" placeholder="Nom" />
        <input type="text" name="prenom" value="<?= $etudiant['prenom'] ?>" placeholder="Prénom" />
        <select name="filiere_id">
            <option value="">-- Choisir une filière --</option>
            <?php foreach ($filieres as $filiere): ?>
                <option value="<?= $filiere['id'] ?>" 
                    <?= $filiere['id'] == $etudiant['filiere_id'] ? 'selected' : '' ?>>
                    <?= $filiere['nom'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Enregistrer</button>
    </form>
</div>
<script src="Assets/js/script.js"></script>
</body>
</html>