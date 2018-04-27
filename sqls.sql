CREATE DATABASE IF NOT EXISTS `intalk2` ;
CREATE TABLE IF NOT EXISTS `intalk2`.`dolgozo` (
  `dolgozo_id` INT NOT NULL AUTO_INCREMENT,
  `neve` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `fizetes` VARCHAR(45) NOT NULL,
  `agazat` VARCHAR(45) NOT NULL,
  `neme` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`dolgozo_id`),
  UNIQUE INDEX `dolgozo_id_UNIQUE` (`dolgozo_id` ASC));
