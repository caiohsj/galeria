CREATE TABLE tb_users (
	id int NOT NULL AUTO_INCREMENT,
	login varchar(255) NOT NULL,
	password varchar(255) NOT NULL,
	isphotographer boolean NOT NULL DEFAULT false,
	PRIMARY KEY(id)
);

insert into tb_users(login,password,isphotographer) values('caio@gmail.com','1234',true);

CREATE TABLE tb_photographers (
	id int NOT NULL AUTO_INCREMENT,
	name varchar(150) NOT NULL,
	email varchar(255) NOT NULL,
	phone int(12) NOT NULL,
	dt_birthday date DEFAULT NULL,
	fk_user int NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(fk_user) REFERENCES tb_users(id)
);

insert into tb_photographers(name,email,phone,dt_birthday,fk_user) values('Caio','caio@gmail.com',67996456959,'1998-07-05',1);

CREATE TABLE tb_persons (
	id int NOT NULL AUTO_INCREMENT,
	name varchar(150) NOT NULL,
	email varchar(255) NOT NULL,
	phone int(11) NOT NULL,
	gender varchar(1) NOT NULL,
	dt_birthday date DEFAULT NULL,
	fk_user int NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(fk_user) REFERENCES tb_users(id)
);

CREATE TABLE tb_addresses (
	id int NOT NULL AUTO_INCREMENT,
	rua varchar(100) NOT NULL,
	num int NOT NULL,
	district varchar(50) NOT NULL,
	zipcode int(8) NOT NULL,
	city varchar(100) NOT NULL,
	complement varchar(50) DEFAULT NULL,
	state varchar(32) NOT NULL,
	country varchar(32) NOT NULL,
	fk_user int NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(fk_user) REFERENCES tb_users(id)
);

CREATE TABLE tb_photos (
	id int NOT NULL AUTO_INCREMENT,
	nome varchar(255) NOT NULL,
	url varchar(255) NOT NULL,
	fk_photographer int NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(fk_photographer) REFERENCES tb_photographers(id)
);

insert into tb_photos(nome,url,fk_photographer) values("Cervo","application/views/res/site/img/gallery/1.jpg",1);
insert into tb_photos(nome,url,fk_photographer) values("Cervo","application/views/res/site/img/gallery/2.jpg",1);
insert into tb_photos(nome,url,fk_photographer) values("Cervo","application/views/res/site/img/gallery/3.jpg",1);
insert into tb_photos(nome,url,fk_photographer) values("Cervo","application/views/res/site/img/gallery/4.jpg",1);

CREATE TABLE tb_photos_galleries (
	fk_photo int NOT NULL,
	fk_gallery int NOT NULL
);

CREATE TABLE tb_galleries (
	id int NOT NULL AUTO_INCREMENT,
	name varchar(50) NOT NULL,
	PRIMARY KEY(id)
);