CREATE TABLE tb_user(
	id int(6) not null AUTO_INCREMENT PRIMARY KEY,
    nama varchar(30) null,
    user_name varchar(15) null,
    password varchar(10) NOT null
);

CREATE TABLE tb_admin(
	id_admin int(6) not null AUTO_INCREMENT PRIMARY KEY,
    nama varchar(30) null,
    alamat varchar(100) null,
    email varchar(20) null,
    password CHARACTER(10) NOT null,
    JKelamin CHARACTER(10)
);

