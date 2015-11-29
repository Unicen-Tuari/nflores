

CREATE TABLE Categoria
(
	idcategoria int not null AUTO_INCREMENT,
	nombrecategoria character (20) not null,
	CONSTRAINT PK_categoria primary key (idcategoria)
);

CREATE TABLE Noticia(
	idnoticia int not null AUTO_INCREMENT,
	idcategoria int not null,
  	titulonoticia varchar(40) not null,
	infonoticia varchar(500) not null,
  	pathimagen varchar(50) not null DEFAULT 'imagenes/Portada_perfil.png',
	CONSTRAINT PK_noticia primary key (idnoticia)
	FOREIGN KEY (idcategoria) REFERENCES Categoria(idcategoria) ON DELETE CASCADE
);

CREATE TABLE Usuario
(
	idusuario int not null AUTO_INCREMENT,
	password varchar(50) not null,
	email varchar(20) not null,
	username varchar (20) not null,
	useravatar varchar (30) not null default 'imagenes/starter.png',
	edad int (2) not null,
	nacion varchar (15) not null,
	CONSTRAINT PK_usuario primary key (idusuario)
);


ALTER TABLE Noticia ADD FOREIGN KEY (idcategoria) REFERENCES Categoria(idcategoria) ON DELETE CASCADE
INSERT INTO Categoria (nombrecategoria) VALUES ('items');
INSERT INTO Noticia (idcategoria,titulonoticia,infonoticia,pathimagen) VALUES (1,'Titulo Prueba','El siguiente texto se trata sobre una categoria....','imagenes/5v5.jpg');
INSERT INTO Usuario (password,email,username,edad,nacion) VALUES ("21232f297a57a5a743894a0e4a801fc3","admin@admin.com","Jack",20,"Arg");
