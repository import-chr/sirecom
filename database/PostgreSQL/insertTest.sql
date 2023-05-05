USE sirecom;

-- insercion en discentes
INSERT INTO discente (matricula, nombre, apellidom, apellidop) VALUES
-- ICI A
('A-10045358', 'Teresa', 'Morales', 'Vega'),
('D-5471240', 'Yael', 'Salgado', 'Sánchez'),
('D-5911001', 'Seigi', 'Alatriste', 'Trejo'),
('A-10111382', 'Lucely', 'González', 'Escamilla'),
('D-6211352', 'Christian Jair', 'Loeza', 'Ramírez'),
('A-10111386', 'Dania Itzel', 'Hernández', 'Guzmán'),
('A-10061184', 'Mónica Selene', 'Martínez', 'Alvarez'),
('D-4798116', 'Jonathan Gamaliel', 'Santana', 'Zamora'),
('A-10061116', 'Kenia Elizabeth', 'Rodríguez', 'Moreno');

-- insercion en apoyos_didacticos
INSERT INTO admin (matricula, nombre, apellidom, apellidop) VALUES
('A-10081143', 'Paola', 'Hernandez', 'Cruz'),
('C-9656115', 'Jesus', 'Montes', 'Diaz');

-- insercion en pc
INSERT INTO pc (direccion_mac, sis_op, procesador, ram_gb, marca, modelo) VALUES
('00:1B:44:11:3A:B0', 'Windows', 'Intel Core i3-11', 8, 'Acer', 'Aspire 3'),
('00:1B:44:11:3A:B1', 'Windows', 'Intel Core i5-11', 8, 'HP', 'Pavilion'),
('00:1B:44:11:3A:B3', 'Windows', 'Intel Celeron', 8, 'DELL', 'Latitude'),
('00:1B:44:11:3A:B4', 'Windows', 'Intel Core i7-11', 16, 'ASUS', 'TUF F15'),
('00:1B:44:11:3A:B5', 'Linux', 'Intel Core i5-10', 8, 'MSI', 'GF63'),
('00:1B:44:11:3A:B6', 'Windows', 'Intel Core i7-10', 16, 'MSI', 'GF63'),
('00:1B:44:11:3A:B7', 'Windows', 'Intel Core i5-10', 8, 'MSI', 'GT76'),
('00:1B:44:11:3A:B8', 'Windows', 'Intel Core i5-9', 8, 'Acer', 'Aspire'),
('00:1B:44:11:3A:B9', 'Linux', 'Intel Core i5-10', 16, 'MSI', 'GF63'),
('00:1B:44:11:3A:C0', 'Windows', 'Intel Celeron', 8, 'Acer', 'Aspire 3'),
('00:1B:44:11:3A:C1', 'Windows', 'Intel Core i5-7', 8, 'HP', 'Pavilion');

INSERT INTO tipo_registro (tipo) VALUES
('Registro'),
('Préstamo');

INSERT INTO registro (id_pc, id_dis, id_admin, id_tipo) VALUES
(1, 5, 1, 1),
(2, 6, 1, 1),
(3, 2, 2, 1),
(4, 3, 2, 2);