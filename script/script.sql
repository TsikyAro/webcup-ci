CREATE USER eval SUPERUSER LOGIN PASSWORD 'eval';
CREATE DATABASE eval WITH OWNER eval;

CREATE table user_account(
    idUser  integer AUTO_INCREMENT  PRIMARY KEY,
    name    varchar(30),
    password    varchar(30),
    email        varchar(30)
);

insert into user_account(name,password,email) values ('Aro','1234','aro@gmail.com')