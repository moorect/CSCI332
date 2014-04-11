SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `Ship`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Ship` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `length` INT NULL,
  `weight` INT NULL,
  `shieldCap` INT NULL,
  `speedCap` INT NULL,
  `class` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Manufacturer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Manufacturer` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `Name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Affiliation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Affiliation` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Weapon`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Weapon` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `class` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `table1` (
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `table2`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `table2` (
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `table3`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `table3` (
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ShipHasWeapon`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ShipHasWeapon` (
  `Ship_id` INT NOT NULL,
  `Weapon_id` INT NOT NULL,
  `Quantity` INT NULL DEFAULT 0,
  PRIMARY KEY (`Ship_id`, `Weapon_id`),
  INDEX `fk_Ship_has_Weapon_Weapon1_idx` (`Weapon_id` ASC),
  INDEX `fk_Ship_has_Weapon_Ship1_idx` (`Ship_id` ASC),
  CONSTRAINT `fk_Ship_has_Weapon_Ship1`
    FOREIGN KEY (`Ship_id`)
    REFERENCES `Ship` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ship_has_Weapon_Weapon1`
    FOREIGN KEY (`Weapon_id`)
    REFERENCES `Weapon` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ShipHasManufacturer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ShipHasManufacturer` (
  `Ship_id` INT NOT NULL,
  `Manufacturer_id` INT NOT NULL,
  PRIMARY KEY (`Ship_id`, `Manufacturer_id`),
  INDEX `fk_Manufacturer_has_Ship_Ship1_idx` (`Ship_id` ASC),
  INDEX `fk_Manufacturer_has_Ship_Manufacturer1_idx` (`Manufacturer_id` ASC),
  CONSTRAINT `fk_Manufacturer_has_Ship_Manufacturer1`
    FOREIGN KEY (`Manufacturer_id`)
    REFERENCES `Manufacturer` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Manufacturer_has_Ship_Ship1`
    FOREIGN KEY (`Ship_id`)
    REFERENCES `Ship` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ShipHasAffiliation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ShipHasAffiliation` (
  `Ship_id` INT NOT NULL,
  `Affiliation_id` INT NOT NULL,
  PRIMARY KEY (`Ship_id`, `Affiliation_id`),
  INDEX `fk_Ship_has_Affiliation_Affiliation1_idx` (`Affiliation_id` ASC),
  INDEX `fk_Ship_has_Affiliation_Ship1_idx` (`Ship_id` ASC),
  CONSTRAINT `fk_Ship_has_Affiliation_Ship1`
    FOREIGN KEY (`Ship_id`)
    REFERENCES `Ship` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ship_has_Affiliation_Affiliation1`
    FOREIGN KEY (`Affiliation_id`)
    REFERENCES `Affiliation` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
