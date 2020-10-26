CREATE TABLE images (
id int PRIMARY KEY AUTO_INCREMENT,
title varchar(50) NOT NULL,
path varchar(255) NOT NULL,
views int DEFAULT 0
)
