/* CREATE DATABASE sirecom; */

CREATE TABLE pc (
    id_pc serial PRIMARY KEY,
    direccion_mac varchar(17) UNIQUE NOT NULL,
    sis_op varchar(50) NOT NULL,
    procesador varchar(50) NOT NULL,
    ram_gb int NOT NULL,
    marca varchar(50) NOT NULL,
    modelo varchar(50) NOT NULL
);

CREATE TABLE discente (
    id_dis serial PRIMARY KEY,
    matricula varchar(11) UNIQUE NOT NULL,
    nombre varchar(50) NOT NULL,
    apellidop varchar(50) NOT NULL,
    apellidom varchar(50) NOT NULL
);

CREATE TABLE admin (
    id_admin serial PRIMARY KEY,
    matricula varchar(11) UNIQUE NOT NULL,
    nombre varchar(50) NOT NULL,
    apellidop varchar(50) NOT NULL,
    apellidom varchar(50) NOT NULL,
    contrasena varchar(11) NOT NULL DEFAULT 'admin'
);

CREATE TABLE tipo_registro (
    id_resg serial PRIMARY KEY,
    tipo varchar(50) UNIQUE NOT NULL
);

CREATE TABLE registro (
    id_registro serial PRIMARY KEY,
    id_pc int NOT NULL REFERENCES pc(id_pc)
    ON DELETE CASCADE ON UPDATE CASCADE,
    id_dis int NOT NULL REFERENCES discente(id_dis)
    ON DELETE CASCADE ON UPDATE CASCADE,
    id_admin int NOT NULL REFERENCES admin(id_admin)
    ON DELETE CASCADE ON UPDATE CASCADE,
    id_tipo int NOT NULL REFERENCES tipo_registro(id_resg)
    ON DELETE CASCADE ON UPDATE CASCADE,
    fecha_registro timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);