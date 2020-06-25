create database archivos character set utf8 collate utf8_general_ci

create table nombre (
    id int not null,
    nombre varchar(255) not null,
    primary key (id)
);

create table extension (
    id int not null,
    ext varchar(255) not null,
    primary key (id)
);

