CREATE TABLE pages
(
    title varchar(255) not null,
    route varchar(255) not null primary key ,
    body  text not null
);

CREATE TABLE config
(
    name varchar(255) not null,
    bg1  varchar(255) not null,
    bg2  varchar(255) not null,
    nav1 varchar(255) not null,
    nav2 varchar(255) not null
);

CREATE TABLE images
(
    name varchar(255) not null primary key,
    image blob not null

);

CREATE USER 'site'@'localhost' IDENTIFIED BY 'unbreakable';
grant all privileges on *.* to 'site'@'localhost';