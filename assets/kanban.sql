CREATE DATABASE kanban;
USE kanban;

CREATE TABLE PENDIENTE (
  ID int not null auto_increment primary key,
  DESCRIPCION varchar (200) not null
);
CREATE TABLE PROCESO (
  ID int not null auto_increment primary key,
  DESCRIPCION varchar (200) not null
);
CREATE TABLE LISTO (
  ID int not null auto_increment primary key,
  DESCRIPCION varchar (200) not null
);