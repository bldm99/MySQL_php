


create table personas(
   id int not null primary key auto_increment,
   nombre varchar(20),
   apellido varchar(20),
   email varchar(50),
   fecha_re varchar(20)
);
create table usuarios(
   id int not null primary key auto_increment,
   nombre varchar(20),
   email varchar(20),
   paswoord varchar(50),
   edad varchar(50),
   fecha_re varchar(20)
);
select *from usuarios;
select   email , paswoord from usuarios where email='bldm3@gmail.com' and paswoord='unodostres' ;

select email from usuarios;
DELETE FROM usuarios WHERE id >1;





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

UPDATE menu set nombre='Sign up' where id=2;


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
Create database duplicado;
use duplicado;
create table fotos(
   id int not null primary key auto_increment,
   nombre varchar(50),
   imagen varchar(200)
);

create table f(
   id int not null primary key auto_increment,
   nombre varchar(50),
   imagen varchar(200)
);


select *from fotos;
DELETE FROM fotos WHERE id =21;
/*DROP  TABLE fotos;*/

UPDATE fotos set nombre='Balon oscuro'
  where id=57;


create table header(
   id int not null primary key auto_increment,
   palabra varchar(50)
);
select *from header;
INSERT INTO header (palabra)
VALUES ('Quienes somos'),('Blog'),('Demo'),('Artistas'),('Terminos de condicion'),('Deportes'),('Arte'),
('Contactanos'),('Trabajos'),('Soportes'),('Patrocinadores'),
('Redes Socilales'),('Instagram'),('DevianArt'),('Twitter'),('Youtube'),('Inicie su nueva Galliry');

DELETE FROM header WHERE id =7;
