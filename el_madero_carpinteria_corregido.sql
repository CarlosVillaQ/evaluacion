CREATE DATABASE el_madero_carpinteria;


CREATE TABLE carpinteria(
id_carpinteria INT NOT NULL AUTO_INCREMENT,
nombre VARCHAR(30) NOT NULL,
telefono VARCHAR(20) NOT NULL,
direccion VARCHAR(40) NOT NULL,
logo_carpinteria VARCHAR(100) NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_carpinteria)	
)ENGINE=INNODB;

CREATE TABLE dueño(
id_dueño INT NOT NULL AUTO_INCREMENT,
id_carpinteria INT NOT NULL,
nombres VARCHAR(30) NOT NULL,
apellidos VARCHAR(30) NOT NULL,
direccion VARCHAR(40) NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_dueño),	
FOREIGN KEY(id_carpinteria) REFERENCES carpinteria(id_carpinteria)
)ENGINE=INNODB;


CREATE TABLE trabajadores(
id_trabajador INT NOT NULL AUTO_INCREMENT,
id_carpinteria INT NOT NULL,
nombres VARCHAR(30) NOT NULL,
apellidos VARCHAR(30) NOT NULL,
ci VARCHAR(20) NOT NULL,
telefono VARCHAR(20),
fecha_nac DATE NOT NULL,
fecha_inicio DATE NOT NULL,
fecha_fin DATE NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_trabajador),	
FOREIGN KEY(id_carpinteria) REFERENCES carpinteria(id_carpinteria)
)ENGINE=INNODB;



CREATE TABLE clientes(
id_cliente INT NOT NULL AUTO_INCREMENT,
id_carpinteria INT NOT NULL,
nombres VARCHAR(30) NOT NULL,
apellidos VARCHAR(30) NOT NULL,
telefono VARCHAR(20),
tipo_cliente VARCHAR(10)NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_cliente),	
FOREIGN KEY(id_carpinteria) REFERENCES carpinteria(id_carpinteria)
)ENGINE=INNODB;



CREATE TABLE proveedores(
id_proveedor INT NOT NULL AUTO_INCREMENT,
id_carpinteria INT NOT NULL,
nombres VARCHAR(30) NOT NULL,
apellidos VARCHAR(30) NOT NULL,
telefono VARCHAR(20),
caracteristicas VARCHAR(40),
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_proveedor),	
FOREIGN KEY(id_carpinteria) REFERENCES carpinteria(id_carpinteria)
)ENGINE=INNODB;



CREATE TABLE tipo_muebles(
id_tipo_mueble INT NOT NULL AUTO_INCREMENT,
material VARCHAR(30) NOT NULL,
tamaño_m2 FLOAT(10) NOT NULL,
color VARCHAR(20) NOT NULL,
descripcion VARCHAR(30) NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_tipo_mueble)	
)ENGINE=INNODB;


CREATE TABLE horarios_trabajadores(
id_horario_trabajador INT NOT NULL AUTO_INCREMENT,
id_trabajador INT NOT NULL,
hora_entrada VARCHAR(20) NOT NULL,
hora_salida VARCHAR(20) NOT NULL,
dias VARCHAR(20) NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_horario_trabajador),
FOREIGN KEY(id_trabajador) REFERENCES trabajadores(id_trabajador)
)ENGINE=INNODB;


CREATE TABLE ventas(
id_venta INT NOT NULL AUTO_INCREMENT,
id_cliente INT NOT NULL,
fecha_venta DATE NOT NULL,
monto_venta FLOAT(15) NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_venta),
FOREIGN KEY(id_cliente) REFERENCES clientes(id_cliente)
)ENGINE=INNODB;



CREATE TABLE muebles(
id_mueble INT NOT NULL AUTO_INCREMENT,
id_trabajador INT NOT NULL,
id_tipo_mueble INT NOT NULL,
precio FLOAT(15) NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_mueble),
FOREIGN KEY(id_trabajador) REFERENCES trabajadores(id_trabajador),
FOREIGN KEY(id_tipo_mueble) REFERENCES tipo_muebles(id_tipo_mueble)
)ENGINE=INNODB;



