USE ws_diplom;
SHOW TABLES;
SELECT * FROM `user`;
SELECT * FROM `user_info`;
SELECT * FROM `news`;

CREATE TABLE IF NOT EXISTS `ws_diplom`.`user` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(200) NOT NULL,
  `hash` VARCHAR(250) NULL,
  PRIMARY KEY (`id_user`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `ws_diplom`.`user_info` (
  `id_info` INT NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(45) NULL,
  `user_last_name` VARCHAR(45) NULL,
  `gender` TINYINT(4) NULL DEFAULT 0,
  `user_age` FLOAT(11) NULL,
  `user_phone` VARCHAR(45) NULL,
  `user_country` VARCHAR(45) NULL,
  `user_city` VARCHAR(45) NULL,
  `user_laungue` VARCHAR(45) NULL,
  `user_laungue_ex` TINYINT(4) NULL DEFAULT 0,
  `user_laungue_hear` VARCHAR(45) NULL,
  `user_laungue_read` TINYINT(4),
  `user_laungue_lett` VARCHAR(45),
  `user_laungue_talk` VARCHAR(45) NULL,
  `user_education` VARCHAR(45) NULL,
  `user_profession` VARCHAR(45) NULL,
  `user_exp_prof_aboard` VARCHAR(45) NULL,
  `user_additional_Info` VARCHAR(45) NULL,
  `id_user` INT NOT NULL,
  PRIMARY KEY (`id_info`),
  INDEX `fk_user_info_user_idx` (`id_user` ASC),
  CONSTRAINT `fk_user_info_user`
    FOREIGN KEY (`id_user`)
    REFERENCES `ws_diplom`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `ws_diplom`.`news` (
  `id_news` INT(11) NOT NULL AUTO_INCREMENT,
  `news_header` VARCHAR(150) NOT NULL,
  `article` LONGTEXT NOT NULL,
  `id_user` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_news`),
  INDEX `fk_news_user1_idx` (`id_user` ASC),
  CONSTRAINT `fk_news_user1`
    FOREIGN KEY (`id_user`)
    REFERENCES `ws_diplom`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `ws_diplom`.`comentary` (
`id_comentary` INT(11) NOT NULL AUTO_INCREMENT,
``
