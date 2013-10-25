-- generated by dbdsgnr.appspot.com

CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user` VARCHAR(255),
  `password` VARCHAR(255),
  `email` VARCHAR(255),
  `created` DATETIME,
  `modified` DATETIME,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `eventos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255),
  `descripcion` TEXT,
  `created` DATETIME,
  `modified` DATETIME,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `categorias` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `localizacion` VARCHAR(255),
  `puntuacion` DOUBLE(6,2),
  `name` VARCHAR(255),
  `puntos` DOUBLE(6,2),
  `created` DATETIME,
  `modified` DATETIME,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `usuarios_eventos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11),
  `evento_id` INT(11),
  `created` DATETIME,
  `modified` DATETIME,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `eventos_categorias` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `evento_id` INT(11),
  `categoria_id` INT(11),
  `created` DATETIME,
  `modified` DATETIME,
  PRIMARY KEY  (`id`)
);




ALTER TABLE `usuarios_eventos` ADD CONSTRAINT `usuarios_eventos_fk1` FOREIGN KEY (`user_id`) REFERENCES users(`id`);
ALTER TABLE `usuarios_eventos` ADD CONSTRAINT `usuarios_eventos_fk2` FOREIGN KEY (`evento_id`) REFERENCES eventos(`id`);
ALTER TABLE `eventos_categorias` ADD CONSTRAINT `eventos_categorias_fk1` FOREIGN KEY (`evento_id`) REFERENCES eventos(`id`);
ALTER TABLE `eventos_categorias` ADD CONSTRAINT `eventos_categorias_fk2` FOREIGN KEY (`categoria_id`) REFERENCES categorias(`id`);
