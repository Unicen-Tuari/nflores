CREATE TABLE Mensajes
(
	idmensaje int NOT NULL AUTO_INCREMENT,
	idtema int(10) not null,
	mensaje varchar(600) not null,
	idusuario character (20) not null,
	urlimagen character (50) DEFAULT 'Portada_perfil.PNG',
	CONSTRAINT PK_Mensajes PRIMARY KEY (idmensaje),
	CONSTRAINT FK_Mensajes2 FOREIGN KEY (idtema) REFERENCES Temas(idtema),
	CONSTRAINT FK_Mensajes3 FOREIGN KEY (idcreador) REFERENCES Usuario(idusuario)
);

CREATE TABLE Temas
(
	idtema int (10) not null AUTO_INCREMENT,
	nombretema varchar (20) not null,
	idusuario int (20) not null,
	temageneral varchar (20) not null,
	CONSTRAINT PK_temas primary key (idtema),
	CONSTRAINT FK_temas2 FOREIGN KEY (idcreador) REFERENCES Usuario(idusuario)
);
CREATE TABLE Usuario
(
	idusuario int (20) not null,
	nombre varchar (20) not null,
	Avatar varchar (30) not null default 'imagenes/iconobronce.png',
	edad int (2) not null,
	nacion varchar (15) not null,
	CONSTRAINT PK_usuario primary key (idusuario)
);

CREATE TABLE eventos
(
	idusuario int (20) not null,
	idevento int (20) not null,
	comentarios	varchar(200) not null,
	Nombre varchar (20) not null,
	Tipo varchar (20) not null,
	Password character (20) not null,
	CONSTRAINT PK_eventos primary key (idevento)
);

INSERT INTO Mensajes (idmensaje,mensaje,idtema, idusuario)
VALUES (1,'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedan',1,1);

INSERT INTO Usuario (idusuario,nombre,edad,nacion) VALUES (1,'nahuel',23,'ARG');
INSERT INTO Temas (idtema,nombretema,idusuario,temageneral) VALUES (1,'estrategias',1,'temasgenerales');
