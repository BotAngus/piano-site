CREATE TABLE pages (
    title varchar(255),
    route varchar(255),
    body text
);

CREATE TABLE  config (
    bg1 varchar(255),
    bg2 varchar(255),
    nav1 varchar(255),
    nav2 varchar(255)
);

CREATE USER 'site'@'localhost' IDENTIFIED BY 'unbreakable';
grant all privileges on *.* to 'site'@'localhost';