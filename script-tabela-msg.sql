CREATE TABLE `blog`.`mensagens` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data_msg` DATETIME NOT NULL,
  `nome` VARCHAR(50) NOT NULL,
  `msg` TEXT NOT NULL,
  PRIMARY KEY (`id`));