CREATE TABLE detalles_ventas(
id_detalle_venta INT NOT NULL AUTO_INCREMENT,
id_mueble INT NOT NULL,
id_venta INT NOT NULL,
cantidad INT NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_detalle_venta),
FOREIGN KEY(id_mueble) REFERENCES muebles(id_mueble),
FOREIGN KEY(id_venta) REFERENCES ventas(id_venta)
)ENGINE=INNODB;


INSERT INTO carpinteria VALUES(1,'EL MADERO','46646889','B/TABLADITA S/N','logo_carpinteria.png',now(),now(),1,1);

INSERT INTO dueño VALUES(1,1,'DAMIAN','VILLA','B/TABLADITA S/N',now(),now(),1,1);

INSERT INTO trabajadores VALUES(1,1,'CARLOS OSMAR','VILLA QUISBERT','5819055','79255849','1986-07-24','2020-03-01','2021-03-01',now(),now(),1,1);
INSERT INTO trabajadores VALUES(2,1,'MILTON ISMAEL','VELASCO','5923732','72898381','1978-06-17','2020-06-01','2021-06-01',now(),now(),1,1);
INSERT INTO trabajadores VALUES(3,1,'MANUEL','QUISBERT','9383641','72987631','2001-09-25','2020-10-01','2021-10-01',now(),now(),1,1);
INSERT INTO trabajadores VALUES(4,1,'ARMANDO ','VALLEJOS','5814555','72987349','1988-07-09','2020-02-01','2021-02-01',now(),now(),1,1);
INSERT INTO trabajadores VALUES(5,1,'MATEO ','CARDOZO HUMEREZ','5998132','72927821','1998-05-11','2020-09-01','2021-09-01',now(),now(),1,1);
INSERT INTO trabajadores VALUES(6,1,'FRANZ','GUTIERREZ','5245564','7023456','2001-02-12','2020-03-01','2021-03-01',now(),now(),1,1);

INSERT INTO clientes VALUES(1,1,'JOSE','HUANCA','65789452','N',now(),now(),1,1);
INSERT INTO clientes VALUES(2,1,'GUIDO','ARAMAYO','79244566','A',now(),now(),1,1);
INSERT INTO clientes VALUES(3,1,'CIRO','RODRIGUEZ','72934567','N',now(),now(),1,1);
INSERT INTO clientes VALUES(4,1,'LOURDES','DIAZ','72987651','N',now(),now(),1,1);
INSERT INTO clientes VALUES(5,1,'JUAN','BORDA','65892881','A',now(),now(),1,1);
INSERT INTO clientes VALUES(6,1,'ERLAN','MENDOZA','76187251','N',now(),now(),1,1);
INSERT INTO clientes VALUES(7,1,'AMADO','DEL CARPIO','70227043','A',now(),now(),1,1);
INSERT INTO clientes VALUES(8,1,'JUAN','VEGA','9842452','N',now(),now(),1,1);
INSERT INTO clientes VALUES(9,1,'WILLAN','TORREZ','7612931','A',now(),now(),1,1);
INSERT INTO clientes VALUES(10,1,'BELEN','CASTILLO','65272812','A',now(),now(),1,1);

INSERT INTO proveedores VALUES(1,1,'JESUS','MOLINA','65789452','VENTA DE MADERA',now(),now(),1,1);
INSERT INTO proveedores VALUES(2,1,'CARLA','VIDEZ','72944123','VENTA DE BARNIZ',now(),now(),1,1);
INSERT INTO proveedores VALUES(3,1,'JUAN','JEREZ','65882314','VENTA DE MELAMINA',now(),now(),1,1);
INSERT INTO proveedores VALUES(4,1,'FIDEL','MUÑOZ','6646791','VENTA DE FERRETERIA',now(),now(),1,1);
INSERT INTO proveedores VALUES(5,1,'CRISTIAN','MACHADO','65587492','VENTA DE MELAMINA',now(),now(),1,1);
INSERT INTO proveedores VALUES(6,1,'JORGE','BENITEZ','70948723','VENTA DE MELAMINA',now(),now(),1,1);
INSERT INTO proveedores VALUES(7,1,'JUAN','BALDIVIEZO','71896544','VENTA DE MADERA',now(),now(),1,1);
INSERT INTO proveedores VALUES(8,1,'RAUL','ABAN','72246791','VENTA DE FERRETERIA',now(),now(),1,1);

