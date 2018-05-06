CREATE DATABASE IF NOT EXISTS `intalk2` ;
CREATE TABLE `dolgozo` (
  `dolgozo_id` int(11) NOT NULL AUTO_INCREMENT,
  `neve` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fizetes` varchar(45) NOT NULL,
  `agazat` int(11) NOT NULL,
  `neme` int(11) NOT NULL,
  PRIMARY KEY (`dolgozo_id`),
  UNIQUE KEY `dolgozo_id_UNIQUE` (`dolgozo_id`),
  KEY `agazat_FK_idx` (`agazat`),
  KEY `neme_FK_idx` (`neme`),
  CONSTRAINT `agazat_FK` FOREIGN KEY (`agazat`) REFERENCES `agazat` (`idagazat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `neme_FK` FOREIGN KEY (`neme`) REFERENCES `neme` (`idneme`) ON DELETE NO ACTION ON UPDATE NO ACTION
);

CREATE TABLE `agazat` (
  `idagazat` int(11) NOT NULL AUTO_INCREMENT,
  `agazat` varchar(45) NOT NULL,
  PRIMARY KEY (`idagazat`);

CREATE TABLE `neme` (
  `idneme` int(11) NOT NULL AUTO_INCREMENT,
  `neme` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idneme`)
) ;


INSERT INTO `intalk2`.`agazat` (`agazat`) VALUES ('IT'),('Gazdaság'),('Könyvelés'),('Üzleti Elemző');
INSERT INTO `intalk2`.`neme` (`neme`) VALUES ('Nő'),('Férfi');
