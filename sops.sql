-- MySQL Script generated by MySQL Workbench
-- Mon May 11 19:43:29 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sops
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sops
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sops` DEFAULT CHARACTER SET utf8 ;
USE `sops` ;

-- -----------------------------------------------------
-- Table `sops`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sops`.`funcionario` (
  `id_funcionario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `endereco` VARCHAR(250) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `data_nasc` DATE NOT NULL,
  `salario` VARCHAR(100) NOT NULL,
  `cargo` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_funcionario`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `sops`.`equipamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sops`.`equipamento` (
  `id_equipamento` INT NOT NULL AUTO_INCREMENT,
  `nome_equipamento` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_equipamento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sops`.`servicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sops`.`servicos` (
  `id_servicos` INT NOT NULL AUTO_INCREMENT,
  `nome_servico` VARCHAR(45) NULL,
  `id_funcionario` INT NOT NULL,
  `id_compra` INT NOT NULL,
  `id_equipamento` INT NOT NULL,
  PRIMARY KEY (`id_servicos`),
  INDEX `fk_servicos_funcionario_idx` (`id_funcionario` ASC),
  INDEX `fk_servicos_compra1_idx` (`id_compra` ASC),
  INDEX `fk_servicos_table11_idx` (`id_equipamento` ASC),
  CONSTRAINT `fk_servicos_funcionario`
    FOREIGN KEY (`id_funcionario`)
    REFERENCES `sops`.`funcionario` (`id_funcionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicos_compra1`
    FOREIGN KEY (`id_compra`)
    REFERENCES `sops`.`compra` (`id_compra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicos_table11`
    FOREIGN KEY (`id_equipamento`)
    REFERENCES `sops`.`equipamento` (`id_equipamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sops`.`veiculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sops`.`veiculo` (
  `id_veiculo` INT NOT NULL AUTO_INCREMENT,
  `marca` VARCHAR(45) NOT NULL,
  `modelo` VARCHAR(45) NOT NULL,
  `ano_fabricacao` VARCHAR(45) NOT NULL,
  `placa` VARCHAR(7) NOT NULL,
  PRIMARY KEY (`id_veiculo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sops`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sops`.`cliente` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `data_nasc` DATE NOT NULL,
  `id_veiculo` INT NOT NULL,
  PRIMARY KEY (`id_cliente`),
  INDEX `fk_cliente_veiculo1_idx` (`id_veiculo` ASC),
  CONSTRAINT `fk_cliente_veiculo1`
    FOREIGN KEY (`id_veiculo`)
    REFERENCES `sops`.`veiculo` (`id_veiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sops`.`venda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sops`.`venda` (
  `id_venda` INT NOT NULL AUTO_INCREMENT,
  `nome_servico` VARCHAR(45) NOT NULL,
  `valor` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_venda`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sops`.`registro de atendimento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sops`.`registro de atendimento` (
  `id_registro` INT NOT NULL AUTO_INCREMENT,
  `nota_fiscal` VARCHAR(45) NOT NULL,
  `id_servicos` INT NOT NULL,
  `id_cliente` INT NOT NULL,
  `id_venda` INT NOT NULL,
  PRIMARY KEY (`id_registro`),
  INDEX `fk_Registro de atendimento_servicos1_idx` (`id_servicos` ASC),
  INDEX `fk_Registro de atendimento_cliente1_idx` (`id_cliente` ASC),
  INDEX `fk_registro de atendimento_venda1_idx` (`id_venda` ASC),
  CONSTRAINT `fk_Registro de atendimento_servicos1`
    FOREIGN KEY (`id_servicos`)
    REFERENCES `sops`.`servicos` (`id_servicos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Registro de atendimento_cliente1`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `sops`.`cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_registro de atendimento_venda1`
    FOREIGN KEY (`id_venda`)
    REFERENCES `sops`.`venda` (`id_venda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


