

CREATE TABLE Categoria
(
	idcategoria int not null AUTO_INCREMENT,
	nombrecategoria character (20) not null,
	CONSTRAINT PK_categoria primary key (idcategoria)
);

CREATE TABLE Noticia(
	idnoticia int not null AUTO_INCREMENT,
	idcategoria int not null REFERENCES Categoria,
  titulonoticia varchar(40) not null,
	infonoticia varchar(500) not null,
  pathimagen varchar(50) not null,
	CONSTRAINT PK_noticia primary key (idnoticia)
);

CREATE TABLE Usuario
(
	idusuario int not null AUTO_INCREMENT,
	username varchar (20) not null,
	useravatar varchar (30) not null default 'imagenes/starter.png',
	edad int (2) not null,
	nacion varchar (15) not null,
	CONSTRAINT PK_usuario primary key (idusuario)
);

INSERT INTO Categoria (nombrecategoria) VALUES ('items');
INSERT INTO Noticia (idcategoria,titulonoticia,infonoticia,pathimagen) VALUES (1,'Titulo Prueba','El siguiente texto se trata sobre una categoria....','imagenes/5v5.jpg');

/*


CREATE TABLE eventos
(
	idcreador int (20) not null,
	idevento int (20) not null,
	comentarios	varchar(200) not null,
	Nombre varchar (20) not null,
	Tipo varchar (20) not null,
	Password character (20) not null,
	CONSTRAINT PK_eventos primary key (idevento)
);



CREATE TABLE Mensajes
(
	idmensaje int NOT NULL AUTO_INCREMENT,
	idtema int(10) not null,
	mensaje varchar(600) not null,
	idcreador character (20) not null,
	urlimagen character (50) DEFAULT 'Portada_perfil.PNG',
	CONSTRAINT PK_Mensajes PRIMARY KEY (idmensaje),
	CONSTRAINT FK_Mensajes2 FOREIGN KEY (idtema) REFERENCES Temas(idtema),
	CONSTRAINT FK_Mensajes3 FOREIGN KEY (idcreador) REFERENCES Usuario(idusuario)
);

INSERT INTO Mensajes (idtema,mensaje, usuario)
VALUES (1,'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedan','Federico');

INSERT INTO Temas (idtema,nombretema, temageneral) VALUES
(1,'items.php','juego.php');
*/
