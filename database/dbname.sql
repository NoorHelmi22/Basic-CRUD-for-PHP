drop database dbname;
create database dbname;
use dbname;

create table tablename1(
	columnName varchar (50)
);

create table tablename2(
	name varchar (50) PRIMARY KEY ,
    age int (2)
);

create table tablename3(
	name varchar (50) ,
    favouritefood varchar (50),
    favouritedrink varchar (50),
    FOREIGN KEY (name) REFERENCES tablename2(name)
    ON UPDATE CASCADE
);