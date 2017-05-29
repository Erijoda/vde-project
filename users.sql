CREATE TABLE `vde-project`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(255) NOT NULL ,
  `password` VARCHAR(255) NOT NULL ,
  `firstname` VARCHAR(255) NULL ,
  `lastname` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`),
  UNIQUE (`username`)) ENGINE = InnoDB;