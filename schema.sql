CREATE DATABASE IF NOT EXISTS `dolphin_crm`;

GRANT ALL PRIVILEGES ON dolphin_crm.* TO 'admin'@'localhost' IDENTIFIED BY 'password123';

USE `dolphin_crm`;

DROP TABLE IF EXISTS `userstable`;

CREATE TABLE userstable (
 id  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  firstname varchar(255) NOT NULL,
  lastname varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  email varchar(255),
  role varchar(255),
  created_at DATETIME
);

DROP TABLE IF EXISTS `contacttable`;

CREATE TABLE contacttable (
 id  INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title varchar(255) NOT NULL,
  firstname varchar(255) NOT NULL,
  lastname varchar(255) NOT NULL,
  email varchar(255),
  telephone varchar(255),
  company varchar(255),
  type varchar(255) NOT NULL,
  assigned_to  int NOT NULL,
  created_by int NOT NULL,
  created_at DATETIME,
  updated_at DATETIME
);
DROP TABLE IF EXISTS `notestable`;

CREATE TABLE notestable (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  contact_id int NOT NULL,
  comment TEXT,
  created_by int NOT NULL,
  created_at DATETIME
);

INSERT INTO `userstable` (`firstname`, `lastname`, `password`, `email`,`role` ,`created_at`) VALUES ('user1', 'admin', '$2y$10$J32K.bB0.0s/PUfcrTN/OOzkdUpG3Jwl8uml/QrejVAGkIiMzb5O.', 'admin@project2.com','admin', current_timestamp());