INSERT INTO tipo_muebles VALUES(1,'MADERA CEDRO',1.35,'CEDRO','MUEBLE DE COCINA',now(),now(),1,1);
INSERT INTO tipo_muebles VALUES(2,'MELAMINA',5.5,'BLANCO','PUERTA',now(),now(),1,1);
INSERT INTO tipo_muebles VALUES(3,'MADERA CEDRO',1.9,'CEDRO','VITRINA',now(),now(),1,1);
INSERT INTO tipo_muebles VALUES(4,'MADERA ROBLE',3.8,'AMARILLO','ROPERO',now(),now(),1,1);
INSERT INTO tipo_muebles VALUES(5,'MELAMINA',3,'NEGRO','VENTANA',now(),now(),1,1);

INSERT INTO horarios_trabajadores VALUES(1,1,'08:00 ','18:00','LUNES-VIERNES',now(),now(),1,1);
INSERT INTO horarios_trabajadores VALUES(2,2,'08:00 ','18:00','LUNES-JUEVES',now(),now(),1,1);
INSERT INTO horarios_trabajadores VALUES(3,3,'08:00 ','18:00','LUNES-SABADO',now(),now(),1,1);

INSERT INTO ventas VALUES(1,1,'2019-07-24','2800',now(),now(),1,1);
INSERT INTO ventas VALUES(2,2,'2020-01-24','1380',now(),now(),1,1);
INSERT INTO ventas VALUES(3,3,'2020-01-25','2800',now(),now(),1,1);
INSERT INTO ventas VALUES(4,3,'2020-02-03','1700',now(),now(),1,1);
INSERT INTO ventas VALUES(5,3,'2020-02-10','1400',now(),now(),1,1);
INSERT INTO ventas VALUES(6,3,'2020-02-16','5000',now(),now(),1,1);
INSERT INTO ventas VALUES(7,4,'2020-03-01','6200',now(),now(),1,1);
INSERT INTO ventas VALUES(8,5,'2020-03-17','1380',now(),now(),1,1);
INSERT INTO ventas VALUES(9,6,'2020-05-23','1700',now(),now(),1,1);
INSERT INTO ventas VALUES(10,7,'2020-06-29','1380',now(),now(),1,1);

INSERT INTO muebles VALUES(1,1,1,1400,now(),now(),1,1);
INSERT INTO muebles VALUES(2,1,3,1380,now(),now(),1,1);
INSERT INTO muebles VALUES(3,1,1,2500,now(),now(),1,1);
INSERT INTO muebles VALUES(4,2,2,6200,now(),now(),1,1);
INSERT INTO muebles VALUES(5,2,5,1700,now(),now(),1,1);

INSERT INTO detalles_ventas VALUES(1,1,1,2,now(),now(),1,1);
INSERT INTO detalles_ventas VALUES(2,2,2,1,now(),now(),1,1);
INSERT INTO detalles_ventas VALUES(3,3,3,1,now(),now(),1,1);
INSERT INTO detalles_ventas VALUES(4,5,4,1,now(),now(),1,1);
INSERT INTO detalles_ventas VALUES(5,1,5,1,now(),now(),1,1);
INSERT INTO detalles_ventas VALUES(6,3,6,2,now(),now(),1,1);
INSERT INTO detalles_ventas VALUES(7,4,7,1,now(),now(),1,1);
INSERT INTO detalles_ventas VALUES(8,2,8,2,now(),now(),1,1);
INSERT INTO detalles_ventas VALUES(9,5,9,1,now(),now(),1,1);
INSERT INTO detalles_ventas VALUES(10,2,10,1,now(),now(),1,1);

CREATE TABLE personas(
id_persona INT NOT NULL AUTO_INCREMENT,
id_carpinteria INT NOT NULL,
ci VARCHAR(15) NOT NULL,
nombres VARCHAR(20) NOT NULL,
ap VARCHAR(30),
am VARCHAR(30),
telefono VARCHAR(30),
direccion VARCHAR(30),
genero CHAR(1) NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_persona),
FOREIGN KEY(id_carpinteria) REFERENCES carpinteria(id_carpinteria)
)ENGINE=INNODB;

