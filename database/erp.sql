CREATE DATABASE erp_seguridad;

USE erp_seguridad;

CREATE TABLE empleados(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    cargo VARCHAR(100),
    correo VARCHAR(100)
);

CREATE TABLE productos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    stock INT,
    bodega VARCHAR(100)
);

INSERT INTO empleados(nombre,cargo,correo)
VALUES
('Juan Pérez','Supervisor','juan@empresa.cl'),
('María Soto','Administradora','maria@empresa.cl');

INSERT INTO productos(nombre,stock,bodega)
VALUES
('Notebook Dell',12,'Santiago'),
('Monitor Samsung',7,'Concepción');