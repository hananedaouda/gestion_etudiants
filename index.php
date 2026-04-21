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





<?php require_once 'connexion.php'; ?>
<?php
// Récupérer les filières pour le formulaire
$stmt = $pdo->query("SELECT * FROM filieres");
$filieres = $stmt->fetchAll();

// Récupérer les étudiants avec leur filière
$stmt2 = $pdo->query("SELECT etudiants.*, filieres.nom AS filiere 
                       FROM etudiants 
                       JOIN filieres ON etudiants.filiere_id = filieres.id");
$etudiants = $stmt2->fetchAll();
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

    <h2>Liste des étudiants</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Filière</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant): ?>
            <tr>
                <td><?= $etudiant['nom'] ?></td>
                <td><?= $etudiant['prenom'] ?></td>
                <td><?= $etudiant['filiere'] ?></td>
                <td>
                    <a href="update.php?id=<?= $etudiant['id'] ?>">Modifier</a>
                    <a href="delete.php?id=<?= $etudiant['id'] ?>" class="supprimer">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="assets/js/script.js"></script>
</body>
</html>