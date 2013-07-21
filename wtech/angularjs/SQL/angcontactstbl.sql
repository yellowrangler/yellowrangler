use  angular;

CREATE TABLE `angContactsTBL` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(25) DEFAULT NULL,
  `zip` varchar(25) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `IndexName` (`Name`)
) ENGINE=InnoDB 