INSERT INTO personas VALUES (1, 1, '5819055 TJA', 'CARLOS OSMAR', 'VILLA', 'QUISBERT', '79255849', 'B/TABLADITA','M', now(), now(),1,1);
INSERT INTO personas VALUES (2, 1, '2704575 LP', 'MANUEL SEBASTIAN', 'VILLA', 'QUISBERT', '72944507', 'B/SENAC','M', now(), now(),1,1);
INSERT INTO personas VALUES (3, 1, '2321331 TJA', 'JHAMIL', 'MARCA', 'VILLCA', '72987658', 'B/TIERRA LINDA','M', now(), now(),1,1);
INSERT INTO personas VALUES (4, 1, '9723213 SC', 'JOSE ANTONIO', 'HUANCA', 'LOPEZ', '70236182', 'B/ANDALUCIA','M', now(), now(),1,1);
INSERT INTO personas VALUES (5, 1, '2321323 TJA', 'JORGE LUIS', 'SOSSA', 'MENDOZA', '79987622', 'B/LUIS DE FUENTES','M', now(), now(),1,1);
INSERT INTO personas VALUES (6, 1, '5819009 TJA', 'CARLOS OSMAR', 'VILLA', 'QUISBERT', '79255849', 'B/TABLADITA','M', now(), now(),1,1);
INSERT INTO personas VALUES (7, 1, '2704212 LP', 'MARIA DEL CARMEN', 'HUMEREZ', 'MOLLO', '7291237', 'B/MENDEZ ARCOS','F', now(), now(),1,1);
INSERT INTO personas VALUES (8, 1, '2329875 TJA', 'FABIOLA', 'VILLA', 'HUANCA', '70236182', 'B/TABLADITA','F', now(), now(),1,1);
INSERT INTO personas VALUES (9, 1, '9722313 SC', 'LUZ', 'HUANCA', 'VILLA', '7321323', 'B/ANDALUCIA','F', now(), now(),1,1);
INSERT INTO personas VALUES (10, 1, '2321213 TJA', 'CAROLA', 'ANDREA', 'MENDOZA', '7931322', 'B/LUIS DE FUENTES','F', now(), now(),1,1);

CREATE TABLE usuarios(
id_usuario INT NOT NULL AUTO_INCREMENT,
id_persona INT NOT NULL,
usuario_1 VARCHAR(30) NOT NULL,
clave VARCHAR(100) NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_usuario),
FOREIGN KEY(id_persona) REFERENCES personas(id_persona)
)ENGINE=INNODB;

INSERT INTO usuarios VALUES (1, 1, 'admin', '$2y$10$HxB1sZ3p/ok/Aa3cyATcsuGZoUrZzW5.TtmaiYh61S38axFgKVmXK',now(), now(),1,1);
INSERT INTO usuarios VALUES (2, 2, 'secretario', '$2y$10$TJNCSljZy0Nzbkg86998RuKbbUxP5Xl7lpoj1c0Or5JGoD6VbKawu',now(), now(),1,1);
INSERT INTO usuarios VALUES (5, 3, 'contador', '$2y$10$cGGymJm2o135sacfbQzcNukv2zToxZOq/jJ76S0KBNe5d3lxCXPxC',now(), now(),1,1);
INSERT INTO usuarios VALUES (4, 4, 'materiales', '22222',now(), now(),1,1);
INSERT INTO usuarios VALUES (6, 9, 'secretaria', '$2y$10$QVtTMwD.Rwc0aSK3qkXSVufYRCtOe8GY1A8WVGSkSXoy9qmrLI546',now(), now(),1,1);

CREATE TABLE roles(
id_rol INT NOT NULL AUTO_INCREMENT,
rol VARCHAR(30) NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_rol)
)ENGINE=INNODB;

INSERT INTO roles VALUES (1, 'ADMINISTRADOR',now(), now(),1,1);
INSERT INTO roles VALUES (2, 'USUARIO PRUEBA 1',now(), now(),1,1);
INSERT INTO roles VALUES (3, 'USUARIO PRUEBA 2',now(), now(),1,1);
INSERT INTO roles VALUES (4, 'SECRETARIA',now(), now(),1,1);
CREATE TABLE usuarios_roles(
id_usuario_rol INT NOT NULL AUTO_INCREMENT,
id_usuario INT NOT NULL,
id_rol INT NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_usuario_rol),
FOREIGN KEY(id_usuario) REFERENCES usuarios(id_usuario),
FOREIGN KEY(id_rol) REFERENCES roles(id_rol)
)ENGINE=INNODB;

