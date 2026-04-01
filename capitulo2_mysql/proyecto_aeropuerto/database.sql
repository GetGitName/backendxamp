CREATE DATABASE aeropuerto;
USE aeropuerto;

CREATE TABLE quejas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo_postal VARCHAR(10),
    tipo ENUM('Medio ambiente','Seguridad','Ruido'),
    descripcion TEXT,
    fecha DATE,
    hora TIME
);