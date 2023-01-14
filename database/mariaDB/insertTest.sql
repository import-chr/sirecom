USE SIRECOM;

-- insercion en discentes
INSERT INTO `discentes` VALUES
-- ICI A
("A-10042358", "Teresa", "Morales Vega"),
("D-5475140", "Yael", "Salgado Sánchez"),
("D-5975001", "Seigi", "Alatriste Trejo"),
("A-10061382", "Lucely", "González Escamilla"),
("D-6223352", "Christian Jair", "Loeza Ramírez"),
("A-10061386", "Dania Itzel", "Hernández Guzmán"),
("A-10061384", "Mónica Selene", "Martínez Alvarez"),
("D-4798856", "Jonathan Gamaliel", "Santana Zamora"),
("A-10061496", "Kenia Elizabeth", "Rodríguez Moreno"),
-- ICI B
("D-5895030", "Alex Jair", "Solís Villa"),
("D-5908473", "Daniel", "Esparza González"),
("A-10061764", "Nancy Itzel", "Rojas Ayala"),
("A-10061383", "Kenya", "Elizalde Martínez"),
("A-10061385", "Dulce Noelia", "Flores López"),
("D-6612432", "Emilio Iván", "Esteban Cabrera"),
("D-5941641", "Julio Cesar", "Vidal Hernández"),
("A-10050872", "Alejandra", "Valdivia Barajas"),
("A-10061381", "Maria Mercedes", "Ruíz Palacios"),
("D-5247493", "Johann Alejandro", "Sánchez Martínez"),
-- ICE
("D-6365023", "Osvaldo", "Jiménez Grande"),
("D-5472693", "Eduardo", "López González"),
("D-5531874", "José Alberto", "De La Cruz Méndez"),
("D-4797580", "Abraham Eduardo", "López Arellano"),
-- IC
("D-6250292", "Edgar", "Ávila Carrillo"),
("A-10061672", "Cipactli", "Castellanos Cruz"),
("D-5415400", "Ángel De Jesús", "Mil González"),
("A-10061497", "Pamela Dominique", "Galván Ruíz"),
("A-10061491", "Dennisse Aranzazu", "Paz Vazquez"),
("A-10061493", "Elizabeth Sarai", "Martínez Molina"),
-- II
("D-4893549", "Daniel", "Olvera Zarate"),
("D-5684277", "Mauricio", "Moreno Gómez"),
("D-6049033", "David Natan", "Guevara Sanchez"),
("A-10061527", "Mariana Yahomi", "Arias Zetina"),
("A-10055395", "Nancy Mercedes", "Huerta Morales"),
("D-4798512", "Erick Leonardo", "Camargo Pacheco"),
("A-10061492", "Haley Valeria", "Avendaño Sanchez"),
("A-10061495", "Nancy Maddiela", "Salas Maldonado"),
("A-10061494", "Alejandra Yamileth", "Ledezma Aguirre"),
("A-10061523", "Maria Del Rosario", "Escamilla Mendoza");

-- insercion en apoyos_didacticos
INSERT INTO `apoyos_didacticos` VALUES
("A-10085643", "Paola", "Hernandez"),
("C-9656355", "Jesus", "Montes");

-- insercion en pc
INSERT INTO `pc` VALUES
(null, "D-4798512", "00:1B:44:11:3A:B0", "Windows", "Intel Core i3-11", 8, "Acer", "Aspire 3", "A-10085643"),
(null, "A-10061494", "00:1B:44:11:3A:B1", "Windows", "Intel Core i5-11", 8, "HP", "Pavilion", "C-9656355"),
(null, "D-4798512", "00:1B:44:11:3A:B3", "Windows", "Intel Celeron", 8, "DELL", "Latitude", "A-10085643"),
(null, "A-10061523", "00:1B:44:11:3A:B4", "Windows", "Intel Core i7-11", 16, "ASUS", "TUF F15", "C-9656355"),
(null, "A-10061764", "00:1B:44:11:3A:B5", "Linux", "Intel Core i5-10", 8, "MSI", "GF63", "C-9656355"),
(null, "A-10061496", "00:1B:44:11:3A:B6", "Windows", "Intel Core i7-10", 16, "MSI", "GF63", "A-10085643"),
(null, "D-5415400", "00:1B:44:11:3A:B7", "Windows", "Intel Core i5-10", 8, "MSI", "GT76", "C-9656355"),
(null, "D-5908473", "00:1B:44:11:3A:B8", "Windows", "Intel Core i5-9", 8, "Acer", "Aspire", "C-9656355"),
(null, "D-5941641", "00:1B:44:11:3A:B9", "Linux", "Intel Core i5-10", 16, "MSI", "GF63", "C-9656355"),
(null, "A-10055395", "00:1B:44:11:3A:C0", "Windows", "Intel Celeron", 8, "Acer", "Aspire 3", "A-10085643"),
(null, "A-10061494", "00:1B:44:11:3A:C1", "Windows", "Intel Core i5-7", 8, "HP", "Pavilion", "C-9656355"),
(null, "D-5415400", "00:1B:44:11:3A:C3", "Windows", "Intel Celeron", 8, "DELL", "Latitude", "A-10085643"),
(null, "A-10061523", "00:1B:44:11:3A:C4", "Windows", "Intel Core i7-11", 16, "ASUS", "TUF F15", "C-9656355"),
(null, "A-10061494", "00:1B:44:11:3A:C5", "Linux", "Intel Core i5-10", 8, "MSI", "GF63", "C-9656355"),
(null, "A-10061385", "00:1B:44:11:3A:C6", "Windows", "Intel Core i7-10", 16, "MSI", "GF63", "A-10085643"),
(null, "D-5415400", "00:1B:44:11:3A:C7", "Windows", "Intel Core i5-10", 8, "MSI", "GL66", "C-9656355"),
(null, "D-5975001", "00:1B:44:11:3A:C8", "Linux", "Intel Core i5-9", 4, "Acer", "Aspire", "C-9656355"),
(null, "D-5941641", "00:1B:44:11:3A:C9", "Linux", "Intel Core i5-10", 8, "MSI", "GF63", "C-9656355");