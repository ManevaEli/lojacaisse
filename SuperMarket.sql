CREATE DATABASE mercado;

Use mercado;

CREATE TABLE IF NOT EXISTS produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    designation VARCHAR(255) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    quantite INT NOT NULL
);

CREATE TABLE IF NOT EXISTS caisse (
    id INT AUTO_INCREMENT PRIMARY KEY,
    num_caisse VARCHAR(50) NOT NULL,
    libelle_caisse VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS achats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_produit INT NOT NULL,
    id_caisse INT NOT NULL,
    quantite_achetee INT NOT NULL,
    date_achat DATETIME NOT NULL,
    FOREIGN KEY (id_produit) REFERENCES produits(id),
    FOREIGN KEY (id_caisse) REFERENCES caisse(id)
);

CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
);

INSERT INTO produits (designation, prix, quantite) VALUES
('Pepsi', 0.50, 100),
('Coca-Cola', 0.30, 150),
('Candia', 1.20, 50),
('Ceres', 0.80, 200),
('Eau-Vive', 0.40, 300);

INSERT INTO caisse (num_caisse, libelle_caisse) VALUES
('C001', 'Caisse 1'),
('C002', 'Caisse 2');