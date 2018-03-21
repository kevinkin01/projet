-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema exe_36
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema exe_36
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `exe_36` DEFAULT CHARACTER SET utf8 ;
USE `exe_36` ;

-- -----------------------------------------------------
-- Table `exe_36`.`permission`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exe_36`.`permission` (
  `idpermission` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `level` SMALLINT UNSIGNED NOT NULL DEFAULT 3 COMMENT '0 => admin\n1 => moderator\n2 => editor\n3 => user',
  PRIMARY KEY (`idpermission`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exe_36`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exe_36`.`user` (
  `iduser` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(60) NOT NULL,
  `pwd` VARCHAR(64) NOT NULL,
  `name` VARCHAR(120) NOT NULL,
  `permission_idpermission` SMALLINT UNSIGNED NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC),
  INDEX `fk_user_permission_idx` (`permission_idpermission` ASC),
  CONSTRAINT `fk_user_permission`
    FOREIGN KEY (`permission_idpermission`)
    REFERENCES `exe_36`.`permission` (`idpermission`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exe_36`.`news`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exe_36`.`news` (
  `idnews` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(150) NOT NULL,
  `content` TEXT NOT NULL,
  `publication` TIMESTAMP NULL DEFAULT NOW(),
  `visible` TINYINT UNSIGNED NULL DEFAULT 0,
  `user_iduser` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idnews`),
  INDEX `fk_news_user1_idx` (`user_iduser` ASC),
  CONSTRAINT `fk_news_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `exe_36`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exe_36`.`categ`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exe_36`.`categ` (
  `idcateg` SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(60) NOT NULL,
  `desc` VARCHAR(400) NULL,
  PRIMARY KEY (`idcateg`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `exe_36`.`news_has_categ`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exe_36`.`news_has_categ` (
  `news_idnews` INT UNSIGNED NOT NULL,
  `categ_idcateg` SMALLINT UNSIGNED NOT NULL,
  PRIMARY KEY (`news_idnews`, `categ_idcateg`),
  INDEX `fk_news_has_categ_categ1_idx` (`categ_idcateg` ASC),
  INDEX `fk_news_has_categ_news1_idx` (`news_idnews` ASC),
  CONSTRAINT `fk_news_has_categ_news1`
    FOREIGN KEY (`news_idnews`)
    REFERENCES `exe_36`.`news` (`idnews`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_news_has_categ_categ1`
    FOREIGN KEY (`categ_idcateg`)
    REFERENCES `exe_36`.`categ` (`idcateg`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
