CREATE DATABASE IF NOT EXISTS bancoCrud;

USE bancoCrud;

DROP TABLE IF EXISTS clientes ;

CREATE TABLE IF NOT EXISTS clientes (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(90) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `dataNascimento` DATE NOT NULL,
  `email` VARCHAR(55) NOT NULL,
  `cpf` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idpessoa_UNIQUE` (`id` ASC))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS venda (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `cliente_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idvenda_UNIQUE` (`id` ASC),
  INDEX `fk_venda_clientes1_idx` (`cliente_id` ASC),
  CONSTRAINT `fk_venda_clientes1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `bancoCrud`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS produto (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `preco` VARCHAR(8) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS venda_produto (
  `venda_id` INT NOT NULL,
  `produto_id` INT NOT NULL,
  `quantidade` INT NOT NULL,
  PRIMARY KEY (`venda_id`, `produto_id`),
  INDEX `fk_venda_has_produto_produto1_idx` (`produto_id` ASC),
  INDEX `fk_venda_has_produto_venda1_idx` (`venda_id` ASC),
  CONSTRAINT `fk_venda_has_produto_venda1`
    FOREIGN KEY (`venda_id`)
    REFERENCES `bancoCrud`.`venda` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_venda_has_produto_produto1`
    FOREIGN KEY (`produto_id`)
    REFERENCES `bancoCrud`.`produto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `enderecos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `rua` VARCHAR(45) NOT NULL,
  `numero` VARCHAR(45) NOT NULL,
  `bairro` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `cep` VARCHAR(45) NOT NULL,
  `cliente_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_enderecos_clientes1_idx` (`cliente_id` ASC),
  CONSTRAINT `fk_enderecos_clientes1`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `bancoCrud`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;