INSERT INTO usuarios_roles VALUES (1, 1, 1, now(), now(),1,1);
INSERT INTO usuarios_roles VALUES (2, 2, 2, now(), now(),1,1);
INSERT INTO usuarios_roles VALUES (3, 5, 3, now(), now(),1,1);
INSERT INTO usuarios_roles VALUES (4, 6, 4, now(), now(),1,1);

CREATE TABLE grupos(
id_grupo INT NOT NULL AUTO_INCREMENT,
grupo VARCHAR(30) NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_grupo)
)ENGINE=INNODB;

INSERT INTO grupos VALUES (1, 'HERRAMIENTAS',now(), now(),1,1);
INSERT INTO grupos VALUES (2, 'CARPINTERIA EL MADERO',now(), now(),1,1);
INSERT INTO grupos VALUES (3, 'REPORTES',now(), now(),1,1);

CREATE TABLE opciones(
id_opcion INT NOT NULL AUTO_INCREMENT,
id_grupo INT NOT NULL,
opcion VARCHAR(30) NOT NULL,
contenido VARCHAR(100) NOT NULL,
orden  INT NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_opcion),
FOREIGN KEY(id_grupo) REFERENCES grupos(id_grupo)
)ENGINE=INNODB;

INSERT INTO opciones VALUES (1, 1,'personas','../privada/personas/personas.php',10,now(), now(),1,1);
INSERT INTO opciones VALUES (2, 1,'usuarios','../privada/usuarios/usuarios.php',20,now(), now(),1,1);
INSERT INTO opciones VALUES (3, 1,'grupos','../privada/grupos/grupos.php',30,now(), now(),1,1);
INSERT INTO opciones VALUES (4, 1,'roles','../privada/roles/roles.php',40,now(), now(),1,1);
INSERT INTO opciones VALUES (5, 1,'usuarios_roles','../privada/usuarios_roles/usuarios_roles.php',50,now(), now(),1,1);
INSERT INTO opciones VALUES (6, 1,'opciones','../privada/opciones/opciones.php',60,now(), now(),1,1);
INSERT INTO opciones VALUES (7, 1,'accesos','../privada/accesos/accesos.php',70,now(), now(),1,1);
INSERT INTO opciones VALUES (8, 2,'carpinteria','../privada/carpinteria/carpinteria.php',10,now(), now(),1,1);
INSERT INTO opciones VALUES (9, 2,'propietario','../privada/propietario/propietario.php',20,now(), now(),1,1);
INSERT INTO opciones VALUES (10, 2,'trabajadores','../privada/trabajadores/trabajadores.php',30,now(), now(),1,1);
INSERT INTO opciones VALUES (11, 2,'clientes','../privada/clientes/clientes.php',40,now(), now(),1,1);
INSERT INTO opciones VALUES (12, 2,'proveedores','../privada/proveedores/proveedores.php',50,now(), now(),1,1);
INSERT INTO opciones VALUES (13, 2,'tipos_muebles','../privada/tipos_muebles/tipos_muebles.php',60,now(), now(),1,1);
INSERT INTO opciones VALUES (14, 2,'horario_trabajadores','../privada/horario_trabajadores/horario_trabajadores.php',70,now(), now(),1,1);
INSERT INTO opciones VALUES (15, 2,'ventas','../privada/ventas/ventas.php',80,now(), now(),1,1);
INSERT INTO opciones VALUES (16, 2,'muebles','../privada/muebles/muebles.php',90,now(), now(),1,1);
INSERT INTO opciones VALUES (17, 2,'detalles_ventas','../privada/detalles_ventas/detalles_ventas.php',100,now(), now(),1,1);
INSERT INTO opciones VALUES (18, 3,'Reporte Personas_usuarios',' ../privada/reportes/personas_usuarios.php' ,10,now(), now(),1,1);
INSERT INTO opciones VALUES (19, 3,'Reporte trabajadores_horarios', '../privada/reportes/trabajadores_horarios.php ',20,now(), now(),1,1);
INSERT INTO opciones VALUES (20, 3,'Reporte personas_fechas', ' ../privada/reportes/personas_fechas.php',30,now(), now(),1,1);
INSERT INTO opciones VALUES (21, 3,'Reporte clientes_fechas', ' ../privada/reportes/clientes_fechas.php',40,now(), now(),1,1);
INSERT INTO opciones VALUES (22, 3,'Reporte tipos_muebles', ' ../privada/reportes/muebles_tipomuebles.php',50,now(), now(),1,1);
INSERT INTO opciones VALUES (23, 3,'Reporte trabajadores_fechas', ' ../privada/reportes/trabajadores_fechas.php',60,now(), now(),1,1);
INSERT INTO opciones VALUES (24, 3,'Reporte clientes_ventas', ' ../privada/reportes/clientes_ventas.php',50,now(), now(),1,1);
INSERT INTO opciones VALUES (25, 3,'Reporte fecha_ventas', ' ../privada/reportes/fecha_ventas.php',60,now(), now(),1,1);
INSERT INTO opciones VALUES (26, 3,'Reporte Personas por genero', ' ../privada/reportes/rpt_personas_genero.php',70,now(), now(),1,1);
INSERT INTO opciones VALUES (27, 3,'Reporte Clientes antiguedad', ' ../privada/reportes/rpt_clientes_antiguedad.php',80,now(), now(),1,1);
INSERT INTO opciones VALUES (28, 3,'Ficha Tecnica De Personas', ' ../privada/reportes/fichas_tecnicas_personas.php',90,now(), now(),1,1);
INSERT INTO opciones VALUES (29, 3,'Ficha Tecnica De muebles', ' ../privada/reportes/fichas_tecnicas_muebles.php',100,now(), now(),1,1);
INSERT INTO opciones VALUES (30, 3,'Reporte Proveedores Material', ' ../privada/reportes/rpt_proveedores_material.php',110,now(), now(),1,1);
INSERT INTO opciones VALUES (31, 3,'Ficha Tecnica Proveedores', ' ../privada/reportes/fichas_tecnicas_proveedores.php',120,now(), now(),1,1);

