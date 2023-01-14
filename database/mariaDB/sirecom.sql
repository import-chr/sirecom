CREATE DATABASE IF NOT EXISTS SIRECOM;

USE SIRECOM;

-- Tabla de Discentes
CREATE TABLE `discentes` (
    `matricula` VARCHAR(10) NOT NULL,
    `nombre` VARCHAR(50) NOT NULL,
    `apellido` VARCHAR(50) NOT NULL,

    PRIMARY KEY (`matricula`)
)
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;

-- Tabla de Personal Apoyos Didacticos
CREATE TABLE `apoyos_didacticos` (
    `matricula` VARCHAR(10) NOT NULL,
    `nombre` VARCHAR(50) NOT NULL,
    `apellido` VARCHAR(50) NOT NULL,

    PRIMARY KEY (`matricula`)
)
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;

-- Tabla de PC
CREATE TABLE `pc` (
    `pc_id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `discente_matricula` VARCHAR(10) NOT NULL,
    `direccion_MAC` VARCHAR(17) UNIQUE NOT NULL,
    `sistema_operativo` VARCHAR(15) NOT NULL,
    `procesador` VARCHAR(25) NOT NULL,
    `memoria_RAM` INT NOT NULL,
    `marca` VARCHAR(15) NOT NULL,
    `modelo` VARCHAR(25) NOT NULL,
    -- `fecha_registro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `apoyos_matricula` VARCHAR(10) NOT NULL,

    PRIMARY KEY (`pc_id`),

    CONSTRAINT `pc_discente_matricula_fk`
    FOREIGN KEY (`discente_matricula`) REFERENCES `discentes` (`matricula`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,

    CONSTRAINT `pc_apoyos_matricula_fk`
    FOREIGN KEY (`apoyos_matricula`) REFERENCES `apoyos_didacticos` (`matricula`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;