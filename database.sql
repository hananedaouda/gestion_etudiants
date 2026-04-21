CREATE DATABASE IF NOT EXISTS gestion_etudiants;
USE gestion_etudiants;

CREATE TABLE filieres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE etudiants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    filiere_id INT NOT NULL,
    FOREIGN KEY (filiere_id) REFERENCES filieres(id)
);

INSERT INTO filieres (nom) VALUES 
('Informatique'),
('Gestion'),
('Réseaux'),
('Marketing');