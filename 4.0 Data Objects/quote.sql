-- Quote table
CREATE TABLE `class_db`.`quote` (
  `qid` INT NOT NULL AUTO_INCREMENT,
  `quote` TEXT NOT NULL,
  `author` VARCHAR(100) NOT NULL,
  `dob` YEAR NOT NULL,
  `dod` YEAR NULL,
  `category` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`qid`));
