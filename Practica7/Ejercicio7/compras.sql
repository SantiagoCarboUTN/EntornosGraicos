CREATE DATABASE compras;

USE compras;

CREATE TABLE catalogo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100),
    precio FLOAT(9,2);

);