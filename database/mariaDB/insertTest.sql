USE SIRECOM;

-- insercion en discentes
INSERT INTO `discentes` VALUES
("D-7334463", "Christian", "Ramirez"),
("D-5347862", "Pedro", "Villa"),
("D-1234567", "Juan", "Rivera"),
("D-7654321", "Carlos", "Montiel");

-- insercion en apoyos_didacticos
INSERT INTO `apoyos_didacticos` VALUES
("A-10085643", "Paola", "Hernandez"),
("C-9656355", "Jesus", "Dimas");

-- insercion en pc
INSERT INTO `pc` VALUES
(
    null,
    "D-7334463",
    "00:1B:44:11:3A:B7",
    "Windows",
    "Intel Core i3-11",
    8,
    "Acer",
    "Aspire 3",
    -- "2022-12-27 10:52:26",
    "A-10085643"
),
(
    null,
    "D-1234567",
    "00:1B:46:12:3A:B7",
    "Windows",
    "Intel Core i5-11",
    16,
    "HP",
    "Pavilion 15",
    -- "2022-12-27 10:53:26",
    "A-10085643"
),
(
    null,
    "D-7654321",
    "34:2B:44:11:3A:B7",
    "Linux",
    "Intel Core i7-10",
    8,
    "Asus",
    "VivoBook",
    -- "2022-12-27 10:55:26",
    "A-10085643"
);