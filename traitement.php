<?php
require_once 'connexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $filiere_id = $_POST['filiere_id'];

    if (!empty($nom) && !empty($prenom) && !empty($filiere_id)) {
        $stmt = $pdo->prepare("INSERT INTO etudiants (nom, prenom, filiere_id) VALUES (?, ?, ?)");
        $stmt->execute([$nom, $prenom, $filiere_id]);
    }
}

header('Location: index.php');
exit;
?>