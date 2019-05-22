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
	phone varchar(11) NOT NULL,
	dt_birthday date DEFAULT NULL,
	fk_user int NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(fk_user) REFERENCES tb_users(id)
);

insert into tb_photographers(name,email,phone,dt_birthday,fk_user) values('Caio','caio@gmail.com','67996456959','1998-07-05',1);

CREATE TABLE tb_persons (
	id int NOT NULL AUTO_INCREMENT,
	name varchar(150) NOT NULL,
	email varchar(255) NOT NULL,
	phone varchar(11) NOT NULL,
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
	name varchar(255) NOT NULL,
	url varchar(255) NOT NULL,
	fk_photographer int NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(fk_photographer) REFERENCES tb_photographers(id)
);

insert into tb_photos(nome,url,fk_photographer) values("Cachorro","application/views/res/site/img/gallery/1.jpg",1);
insert into tb_photos(nome,url,fk_photographer) values("Lagarto","application/views/res/site/img/gallery/2.jpg",1);
insert into tb_photos(nome,url,fk_photographer) values("Torre","application/views/res/site/img/gallery/3.jpg",1);
insert into tb_photos(nome,url,fk_photographer) values("Neve","application/views/res/site/img/gallery/4.jpg",1);

CREATE TABLE tb_photos_galleries (
	fk_photo int NOT NULL,
	fk_gallery int NOT NULL
);

CREATE TABLE tb_galleries (
	id int NOT NULL AUTO_INCREMENT,
	name varchar(50) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE tb_projects (
	id int NOT NULL AUTO_INCREMENT,
    title varchar(30) NOT NULL,
    description text NOT NULL,
    image varchar(255) NOT NULL,
    PRIMARY KEY(id)
);

insert into tb_projects(title,description,image)values("Projeto 1","Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. Curabitur et mattis ex, a ultrices.","application/views/res/site/img/slider-bg-1.jpg");
insert into tb_projects(title,description,image) values("Projeto 2","Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. Curabitur et mattis ex, a ultrices.","application/views/res/site/img/slider-bg-2.jpg");
insert into tb_projects(title,description,image) values("Projeto 3","Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. Curabitur et mattis ex, a ultrices.","application/views/res/site/img/slider-bg-3.jpg");

CREATE TABLE tb_configs (
	id int NOT NULL AUTO_INCREMENT,
	logo varchar(255) NOT NULL,
    phone varchar(11) NOT NULL,
    street varchar(100) NOT NULL,
    district varchar(100) NOT NULL,
    number int NOT NULL,
    city varchar(30) NOT NULL,
    state varchar(30) NOT NULL,
    zipcode varchar(8) NOT NULL,
    email varchar(255) NOT NULL,
    PRIMARY KEY(id)
);

insert into tb_configs(logo,phone,street,district,number,city,state,zipcode,email)
values(
		"application/views/res/site/img/logo.png",
        "67996456959",
        "Luiz Martins Da Cunha",
        "Senhor Divino",
        300,
        "Coxim",
        "Mato Grosso Do Sul",
        "79400000",
        "photo.gallery@contact.com"
);

CREATE TABLE tb_posts (
	id int NOT NULL AUTO_INCREMENT,
    title varchar(100) NOT NULL,
    description text NOT NULL,
    dt_post datetime DEFAULT CURRENT_TIMESTAMP,
    image varchar(255) NOT NULL,
    fk_photographer int NOT NULL,
    PRIMARY KEY(id)
);

insert into tb_posts(title,description,dt_post,image,fk_photographer)
values(
		"The best tips & tricks",
        "Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. Curabitur et mattis ex, a ultrices. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
        "2019-05-18 03:01:55",
        "application/views/res/site/img/blog/1.jpg",
        1
);

insert into tb_posts(title,description,dt_post,image,fk_photographer)
values(
		"The best tips & tricks",
        "Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. Curabitur et mattis ex, a ultrices. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus.",
        "2019-05-18 18:06:35",
        "application/views/res/site/img/blog/2.jpg",
        1
);

CREATE TABLE tb_messages (
	id int NOT NULL AUTO_INCREMENT,
    name varchar(100) NOT NULL,
    email varchar(255) NOT NULL,
    subject varchar(50) NOT NULL,
    message text NOT NULL,
    dt_message timestamp NOT NULL,
    status tinyint(1) DEFAULT 0,
    PRIMARY KEY(id)
);