-- MySQL Script generated by MySQL Workbench
-- Wed Apr  6 21:48:00 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema bncd9hieeaio2t656g7z
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `bncd9hieeaio2t656g7z` ;

-- -----------------------------------------------------
-- Schema bncd9hieeaio2t656g7z
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bncd9hieeaio2t656g7z` DEFAULT CHARACTER SET utf8 ;
USE `bncd9hieeaio2t656g7z` ;

-- -----------------------------------------------------
-- Table `bncd9hieeaio2t656g7z`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bncd9hieeaio2t656g7z`.`users` (
  `nombre` VARCHAR(20) NOT NULL,
  `edad` INT NOT NULL,
  `tipoD` VARCHAR(20) NOT NULL,
  `numeroD` VARCHAR(20) NOT NULL,
  `dinero` INT NOT NULL,
  `acceso` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`numeroD`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
