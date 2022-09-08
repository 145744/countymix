CREATE TABLE `class_db`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `role_id` INT(11) NOT NULL,
  `gender` CHAR(1) NOT NULL,
  PRIMARY KEY (`id`));

  ALTER TABLE `class_db`.`user`
  ADD INDEX `fk_user_1_idx` (`role_id` ASC);
  ALTER TABLE `class_db`.`user`
  ADD CONSTRAINT `fk_user_1`
    FOREIGN KEY (`role_id`)
    REFERENCES `class_db`.`user` (`id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT;