CREATE TABLE accesos(
id_acceso INT NOT NULL AUTO_INCREMENT,
id_opcion INT NOT NULL,
id_rol INT NOT NULL,
fec_insercion TIMESTAMP NOT NULL,
fec_modificacion TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
usuario INT NOT NULL,
estado CHAR(1) NOT NULL,
PRIMARY KEY(id_acceso),
FOREIGN KEY(id_opcion) REFERENCES opciones(id_opcion),
FOREIGN KEY(id_rol) REFERENCES roles(id_rol)
)ENGINE=INNODB;

INSERT INTO accesos VALUES (1, 1, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (2, 2, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (3, 3, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (4, 4, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (5, 5, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (6, 6, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (7, 7, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (8, 8, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (9, 9, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (10, 10, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (11, 11, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (12, 12, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (13, 13, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (14, 14, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (15, 15, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (16, 16, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (17, 17, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (18, 18, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (19, 19, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (20, 20, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (21, 21, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (22, 1, 2,now(), now(),1,1);
INSERT INTO accesos VALUES (23, 2, 2,now(), now(),1,1);
INSERT INTO accesos VALUES (24, 3, 2,now(), now(),1,1);
INSERT INTO accesos VALUES (25, 4, 2,now(), now(),1,1);
INSERT INTO accesos VALUES (26, 11, 3,now(), now(),1,1);
INSERT INTO accesos VALUES (27, 12, 3,now(), now(),1,1);
INSERT INTO accesos VALUES (28, 15, 3,now(), now(),1,1);
INSERT INTO accesos VALUES (29, 16, 3,now(), now(),1,1);
INSERT INTO accesos VALUES (30, 22, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (31, 23, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (32, 24, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (33, 25, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (34, 11, 4,now(), now(),1,1);
INSERT INTO accesos VALUES (35, 12, 4,now(), now(),1,1);
INSERT INTO accesos VALUES (36, 15, 4,now(), now(),1,1);
INSERT INTO accesos VALUES (37, 16, 4,now(), now(),1,1);
INSERT INTO accesos VALUES (38, 22, 4,now(), now(),1,1);
INSERT INTO accesos VALUES (39, 23, 4,now(), now(),1,1);
INSERT INTO accesos VALUES (40, 24, 4,now(), now(),1,1);
INSERT INTO accesos VALUES (42, 25, 4,now(), now(),1,1);
INSERT INTO accesos VALUES (43, 26, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (44, 27, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (45, 28, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (46, 29, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (47, 30, 1,now(), now(),1,1);
INSERT INTO accesos VALUES (48, 31, 1,now(), now(),1,1);