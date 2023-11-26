-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS baseProyectoPrograWeb;

-- Seleccionar la base de datos
USE baseProyectoPrograWeb;

-- Crear la tabla datos_personales
CREATE TABLE IF NOT EXISTS datos_personales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL,
    sexo VARCHAR(10) NOT NULL,
    edad VARCHAR(10) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);
SELECT  * FROM datos_personales;