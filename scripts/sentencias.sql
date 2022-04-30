


create table personas(
   id int not null primary key auto_increment,
   nombre varchar(20),
   apellido varchar(20),
   email varchar(50),
   fecha_re varchar(20)
);

create table categorias(
   id int not null primary key auto_increment,
   titulo varchar(20)
);

create table menu(
   id int not null primary key auto_increment,
   nombre varchar(20)
);
INSERT INTO menu (nombre)
VALUES ('Inicio'),('Popular'),('Cuenta'),('Favoritos'),('Destacado');
select *from menu;
select nombre from menu  where id=1 ;

select titulo from   categorias where id = 1;
select *from personas;
select *from categorias;
INSERT INTO categorias (titulo)
VALUES ('Paisajes'),('Animales'),('Cosmos'),('Paisajes'),('Autos'),('Deportes'),('Arte');

select *from personas;
INSERT INTO categorias (nombre,apellido,email)
VALUES ('Paisajes','Animales','rtrtrtr');

show tables;

Create database Paginaweb;
use Paginaweb;

create table fotos(
   id int not null primary key auto_increment,
   nombre varchar(50),
   imagen varchar(200)
);

select *from fotos;
DELETE FROM fotos WHERE codigo >0;
/*DROP  TABLE fotos;*/





