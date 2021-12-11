drop database if exists MapYourAncestors;
create database MapYourAncestors;
use MapYourAncestors;

create table person(
person_id int auto_increment not null primary key,
first_name varchar(20),
middle_name varchar(15), 
last_name varchar(20),
age tinyint unsigned, 
gender char(1),/*'M','F'*/
check (gender='M' or gender='F'),
date_of_birth date,
place_of_birth varchar(20),
nationality varchar(25),
email varchar(60),
password varchar(50)
);

create table DNA(
dna_id int not null, 
primary key(dna_id),
height decimal(2,1),
eye_color varchar (10),
hair_color varchar(10)
);



create table ancestor(
ancestor_id int,
primary key(ancestor_id),
name varchar(20),
occupation varchar(15), 
location varchar(30),
status varchar(10),
dateofdeath date,
placeofdeath varchar(20),
causeofdeath varchar(40)
);



#creation of indexes
create index personal_triats on DNA(eye_color, hair_color);
create index person_details on person(first_name,middle_name,last_name);






-- Queries 

USE MapYourAncestors;

#Pairirng perons with their ancestors

SELECT 
	first_name,
	last_name
FROM 
	person
RIGHT JOIN 
	ancestor
ON 	
	person_id = ancestor_id;










































