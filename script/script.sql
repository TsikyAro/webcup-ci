CREATE USER eval SUPERUSER LOGIN PASSWORD 'eval';
CREATE DATABASE eval WITH OWNER eval;

CREATE table user_account(
    idUser  serial  PRIMARY KEY,
    name    varchar(30),
    password    varchar(30),
    email        varchar(30)
);
